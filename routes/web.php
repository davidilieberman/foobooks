<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function() {
  return 'Lots of books ... ';
});

Route::get('/books/create', function() {
  $view = '<form method="POST" action="/books/create">';
  $view .= csrf_field();
  $view .= '<label>Title <input type="text" name="title"/></label>';
  $view .= '<input type="submit"/>';
  $view .= '</form>';
  return $view;
});

Route::post('/books/create', function() {
  dd(Request::all());
});

Route::get('/books/show/{title?}', function($title = '') {
  if ($title == '') {
    return 'Please supply a title';
  }
  return 'Results for the book '.$title;
})->name('books.show');
