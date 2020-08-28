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
use App\Models\Inventaire;
use App\Models\Linv;

class InventaireController extends Controller
{
    //
    public function index(){
        $inventaires = Inventaire::orderBy('created_at','DESC')->paginate(10);
        return view('Inventaires/index')->with(compact('inventaires'));
    }

    public function create(){
        $articles = Article::all();
        
        return view('Inventaires/create')->with(compact('articles'));
    }

    public function store(Request $request){
        //dd($request->champs);
        $data = $request->champs;
        $inventaire = Inventaire::create(['name'=>'INV'.date('dmyhmi'),'user_id'=>auth()->user()->id]);
        for($i=0; $i<count($data);$i++){
            $elt = $data[$i];
            Linv::create(['inventaire_id'=>$inventaire->id,'article_id'=>$elt['article_id'],'enstock'=>$elt['quantite'],'reel'=>$elt['reel']]);
        }

        return response()->json('ok',200);

    }

    public function valider($id,Request $request){
       
        $ticket->save();
        return redirect('/achats');
    }


    public function annuler($id){
       
    }
    public function show($id, Request $request){
        $inventaire = Inventaire::find($id);
        return view('Inventaires/show')->with(compact('inventaire'));
    }
    
    

     public function edit($id){
        

     }

}