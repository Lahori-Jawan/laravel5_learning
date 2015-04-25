@extends('mainPage')

@section('section1')

	<h1>{{$article->title}}</h1>

	<article>
		{{$article->body}}
	</article>


@stop

