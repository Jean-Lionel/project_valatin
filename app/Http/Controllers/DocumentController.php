<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::latest()->paginate(5);
        return view('documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documents.create');
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
            'link_file' => 'required|mimes:pdf,xlsx,docx|max:20000',

        ]);

        $fileName = time().'.'.$request->link_file->extension(); 


       $request->link_file->move(public_path('documents'), $fileName);

    

        Document::create(array_merge($request->all(), ['link_file' => $fileName]));

        return $this->index();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $Document
     * @return \Illuminate\Http\Response
     */
    public function show( $doc)
    {
        $document = Document::where('id',$doc)->firstOrFail();
      
        return view('documents.view', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $Document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $Document)
    {
        return view('documents.edit', compact('Document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $Document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $Document)
    {
        return $this->index();  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $Document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $Document)
    {
        $Document->delete();

        return $this->index();
    }
}
