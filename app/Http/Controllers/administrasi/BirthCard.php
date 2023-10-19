<?php

namespace App\Http\Controllers\administrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BirthCard extends Controller
{
    public function index()
  {
    return view('content.kependudukan.birth-list.birth-card');
  }

  public function create()
  {
    return view('content.kependudukan.birth-list.create-birth-card');
  }

  public function update()
  {
    return view('content.kependudukan.birth-list.update-birth-card');
  }
  
  public function view()
  {
    return view('content.kependudukan.birth-list.view-birth-card');
  }
}