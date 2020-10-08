<?php

namespace App\Http\Controllers;

use App\Television;
use Illuminate\Http\Request;

class TelevisionController extends Controller
{
  public function index() {
    return view('home');
  }

  public function create() {
    return view('television-create');
  }

  public function store(Request $request) {
    $data = $request -> validate([
      'name' => 'required|min:1',
      'model' => 'required|min:1|max:25',
      'brand' => 'required|min:1',
      'description' => 'required|max:150',
      'price' => 'required|gte:0'
    ]);
    Television::create($data);
    return redirect() -> route('televisions.index');
  }
}
