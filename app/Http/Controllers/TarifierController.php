<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarifier;
use App\Models\Classe;
use App\Models\Categorie;

class TarifierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tarifs = Tarifier::all();
        return view('Tarifs/index')->with(compact('tarifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categorie::all();
        $classes = Classe::all();
        return view('Tarifs/create')->with(compact('categories','classes'));
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
        $tarif = new Tarifier();
        $tarif->categorie_id = $request->categorie_id;
        $tarif->classe_id = $request->classe_id;
        $tarif->tarifUnitaire = $request->tarifUnitaire;
        //dd($tarif);
        $tarif->save();
        return redirect('/tarifs');
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
        $categories = Categorie::all();
        $classes = Classe::all();
        $tarifs = Tarifier::find($id);
        return view('Tarifs/edit')->with(compact('tarifs','categories','classes')); 
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
        $tarif = Tarifier::find($request->id);
        $tarif->categorie_id = $request->categorie_id;
        $tarif->classe_id = $request->classe_id;
        $tarif->tarifUnitaire = $request->tarifUnitaire;
        //dd($tarif);
        $tarif->save();
        return redirect('/tarifs');
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
