<?php

namespace App\Http\Controllers;

use App\Models\Apropos;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apropos = Apropos::latest()->paginate(10);
        return view('apropos.index', compact('apropos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apropos.create');
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
            'type_apropos' => 'required'

        ]);

        Apropos::create($request->all());

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apropos  $apropos
     * @return \Illuminate\Http\Response
     */
    public function show(Apropos $apropo)
    {
       return view('apropos.view', compact('apropo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apropos  $apropos
     * @return \Illuminate\Http\Response
     */
    public function edit(Apropos $apropos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apropos  $apropos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apropos $apropos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apropos  $apropos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apropos $apropos)
    {
        $apropos->delete();

        return $this->index();
    }
}
