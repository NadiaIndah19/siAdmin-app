<?php

namespace App\Http\Controllers\layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KIP extends Controller
{
    public function index()
  {
    return view('content.pelayanan.kip.kip-card');
  }
  
  public function create()
  {
    return view('content.pelayanan.kip.kip-card');
  }

  public function update()
  {
    return view('content.pelayanan.kip.kip-card');
  }
}
