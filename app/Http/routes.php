<?php

use App\Post;

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

/*Route::get('articles', 'ArticleController@articles');

Route::get('articles/{id}', 'ArticleController@articleById');*/

Route::get('posts/create', 'ArticleController@create');

Route::post('about', 'PagesController@about');

Route::get('posts', function(){

	$articles = Post::all();
	return view('articles.article', compact('articles'));
});

Route::get('posts/{id}', 'ArticleController@articleById');