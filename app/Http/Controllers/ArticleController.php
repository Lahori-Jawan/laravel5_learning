<?php namespace App\Http\Controllers;

// use App\Article;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

	public function articles()
	{
		
		// $articles = Article::all();
		$articles = Post::all();

		return view('articles.article', compact('articles'));
	}

	public function articleById($id)
	{
		// $article = Article::findOrFail($id);
		$article = Post::findOrFail($id);

		// dd($article);

		return view('articles.oneArticle', compact('article'));
	}

	public function create()
	{
		return view('articles.form');
	}

}
