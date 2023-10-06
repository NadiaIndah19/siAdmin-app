<?php

namespace App\Http\Controllers\card;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KISCard extends Controller
{
    public function index()
  {
    return view('content.kartu-indonesia.kis-card');
  }
}
