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

Route::get('/books', 'BookController@index')->name('books.index');

Route::get('/books/create', 'BookController@create')->name('books.create');

#Route::post('/books', function() {
#  dd(Request::all());
#})->name('books.store');

Route::post('/books', 'BookController@store')->name('books.store');

// Route::get('/books/{book?}', function($book = '') {
//   if ($title == '') {
//     return 'Please supply a title';
//   }
//   return 'Results for the book '.$title;
// })->name('books.show');

Route::get('/books/{title}', 'BookController@show')->name('books.show');

Route::get('/books/{title}/edit', 'BookController@edit')->name('books.edit');

Route::put('/books/{book}', 'BookController@update')->name('books.update');

Route::delete('/books/{book}', 'BookController@delete')->name('books.delete');

Route::get('/example', function() {
  return App::environment();
});

Route::get('/debugbar', function() {
  $data = Array('foo' => 'bar');
  Debugbar::info($data);
  Debugbar::info('Current environment: '.App::environment());
  Debugbar::error('Error!');
  Debugbar::warning('Danger, Will Robinson!');
  Debugbar::addMessage('Another message', 'mylabel');

  return 'Demo of debugbar features';
});

Route::get('/random', function() {
  $random = new Rych\Random\Random();
  return $random->getRandomString(12);
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
