@extends('layouts.master')

@section('title')
  Login to Ramble
@stop

@section('content')

{{ Form::open(array('action' => 'HomeController@doLogin'))}}

	@include('partials.login_partial')

{{ Form::close() }} 