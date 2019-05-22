<?php

namespace App\Http\Controllers;

use App\snack;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = snack::paginate(10);
        return view('snack.index',['snacks' =>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('snack.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new snack;
        $items->nama_camilan = $request['nama_camilan'];
        $items->jenis = $request['jenis'];
        $items->harga = $request['harga'];
        $items->save();

        return redirect('/snack');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\snack  $snack
     * @return \Illuminate\Http\Response
     */
    public function show(snack $snack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\snack  $snack
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $items = snack::find($id);
        return view('snack.edit', [ 'snacks' => $items ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\snack  $snack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $items = snack::find($id);
        $items->nama_camilan = $request['nama_camilan'];
        $items->jenis = $request['jenis'];
        $items->harga = $request['harga'];
        $items->update();

        return redirect('/snack');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\snack  $snack
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = snack::where('id', $id);
        $items ->delete();

        return redirect('/snack');
    }
}
