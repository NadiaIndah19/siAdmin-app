<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KTP extends Controller
{
    public function index()
  {
    return view('content.kependudukan.id-card.id-card-person');
  }
}
