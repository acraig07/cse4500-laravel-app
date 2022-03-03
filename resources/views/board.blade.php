@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Board</h1>
@stop

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="error-page">
<h2 class="headline text-warning"> 404</h2>
<div class="error-content">
<h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
<p>
 We could not find the page you were looking for.
Meanwhile, you may <a href="/">return to dashboard</a> or try using the search form.
</p>
<form class="search-form">
<div class="input-group">
<input type="text" name="search" class="form-control" placeholder="Search">
<div class="input-group-append">
<button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
</button>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
@stop

@section('js')
<script src="//cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js" ></script>
<script>
$( document ).ready(function() {
    var calendar = new FullCalendar.Calendar($('#calendar')[0], {
      initialView: 'dayGridMonth',
      events: '/events-feed'
    });
    calendar.render();
})
</script>
@stop
