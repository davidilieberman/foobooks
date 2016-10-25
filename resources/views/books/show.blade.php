@extends('layouts.master')

@section('title')
  Show book
@stop

@section('head')
  <link href="/css/books/show.css" type="text/css" rel="stylesheet"/>
@stop

@section('content')
  @if($title)
    <h1>Showing book: {{ $title }}
  @else
    <h1>No book chosen</h1>
  @endif
@stop

@section('body')
  <script src="/js/books/show.js"></script>
@stop
