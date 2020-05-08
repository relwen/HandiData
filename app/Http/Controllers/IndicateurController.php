<?php

namespace App\Http\Controllers;

use App\Indicateur;
use Illuminate\Http\Request;

class IndicateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Indicateur::all();
        
        return view('handi-admin.adminindicateur.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('handi-admin.adminindicateur.add');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Indicateur  $indicateur
     * @return \Illuminate\Http\Response
     */
    public function show(Indicateur $indicateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indicateur  $indicateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicateur $indicateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indicateur  $indicateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicateur $indicateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indicateur  $indicateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicateur $indicateur)
    {
        //
    }
}
