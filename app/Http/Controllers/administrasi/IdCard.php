<?php

namespace App\Http\Controllers\administrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IdCard extends Controller
{
    public function index()
  {
    return view('content.kependudukan.id-card.id-card-person');
  }

  public function create()
  {
    return view('content.kependudukan.id-card.create-id-card');
  }

  public function update()
  {
    return view('content.kependudukan.id-card.update-id-card');
  }
}
