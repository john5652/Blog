@extends('layouts.master')

@section('content')

	{{ Form::open(array('action' => 'PostsController@storeUser')) }}

		@include('posts.user_creation')

	{{Form::close()}}






@stop
