<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;
use App\Models\Hotel;
use App\Models\Categorie;
use App\Models\Tarifier;
use App\Models\Reservation;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chambres = Chambre::orderBy('id')->paginate(6);
        $reservations = Reservation::all();
        return view('Chambres/index')->with(compact('chambres','reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hotels = Hotel::all();
        $categories = Categorie::all();
        $tarifiers = Tarifier::all();
        return view('Chambres/create')->with(compact('hotels','categories','tarifiers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $chambre = new Chambre();
        $chambre->categorie_id = $request->categorie_id;
        $chambre->hotel_id = $request->hotel_id;
        $chambre->telephone = $request->telephone;
        $chambre->tarifier_id = $request->tarifier_id;
        
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_path().'/img')){
                    mkdir(public_path().'/img');
                }
                if(!file_exists(public_path().'/img/chambres')){
                    mkdir(public_path().'/img/chambres');
                }
                $name = date('dmYhis').'.'.$ext;
                $path = 'img/chambres/'. $name;
                $fichier->move(public_path('img/chambres'),$name);
                $chambre->image_uri = $path;
                dd($chambre);
            }
        }
        //dd('ext not ok');

         $chambre->save();
         return redirect('/chambres');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //
        $chambre = Chambre::find($id);
        return view('Chambres/show')->with(compact('chambre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $chambre = Chambre::find($id);
        $categories = Categorie::all();
        $hotels = Hotel::all();
        $tarifiers = Tarifier::all();
        return view('Chambres/edit')->with(compact('chambre','categories','hotels','tarifiers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $chambre = Chambre::find($request->id);
        $chambre->categorie_id = $request->categorie_id;
        $chambre->hotel_id = $request->hotel_id;
        $chambre->telephone = $request->telephone;
        $chambre->tarifier_id = $request->tarifier_id;

        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_path().'/img')){
                    mkdir(public_path().'/img');
                }
                if(!file_exists(public_path().'/img/chambres')){
                    mkdir(public_path().'/img/chambres');
                }
                $name = date('dmYhis').'.'.$ext;
                $path = 'img/chambres/'. $name;
                $fichier->move(public_path('img/chambres'),$name);
                $chambre->image_uri = $path;
                //dd($chambre);
            }
        }
        //dd('ext not ok');

         $chambre->save();
         return redirect('/chambres');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
