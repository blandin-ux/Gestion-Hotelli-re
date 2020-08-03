<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client = Client::orderBy('id')->paginate(10);
        return view('Client/index')->with(compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $client = Client::all();
        return view('Client/create')->with(compact('client'));
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
        $client = new Client();
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        //dd($client);
        $client->save();
        return redirect('/clients');
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
        $client = Client::find($id);
        return view('Client/show')->with(compact('client'));
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
        $client = Client::find($id);
        return view('Client/edit')->with(compact('client'));
    }
    public function save(Request $request){
        $client = Client::find($request->id);
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        //dd($client);
        $client->save();
        return redirect('/clients');        

    }
    public function open($id){
        $client = Client::find($id);
        $client->actif=1;
        //dd($client);
        $client->save();
        return redirect('/clients');
    }
    public function close($id){
        $client = Client::find($id);
        $client->actif=0;
        //dd($client);
        $client->save();
        return redirect('/clients');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
