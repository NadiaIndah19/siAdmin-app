<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageCard extends Controller
{
    public function index()
  {
    return view('content.kependudukan.marriage-list.marriage-card');
  }
}
