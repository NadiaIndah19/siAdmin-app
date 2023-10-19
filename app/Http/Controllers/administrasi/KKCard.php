<?php

namespace App\Http\Controllers\administrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KKCard extends Controller
{
    public function index()
  {
    return view('content.kependudukan.fams-list.family-card');
  }

  public function create()
  {
    return view('content.kependudukan.fams-list.create-kk');
  }

  public function update()
  {
    return view('content.kependudukan.fams-list.update-kk');
  }
}
