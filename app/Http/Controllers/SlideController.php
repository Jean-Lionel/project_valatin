<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::latest()->paginate(5);
      return view('slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('slides.create');
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
            'title' => 'required',
            'description' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.$request->image->extension(); 

        $request->image->move(public_path('images/slides'), $imageName);

    

        Slide::create(array_merge($request->all(), ['image_url' => $imageName]));

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //

        return view('slides.view', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        

        return view('slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
         $request->validate([
            'title' => 'required',
            'description' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

         $dataStore = $request->all();

       
        if($request->image){
             $imageName = time().'.'.$request->image->extension(); 

            $request->image->move(public_path('images/slides'), $imageName);

            $image_path = "/images/slides/". $slide->image_url ;  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
                }

             $dataStore = array_merge($dataStore, ['image_url' => $imageName]);


        }

        $slide->update($dataStore);

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        
        // $image_path = "/images/slides/". $slide- ;  // Value is not URL but directory file path
        // if(File::exists($image_path)) {
        //     File::delete($image_path);
        //     }

        $slide->delete();

        return $this->index();
    }
}
