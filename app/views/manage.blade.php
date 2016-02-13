@extends('layouts.master')

@section('content')



<div ng-app="blogController">  
    <div ng-controller="ManagePostsController">

        <table class="table">
          <tr>
            <td>Posts</td>
          </tr>
          <tr ng-repeat="post in posts">
            <td><a href="/posts/@{{post.id}}">@{{post.title}}</a></td>
             <td>@{{post.body}}</td>
             <td><button type="button" ng-click="delete(post.id, index)" class="btn btn-sm btn-danger">DELETE</button><td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                  EDIT
                </button>
                @include('partials.editmodal')
            <td>
          </tr>
        </table>

    </div>
</div>


   

@stop