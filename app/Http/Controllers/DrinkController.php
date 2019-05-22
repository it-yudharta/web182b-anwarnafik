<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
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
        $items = Drink::paginate(10);
        return view('drink.index',['drinks' =>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drink.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new Drink;
        $items->nama_minuman = $request['nama_minuman'];
        $items->jenis = $request['jenis'];
        $items->harga = $request['harga'];
        $items->save();

        return redirect('/drink');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drink  $items
     * @return \Illuminate\Http\Response
      */
    public function show(Drink $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drink  $items
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $items = Drink::find($id);
        return view('drink.edit', [ 'drinks' => $items ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drink  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $items = Drink::find($id);
        $items->nama_minuman = $request['nama_minuman'];
        $items->jenis = $request['jenis'];
        $items->harga = $request['harga'];
        $items->update();

        return redirect('/drink');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drinks  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Drink::where('id', $id);
        $items ->delete();

        return redirect('/drink');
    }
}
