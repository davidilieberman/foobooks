<?php

namespace Foobooks\Http\Controllers;

use Illuminate\Http\Request;
use Foobooks\Http\Controllers\Controller;

class BookController extends Controller {

  /**
   * Responds to GET /books
   */
  public function index() {
    return view('books.index');
  }

  public function create() {
    // $view = '<form method="POST" action="/books">';
    // $view .= csrf_field();
    // $view .= '<label>Title <input type="text" name="title"/></label>';
    // $view .= '<input type="submit"/>';
    // $view .= '</form>';
    // return $view;
    return view('books.create');
  }

  public function store(Request $request) {
    #dd(Request::all());
    $this->validate($request, [
      'title' => 'required|min:3'
    ]);

    $title = $request->input('title');

    return 'Storing a book ' .$title;
  }

  public function show($title) {
    return view('books.show')->with('title', $title);
  }

  public function edit($title) {
    return view('books.edit')->with('title', $title);
  }

  public function update($book) {
    return 'Updating book ' .$book;
  }

  public function delete($book) {
    return 'Deleteing book ' .$book;
  }
}
