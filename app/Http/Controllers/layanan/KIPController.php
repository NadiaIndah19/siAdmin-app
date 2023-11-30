<?php

namespace App\Http\Controllers\layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KIPController extends Controller
{
    public function index()
  {
    return view('content.pelayanan.kip.kip-card');
  }
  
  public function create()
  {
    return view('content.pelayanan.kip.create-kip');
  }

  public function update()
  {
    return view('content.pelayanan.kip.update-kip');
  }

  public function view()
  {
    return view('content.pelayanan.kip.view-kip');
  }


  
}
