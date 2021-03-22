<?php

namespace App\Http\Controllers;

use App\beer;
use Illuminate\Http\Request;

class BeerCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = beer::all();
        return view('home', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $beer = new Beer();

        $beer->brand = $data['brand'];
        $beer->beerImg = $data['beerImg'];
        $beer->type = $data['type'];
        $beer->alcoholLevel = $data['alcoholLevel'];
        $beer->ibu = $data['ibu'];
        $beer->color = $data['color'];
        $beer->description = $data['description'];
        $beer->save();

        $beerStored = Beer::orderBY('id','desc')->first();

        return redirect()->route('beers.show', $beerStored);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(beer $beer)
    {

        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request->all();

        $beer->update($data);

        return redirect()->route('beers.show', compact('beer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
