<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
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
        $items = Food::paginate(10);
        return view('food.index',['foods' =>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('food.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new Food;
        $items->nama_makanan = $request['nama_makanan'];
        $items->jenis = $request['jenis'];
        $items->harga = $request['harga'];
        $items->save();

        return redirect('/food');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Food::find($id);
        return view('food.edit', [ 'foods' => $items ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    { 
        $items = Food::find($id);
        $items->nama_makanan = $request['nama_makanan'];
        $items->jenis = $request['jenis'];
        $items->harga = $request['harga'];
        $items->update();

        return redirect('/food');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Food::where('id', $id);
        $items ->delete();

        return redirect('/food');
    }
}
