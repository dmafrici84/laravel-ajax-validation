<?php

namespace App\Http\Controllers;

use App\Television;
use Illuminate\Http\Request;

class TelevisionApiController extends Controller
{
  public function getAllTelevision() {
    $televisions= Television::all();
    return respose() -> json($televisions);
  }
}
