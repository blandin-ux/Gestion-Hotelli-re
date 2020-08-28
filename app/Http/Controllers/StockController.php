<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stock;
use App\Models\Article;
use App\Models\Entree;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index(){
        $stock=Stock::orderBy('created_at', 'ASC')->paginate(10);
        $entrees=Entree::all();
        $articles=Article::all();
        return view('Stocks/index')->with(compact('stock','entrees','articles'));
    }

    public function create(){
        $stock=Stock::all();
        $article=Article::all();
        return view('Stocks/create')->with(compact('stock', 'article'));
    }

    public function store(Request $request){
        $stock=new Stock();
        $stock->name=$request->name;
        $stock->numserie=$request->numserie;
        $stock->annees=$request->annees;
        $stock->mois=$request->mois;
        $stock->semaines=$request->semaines;
        $stock->save();
        return redirect('/gestion-stocks');
    }

    public function show($id){
        $stock=Stock::find($id);
        return view('Stocks/show')->with(compact('stock',));
    }

    public function edit($id){
        $stock=Stock::find($id);
        return view('Stocks/edit')->with(compact('stock'));
    }

    public function save(Request $request){
        $stock=Stock::find($request->id);
        $stock->name=$request->name;
        $stock->numserie=$request->numserie;
        $stock->annees=$request->annees;
        $stock->mois=$request->mois;
        $stock->semaines=$request->semaines;
        $stock->save();
        return redirect('/gestion-stocks');
    }

    public function activer($id){
        $stock=Stock::find($id);
        $stock->actif=1;
        $stock->save();
        return redirect()->back();
    }

    public function desactiver($id){
        $stock=Stock::find($id);
        $stock->actif=0;
        $stock->save();
        return redirect()->back();
    }

    public function supprimer($id){
        DB::table('stocks')->where(['stock_id'=>$id])->delete();
        Stock::destroy($id);
        return view('Entrees/index')->with(compact('entree', 'article', 'stock'));
    }

}
