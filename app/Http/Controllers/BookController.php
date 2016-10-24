<?php

namespace Foobooks\Http\Controllers;

use Foobooks\Http\Controllers\Controller;

class BookController extends Controller {

  /**
   * Responds to GET /books
   */
  public function index() {
    return 'All the books are here';
  }

  public function create() {
    $view = '<form method="POST" action="/books">';
    $view .= csrf_field();
    $view .= '<label>Title <input type="text" name="title"/></label>';
    $view .= '<input type="submit"/>';
    $view .= '</form>';
    return $view;
  }

  public function store(Request $request) {
    #dd(Request::all());
    return 'Storing a book ... ';
  }

  public function show($book = '') {
    if ($book == '') {
      return 'Please supply a title';
    }
    return 'Results for the book '.$book;
  }

  public function edit($book) {
    return 'To show form edit ' .$book;
  }

  public function update($book) {
    return 'Updating book ' .$book;
  }

  public function delete($book) {
    return 'Deleteing book ' .$book;
  }
}
