@extends('adminlte::page')

@section('title', 'Events')

@section('content_header')
    <h1>Events</h1>
@stop

@section('content')
  <h2>{{ $todo->title; }}</h2>
  <div><p>{{ $todo->progress; }}% finished</p></div>
@stop
