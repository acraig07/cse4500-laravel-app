@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendars.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="Start" type="datetime-local" label="Start" />
    <x-adminlte-input name="End" type="datetime-local" label="Finish"/>
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
