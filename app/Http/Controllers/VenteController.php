<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ligne;
use App\Models\Article;
use App\User;
use App\Models\Facture;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class VenteController extends Controller
{
    //
    public function create(){
        $ligne = Ligne::OrderBy('id')->paginate(5);
        $articles = Article::all();
        $client = Client::all();
        $facture = Facture::all();
        return view('Vente/create')->with(compact('ligne','articles','client','facture'));
    }
    public function addClient(Request $request){
        $ligne = Ligne::all();
        $articles = Article::all();
        $client = Client::all();
        $facture = Facture::all();        
        $facture = new Facture();
        $facture->client_id = $request->client_id;
        $facture->name=date('ymdhis');
        $facture->user_id=Auth::user()->id;
        $facture->save();
        return view('Vente/vendre')->with(compact('ligne','articles','client','facture'));
    }
    public function addArticle(Request $request){
        if(!$request->facture_id){
            return redirect('/vente/create');
        }
        $article = Article::find($request->article_id);
        $ligne = Ligne::create(['article_id'=>$request->article_id,'facture_id'=>$request->facture_id,'quantite'=>$request->quantite,'pu'=>$article->pv, 'semaine'=>date('W'),'mois'=>date('m'),'annee'=>date('Y'),'actif'=>1]);
        $facture = Facture::find($request->facture_id);
        $article = Article::find($request->article_id);
        $articles = Article::all();
        return view('Vente/vendre')->with(compact('facture','articles','article'));
    }

    public function valider($id,Request $request){
        $ligne = Facture::find($id);
        $ligne->valider=1;
        foreach($ligne->lignes as $ligne){
            $article = Article::find($ligne->article_id);
            $article->quantite = $article->quantite - $ligne->quantite;
            $article->save();
        }
        $ligne->save();
        return redirect('/facture/index');
    }
    public function annuler($id,Request $request){
       DB::table('lignes')->where(['facture_id'=>$id])->delete();
       Facture::destroy($id);
       return redirect('/facture/index');
    }
    public function index(){
        $factures = Facture::OrderBy('id','DESC')->paginate(10);
        $articles = Article::all();
        $client = Client::all();
        return view('Vente/index')->with(compact('factures','articles','client'));
    }
    public function show($id){
        $facture = Facture::find($id);
        return view('Vente/show')->with(compact('facture'));
    }
    public function katoula($id){
        $ligne = Ligne::find($id);
        DB::table('lignes')->where(['id'=>$id])->delete();
        return redirect('/vente/edit/'.$ligne->facture_id);
     }
     public function edit($id){
         $facture = Facture::find($id);
         $articles = Article::all();
         return view('Vente/edit')->with(compact('facture','articles'));
     }
     public function store(Request $request){
         $data = $request->champs;
         foreach($data as $da){
            $facture = Facture::create(['client_id'=>$da['client_id'],'name'=>date('ymdhis'),'user_id'=>Auth::user()->id,'valider'=>1]);  
         }
         for($i=0; $i<count($data); $i++){
            $elt = $data[$i]; 
            $article = Article::find($elt['article_id']);
            Ligne::create(['article_id'=>$elt['article_id'],'facture_id'=>$facture->id,'quantite'=>$elt['quantite'],'pu'=>$article->pv,'semaine'=>date('W'),'mois'=>date('m'),'annee'=>date('Y'),'actif'=>1]);
         }
        foreach($facture->lignes as $ligne){
            $article = Article::find($ligne->article_id);
            $article->quantite = $article->quantite - $ligne->quantite;
            $article->save();
        }
         return response()->json('Terminé', 200);
     }
}
