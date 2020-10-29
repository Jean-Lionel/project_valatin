<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::latest()->paginate(5);

        return view('publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('publications.create');
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
        ]);

        Publication::create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $Publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication )
    {
        //

        return view('publications.view', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publication  $Publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication )
    {
        //
        return view('Publications.edit', compact('publication'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publication  $Publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $Publication)
    {
        //
           $request->validate([

            'message' => 'required',
        ]);

         $Publication->update($request->all());

         return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publication  $Publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        //

        $publication->delete();

        return $this->index();
    }
}
