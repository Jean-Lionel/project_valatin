<?php

namespace App\Http\Controllers;

use App\Models\Commecaria;
use Illuminate\Http\Request;

class CommecariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commessarias = Commecaria::latest()->paginate(10);
    
        return view('commessarias.index', compact('commessarias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('commessarias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'type' => 'required'

        ]);

        Commecaria::create($request->all());

        return $this->index();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commecaria  $commecaria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commecaria  = Commecaria::where('id', $id)->firstOrFail();


        return view('commessarias.view', compact('commecaria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commecaria  $commecaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Commecaria $commecaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commecaria  $commecaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commecaria $commecaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commecaria  $commecaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commecaria $commecaria)
    {
        //
        $commecaria->delete();

        return $this->index();
    }
}
