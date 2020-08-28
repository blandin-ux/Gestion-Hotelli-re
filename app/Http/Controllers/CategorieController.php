<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;
use App\Models\Article;

class CategorieController extends Controller
{
    public function index(){
        $categorie=Categorie::orderBy('id')->paginate(10);
        return view('Categories/index')->with(compact('categorie'));
    }

    public function create(){
        return view('Categories/create');
    }

    public function store(Request $request){
        $categorie=new Categorie();
        $categorie->name=$request->name;
        $categorie->description=$request->description;
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext,$ext_array)){
                if(!file_exists(public_path().'/images')){
                    mkdir(public_path().'/images');
                }
                if(!file_exists(public_path().'/images/categories')){
                    mkdir(public_path().'/images/categories');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'images/categories/'. $name;
                $fichier->move(public_path('images/categories'),$name);
                $categorie->image_uri = $path;

            }
        }
        $categorie->save();
        return redirect('/liste-categories');
    }

    public function show($id){
        $categorie=Categorie::find($id);
        return view('Categories/show')->with(compact('categorie'));
    }

    public function edit($id){
        $categorie=Categorie::find($id);
        return view('Categories/edit')->with(compact('categorie'));
    }

    public function save(Request $request){
        $categorie=Categorie::find($request->id);
        $categorie->name=$request->name;
        $categorie->description=$request->description;
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext,$ext_array)){
                if(!file_exists(public_path().'/images')){
                    mkdir(public_path().'/images');
                }
                if(!file_exists(public_path().'/images/categories')){
                    mkdir(public_path().'/images/categories');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'images/categories/'. $name;
                $fichier->move(public_path('images/categories'),$name);
                $categorie->image_uri = $path;

            }
        }
        $categorie->save();
        return redirect('/liste-categories');

    }

    public function activer($id){
        $categorie=Categorie::find($id);
        $categorie->actif=1;
        $categorie->save();
        return redirect()->back();
    }

    public function desactiver($id){
        $categorie=Categorie::find($id);
        $categorie->actif=0;
        $categorie->save();
        return redirect()->back();
    }
}
