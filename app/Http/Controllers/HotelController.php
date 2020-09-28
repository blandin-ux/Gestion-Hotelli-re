<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Classe;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels = Hotel::all();
        return view('/Hotels/index')->with(compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $classe = Classe::all();
        return view('/Hotels/create')->with(compact('classe'));

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
        $hotels = new Hotel();
        $hotels->name = $request->name;
        $hotels->adresse = $request->adresse;
        $hotels->telephone = $request->telephone;
        $hotels->cph = $request->cph;
        $hotels->classe_id = $request->classe_id;
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
                if(!file_exists(public_path().'/img/hotels')){
                    mkdir(public_path().'/img/hotels');
                }
                $name = date('dmYhis').'.'.$ext;
                $path = 'img/hotels/'. $name;
                $fichier->move(public_path('img/hotels'),$name);
                $hotels->image_uri = $path;
                //dd($hotels);
            }
        }
        //dd('ext not ok');

         $hotels->save();
         return redirect('/hotels');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $hotel = Hotel::find($id);
        return view('/Hotels/show')->with(compact('hotel'));
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
        $hotel = Hotel::find($id);
        $classe = Classe::all();
        return view('/Hotels/edit')->with(compact('hotel','classe'));
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
        $hotels = Hotel::find($request->id);
        $hotels->name = $request->name;
        $hotels->adresse = $request->adresse;
        $hotels->telephone = $request->telephone;
        $hotels->cph = $request->cph;
        $hotels->classe_id = $request->classe_id;
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
                if(!file_exists(public_path().'/img/hotels')){
                    mkdir(public_path().'/img/hotels');
                }
                $name = date('dmYhis').'.'.$ext;
                $path = 'img/hotels/'. $name;
                $fichier->move(public_path('img/hotels'),$name);
                $hotels->image_uri = $path;
                //dd($hotels);
            }
        }
        //dd('ext not ok');

         $hotels->save();
         return redirect('/hotels');        
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

    public function sossa(Request $request)
    {
        //
        $sossa = $request->sossa;
        $hotels = Hotel::where('name','like',"%$sossa%");
        //dd($hotels);
        return view('FrontOffice/sossa')->with(compact('hotels','sossa'));
    }
}
