@extends('layouts.master')

@section('content')

	{{ Form::open(array('action' => 'PostsController@store')) }}

		@include('posts.create-edit-form')

	{{Form::close()}}






@stop
