<?php

namespace App\Http\Controllers;

use App\Television;
use Illuminate\Http\Request;

class TelevisionApiController extends Controller
{
  public function getAllTelevision() {
    $televisions= Television::all();
    return response() -> json($televisions);
  }

  public function getBestTelevision() {
    $televisions = Television::where('price', '>', 2000) -> get();
    return response() -> json($televisions);
  }
}
