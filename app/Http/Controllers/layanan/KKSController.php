<?php

namespace App\Http\Controllers\layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KKSController extends Controller
{
    public function index()
  {
    return view('content.pelayanan.kks.kks-card');
  }

  public function create()
  {
    return view('content.pelayanan.kks.create-kks');
  }

  public function update()
  {
    return view('content.pelayanan.kks.update-kks');
  }
  
}
