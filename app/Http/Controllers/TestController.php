<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
  public function getAbout()
  {
    return view('about');
  }
}
