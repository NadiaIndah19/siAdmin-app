<?php

namespace App\Http\Controllers\administrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageCard extends Controller
{
    public function index()
  {
    return view('content.kependudukan.marriage-list.marriage-card');
  }

  public function create()
  {
    return view('content.kependudukan.marriage-list.create-marriage-card');
  }

  public function update()
  {
    return view('content.kependudukan.marriage-list.update-marriage-card');
  }

  public function view()
  {
    return view('content.kependudukan.marriage-list.view-marriage-card');
  }
}
