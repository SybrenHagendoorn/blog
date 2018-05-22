<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorymodel;

class CategoryController extends Controller
{
    public function index() {
      $categories = categoryModel::all();

      return view('categories.index', ['categories' => $categories]);
;
  }
}
