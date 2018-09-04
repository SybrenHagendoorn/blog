<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;

class ProductController extends Controller
{
  public function index() {
    $products = ProductModel::all();

    return view('products.index', ['products' => $products]);
;
 }
}
