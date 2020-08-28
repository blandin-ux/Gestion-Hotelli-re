<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Entree;

class ArticleController extends Controller
{
    public function index(){
        $article=Article::orderBy('id')->paginate(10);
        $categorie=Categorie::all();
        return view('Articles/index')->with(compact('article', 'categorie'));
    }

    public function create(){
        $article=Article::all();
        $categorie=Categorie::all();
        $entree=Entree::all();
        return view('Articles/create')->with(compact('article', 'categorie'));
    }

    public function store(Request $request){
        $article=new Article();
        $article->name=$request->name;
        $article->quantite=$request->quantite;
        $article->pa=$request->pa;
        $article->pv=$request->pv;
        $article->minimum=$request->minimum;
        $article->categorie_id=$request->categorie_id;
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext,$ext_array)){
                if(!file_exists(public_path().'/images')){
                    mkdir(public_path().'/images');
                }
                if(!file_exists(public_path().'/images/articles')){
                    mkdir(public_path().'/images/articles');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'images/articles/'. $name;
                $fichier->move(public_path('images/articles'),$name);
                $article->image_uri = $path;

            }
        }
        $article->save();
        return redirect('/gestion-articles');
    }

    public function show($id){
        $article=Article::find($id);
        return view('Articles/show')->with(compact('article'));
    }

    public function edit($id){
        $article=Article::find($id);
        $categorie=Categorie::all();
        return view('Articles/edit')->with(compact('categorie', 'article'));
    }

    public function save(Request $request){
        $article=Article::find($request->id);
        $article->name=$request->name;
        $article->quantite;
        $article->pa=$request->pa;
        $article->pv=$request->pv;
        $article->minimum=$request->minimum;
        $article->categorie_id=$request->categorie_id;
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext,$ext_array)){
                if(!file_exists(public_path().'/images')){
                    mkdir(public_path().'/images');
                }
                if(!file_exists(public_path().'/images/articles')){
                    mkdir(public_path().'/images/articles');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'images/articles/'. $name;
                $fichier->move(public_path('images/articles'),$name);
                $article->image_uri = $path;

            }
        }
        $article->save();
        return redirect('/gestion-articles');
    }

    public function activer($id){
        $article=Article::find($id);
        $article->actif=1;
        $article->save();
        return redirect()->back();
    }

    public function desactiver($id){
        $article=Article::find($id);
        $article->actif=0;
        $article->save();
        return redirect()->back();
    }

    public function rupture(){
        $article=Article::all();
        return view('Stocks/rupture')->with(compact('article'));
    }
}
