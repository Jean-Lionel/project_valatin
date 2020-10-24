<?php

namespace App\Http\Controllers;

use App\Models\Publicite;
use Illuminate\Http\Request;

class PubliciteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicites = Publicite::latest()->paginate(5);

        return view('publicites.index', compact('publicites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('publicites.create');
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

            'message' => 'required',
        ]);

        Publicite::create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function show(Publicite $publicite)
    {
        //

        return view('publicites.view', compact('publicite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicite $publicite)
    {
        //
        return view('publicites.edit', compact('publicite'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicite $publicite)
    {
        //
           $request->validate([

            'message' => 'required',
        ]);

         $publicite->update($request->all());

         return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicite $publicite)
    {
        //

        $publicite->delete();

        return $this->index();
    }
}
