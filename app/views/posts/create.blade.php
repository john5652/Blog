@extends('layouts.master')

@section('content')

	<form action="{{{ action('PostsController@store') }}}" method="POST" accept-charset="utf-8">
		
		@include('posts.create-edit-form')

	</form>






@stop
