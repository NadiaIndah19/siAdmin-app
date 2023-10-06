<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BirthCard extends Controller
{
    public function index()
  {
    return view('content.kependudukan.birth-list.birth-card');
  }
}