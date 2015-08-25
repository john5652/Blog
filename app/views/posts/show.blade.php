@extends('layouts.master')

@section('content')


<div class="well colors col-sm-offset-2 col-sm-8 col-md-8">
	<div class="container">
		<a href="/posts"><i class="fa-2x fa fa-arrow-left"> Back to Posts</i> </a>
	</div>

    <h1>{{{ $post->title }}}</h1>
    <p>{{{ $post->body }}}</p>

	<div class='delete'>
		<a href="{{{ action('PostsController@edit', $post->id) }}}"><i class=" pull-right fa fa-pencil"> Edit Post</i></a>
	<div>

</div>
		        

