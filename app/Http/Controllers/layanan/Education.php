<?php

namespace App\Http\Controllers\layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Education extends Controller
{
    public function index()
  {
    return view('content.pelayanan.education');
  }
  
  public function create()
  {
    return view('content.pelayanan.education');
  }

  public function update()
  {
    return view('content.pelayanan.education');
  }
}
