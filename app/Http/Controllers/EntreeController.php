<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entree;
use App\Models\Article;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class EntreeController extends Controller
{
    public function create(){
        $entree=Entree::all();
        $article=Article::all();
        $stock=Stock::create(['name'=>('STOCK'.date('YmdHis')), 'numserie'=>('STK'.date('YmdHis')), 'annees'=>date('Y'), 'mois'=>date('m'), 'semaines'=>date('W'), 'actif'=>1]);
        return view('Entrees/create')->with(compact('entree', 'article', 'stock'));
    }

    public function nouvelleEntree(Request $request){
        $articleid=Article::find($request->article_id);
        $stock=Stock::find($request->stock_id);
        $entree=Entree::create(['article_id'=>$request->article_id, 'stock_id'=>$request->stock_id, 'quantite'=>$request->quantite, 'pa'=>$request->pa, 'pv'=>$request->pv]);
        $article=Article::all();
        return view('Entrees/create')->with(compact('articleid', 'stock', 'entree', 'article'));
    }

    public function confirmer($id, Request $request){
        $stock=Stock::find($id);
        $stock->confirmer=1;
        foreach($stock->entrees as $entree){
            $article=Article::find($entree->article_id);
            $article->quantite = $article->quantite + $entree->quantite;
            $article->pa = $entree->pa;
            $article->pv = $entree->pv;
            //dd($article);
            $article->save();
        }
        $stock->save();
        return redirect('/gestion-stocks');
    }

    public function annuler($id){
        DB::table('entrees')->where(['stock_id'=>$id])->delete();
        Stock::destroy($id);
        return redirect('/gestion-stocks');
    }
/*
    public function store(Request $request){
        $entree=new Entree();
        $entree->quantite=$request->quantite;
        $entree->pa=$request->pa;
        $entree->pv=$request->pv;
        $entree->article_id=$request->article_id;
        $entree->stock_id=$request->stock_id;
        //dd($entree);
        $entree->save();
        return redirect('/gestion-entrees');
    }
    */

    public function store(Request $request){
        $data = $request->champs;
        //dd($request->champs);
        $stock = Stock::create(['name'=>'STOCK'.date('YmdHis'), 'numserie'=>('STK'.date('YmdHis')), 'annees'=>date('Y'), 'mois'=>date('m'), 'semaines'=>date('W'), 'actif'=>1 ]);
        for($i=0; $i<count($data); $i++){
            $elt = $data[$i];
            Entree::create(['stock_id'=>$stock->id,'article_id'=>$elt['article_id'],'quantite'=>$elt['quantite'],'pa'=>$elt['pa'], 'pv'=>$elt['pv']]);
        }
        foreach($stock->entrees as $entree){
            $article=Article::find($entree->article_id);
            $article->quantite = $article->quantite + $entree->quantite;
            $article->pa = $entree->pa;
            $article->pv = $entree->pv;
            //dd($article);
            $article->save();
        }
        return response()->json('OK',200);
    }


    public function save(Request $request){
        $entree=Entree::find($request->id);
        $entree->quantite=$request->quantite;
        $entree->pa=$request->pa;
        $entree->pv=$request->pv;
        $entree->article_id=$request->article_id;
        $entree->stock_id=$request->stock_id;
        $entree->save();
        return redirect('/gestion-entrees');
    }

    public function activer($id){
        $entree=Entree::find($id);
        $entree->actif=1;
        $entree->save();
        return redirect()->back();
    }

    public function desactiver($id){
        $entree=Entree::find($id);
        $entree->actif=0;
        $entree->save();
        return redirect()->back();
    }

}
