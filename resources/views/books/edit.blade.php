@extends('layouts.master')

@section('title')
  Edit a book
@stop

@section('head')
  <link href="/css/books/edit.css" type="text/css" rel="stylesheet"/>
@stop

@section('content')

<h1>Edit a new book</h1>

<form method="POST" action="/books/{{$title}}">
{{ csrf_field() }}
{{ method_field('PUT')}}
<label>Title <input type="text" name="title" value="{{$title}}"/></label>
<input type="submit"/>
</form>
<br/>

@stop

@section('body')
  <script src="/js/books/edit.js"></script>
@stop
