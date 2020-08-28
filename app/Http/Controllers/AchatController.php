<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Ligne;
use App\Models\Article; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\User;

class AchatController extends Controller
{
    //
    public function index(){
        //$lignes = Ligne::where('ticket_id','!=',0)->paginate(10);
        $tickets = Ticket::orderBy('created_at','DESC')->paginate(6);
        $articles = Article::all();
        return view('Achat/index')->with(compact('tickets','articles'));
    }
    public function create(){
        $articles = Article::all();
        $ticket = Ticket::create(['name'=>date('ymdhis'),'user_id'=>Auth::user()->id]);
        return view('Achat/create')->with(compact('ticket','articles'));
    }
    public function addArticle(Request $request){
        if(!$request->ticket_id){
            return redirect('/achats/create');
        }
        $article = Article::find($request->article_id);
        $ligne = Ligne::create(['article_id'=>$request->article_id,'ticket_id'=>$request->ticket_id,'quantite'=>$request->quantite,'pu'=>$article->pv,'semaine'=>date('W'),'mois'=>date('m'),'annee'=>date('Y'),'actif'=>1]);
        $ticket = Ticket::find($request->ticket_id);
        $article = Article::find($request->article_id);
        $articles = Article::all();
        return view('Achat/create')->with(compact('ticket','articles','article'));
    }
    public function valider($id,Request $request){
        $ticket = Ticket::find($id);
        $ticket->valider=1;
        foreach($ticket->lignes as $ligne){
            $article = Article::find($ligne->article_id);
            $article->quantite = $article->quantite - $ligne->quantite;
            $article->save();
        }
        $ticket->save();
        return redirect('/achats');
    }
    public function annuler($id){
       DB::table('lignes')->where(['ticket_id'=>$id])->delete();
       return redirect('/achats');
    }
    public function show($id){
        $ticket = Ticket::find($id);
        return view('Achat/show')->with(compact('ticket'));
    }
    
    public function katoula($id){
        $ligne= Ligne::find($id);
        DB::table('lignes')->where(['id'=>$id])->delete();
        return redirect('/achats/edit/'.$ligne->ticket_id);
     }

     public function edit($id){
        $ticket = Ticket::find($id);
        $articles = Article::all();
        return view('Achat/edit')->with(compact('ticket','articles'));

     }

     public function store(Request $request){
        //dd($request->champs); 
        $data = $request->champs;
        $ticket = Ticket::create(['name'=>date('ymdhis'),'user_id'=>Auth::user()->id]);
        for($i=0; $i<count($data);$i++){
            $elt = $data[$i];
            $article = Article::find($elt['article_id']);
            $ligne = Ligne::create(['article_id'=>$elt['article_id'],'ticket_id'=>$ticket->id,'quantite'=>$elt['quantite'],'pu'=>$article->pv,'semaine'=>date('W'),'mois'=>date('m'),'annee'=>date('Y'),'actif'=>1]);
        }
        foreach($ticket->lignes as $ligne){
            $article = Article::find($ligne->article_id);
            $article->quantite = $article->quantite - $ligne->quantite;
            $article->save();
        }
        return response()->json('Terminé',200);
        
    }

}