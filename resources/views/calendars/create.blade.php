@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendars.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="start_date" type="date" label="Start Date" />
    <x-adminlte-input name="start_time" type="time" label="Start Time" />
    <x-adminlte-input name="end_date" type="date" label="End Date" />
    <x-adminlte-input name="end_time" type="time" label="End Time" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
