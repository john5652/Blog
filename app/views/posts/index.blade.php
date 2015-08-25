@extends('layouts.master')

@section('content')

	{{ $posts->links() }}

@foreach ($posts as $post)


    <h1>{{{ $post->title }}}</h1>
    <p>
    @if (strlen($post->body) > 60)
    {{{substr("$post->body", 0, 40) . "..." }}}
	@else
    {{{ $post->body }}}
	@endif
    </p>

    <div class="pull-right">
       <h4> Rambled By: 
            {{$post->user->first_name}}
            {{$post->user->last_name}}
        </h4>
    </div>

    <a href="{{{ action('PostsController@show', $post->id) }}}"><i class="fa fa-book">Read Post</i></a>

@endforeach

@stop