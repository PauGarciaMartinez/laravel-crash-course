<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function index() {
    $title = 'Welcome to my Laravel 8 course';
    $description = 'Created by Pau';
    $data = [
      'productOne' => 'iPhone',
      'productTwo' => 'Samsung'
    ];
    
    // Compact method (multiple variables)
    // return view('products.index', compact('title', 'description'));

    // With method (just one variable)
    //return view('products.index')->with('data', $data);

    // Directly in the view
    /* return view('products.index', [
      'data' => $data
    ]); */


  }

  public function about() {
    return 'About us page';
  }

  public function show($name) {
    $data = [
      'iphone' => 'iPhone',
      'samsung' => 'Samsung',
    ];

    return view('products.index', [
      'products' => $data[$name] ?? 'Product ' . $name . ' not found'
    ]);
  }
}
