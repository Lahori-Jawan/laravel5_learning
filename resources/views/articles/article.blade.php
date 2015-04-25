@extends('mainPage')

@section('section1')
	<h1>Articles Page</h1>

	@foreach ($articles as $article) 
		
		<article>
			{{-- <h2>
			<a href="{{ url('/articles', $article->id) }}"> {{ $article->title }}</a>
			</h2> --}}
			<h2>
				{{-- <a href="{{ action('ArticleController@articleById', [$article->id]) }}"> 
					{{ $article->title }}</a> --}}
				{{$article->title}} <br>
				<a href="{{action('ArticleController@articleById', [$article->id])}}">Read more &rarr;</a>
			</h2>

			<div class="body">
				{{$article->body}}
			</div>
		</article>
	
	@endforeach

@stop