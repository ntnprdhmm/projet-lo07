@extends('template/app')

@section('title')
    Publications Institut Charles Delaunay
@stop

@section('content')
    @include("../include/navbar")
    <div class="main-container" ng-view ng-app="myApp">

    </div>
@stop