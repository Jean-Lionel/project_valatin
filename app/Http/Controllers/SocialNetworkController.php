<?php

namespace App\Http\Controllers;

use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
      
    public function index()
    {
        $socialnetworks = SocialNetwork::latest()->paginate(5);

        return view('socialNetworks.index', compact('socialnetworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('socialNetworks.create');
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

        SocialNetwork::create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicite  $publicite
     * @return \Illuminate\Http\Response
     */
    public function show(SocialNetwork $socialnetwork)
    {
        //

        return view('socialNetworks.view', compact('socialnetwork'));
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
    public function destroy(SocialNetwork $socialnetwork)
    {
        //

        $socialnetwork->delete();

        return $this->index();
    }
}
