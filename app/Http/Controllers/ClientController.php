<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Publication;
use App\Models\Apropos;
use App\Models\Commecaria;

use Illuminate\Http\Request;

class ClientController extends Controller
{


	public function index(){

		// dump(substr("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.",0,10));

		$slides = Slide::latest()->limit(3)->get();

		$articles = Article::latest()->limit(12)->get();

		// dump($articles);

		return view('public.index',
			[
				'slides' =>$slides, 
				'articles' => $articles

			]);
	}


	public function article($article){

		$article = Article::where('title', $article)->firstOrFail();


		return view('public.article', compact('article'));

	}

	public function contact($contact){

		$contact = Contact::latest()->where('type_contact','LIKE','%'.$contact.'%')->firstOrFail();
		return view('public.contact', compact('contact'));
	}

	public function publicite($publicite){

		$publicite = Publication::latest()->where('type_pub','LIKE','%'.$publicite.'%')->firstOrFail();



		return view('public.publicite', compact('publicite'));

	}

	public function apropos($apropos){

		$publicite = Apropos::latest()->where('type_apropos','LIKE','%'.$apropos.'%')->firstOrFail();

		
		return view('public.publicite', compact('publicite'));

	}

	public function commissariat($comm){
		$publicite = Commecaria::latest()->where('type','LIKE','%'.$comm.'%')->firstOrFail();

		return view('public.publicite', compact('publicite'));

	}
}
