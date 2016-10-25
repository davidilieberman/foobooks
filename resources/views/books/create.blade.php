@extends('layouts.master')

@section('title')
  Add new book
@stop

@section('head')
  <link href="/css/books/create.css" type="text/css" rel="stylesheet"/>
@stop

@section('content')

<h1>Add a new book</h1>

@if(count($errors) > 0)
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}
    @endforeach
  </ul>
@endif

<form method="POST" action="/books">
{{ csrf_field() }}
<label>Title <input type="text" name="title"/></label>
<input type="submit"/>
</form>
<br/>
@stop

@section('body')
  <script src="/js/books/create.js"></script>
@stop
