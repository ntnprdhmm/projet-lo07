@extends('template/app')

@section('title')
    Publications Institut Charles Delaunay
@stop

@section('content')
    @include("../include/navbar")
    <div class="container" ng-app="myApp">

        <div ng-view></div>

    </div>
@stop