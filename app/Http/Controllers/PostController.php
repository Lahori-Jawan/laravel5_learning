<?php namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller {

	public function index()
	{
		$articles = Post::all();
		return view('articles.article', compact('articles'));
		// return 'post';
	}

}
