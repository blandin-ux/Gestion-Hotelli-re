<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Hotel;
use App\Models\Chambre;
use App\Models\Reservation;

class FrontofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $hotels = Hotel::all();
        return view('FrontOffice/welcome')->with(compact('hotels'));
    }

    public function chambre()
    {
        //
        $chambres = Chambre::orderBy('id')->where('actif',1)->paginate(6);
        return view('FrontOffice/chambre')->with(compact('chambres'));
    }

    public function show($id)
    {
        //
        $chambre = Chambre::find($id);
        return view('Chambres/show')->with(compact('chambre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        //
        return view('FrontOffice/contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function apropos()
    {
        //
        return view('FrontOffice/apropos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        //
        return view('FrontOffice/blog');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function chambreDetail()
    {
        //
        return view('FrontOffice/chambreDetail');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blogDetail()
    {
        //
        return view('FrontOffice/blogDetail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sossa(Request $request)
    {
        //
        $sossa = $request->sossa;
        $hotels = Hotel::where('name','like',"%$sossa%");
        //dd($hotels);
        return view('FrontOffice/sossa')->with(compact('hotels','sossa'));
    }
    
    public function reserver($id){
        //
        $chambre = Chambre::find($id);
        return view('FrontOffice/reserver')->with((compact('chambre')));
    }

    public function reserverClient(Request $request){
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->entree = $request->entree;
        $reservation->sortie = $request->sortie;
        $reservation->telephone = $request->telephone;
        $reservation->chambre_id = $request->chambre_id;
        //dd($reservation);
        $reservation->save();
        return view('FrontOffice/message')->with(compact('reservation'));
    }
}
