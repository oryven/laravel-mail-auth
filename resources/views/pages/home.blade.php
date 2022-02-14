@extends('layout.main-layout')

@section('content')

<h3>hello</h3>

<videogames-component user="{{Auth::check()}}"></videogames-component>

@endsection