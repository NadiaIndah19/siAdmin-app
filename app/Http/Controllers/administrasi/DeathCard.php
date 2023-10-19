<?php

namespace App\Http\Controllers\administrasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeathCard extends Controller
{
    public function index()
  {
    return view('content.kependudukan.death-list.death-card');
  }

  public function create()
  {
    return view('content.kependudukan.death-list.create-death-card');
  }

  public function update()
  {
    return view('content.kependudukan.death-list.update-death-card');
  }

  public function view()
  {
    return view('content.kependudukan.death-list.view-death-card');
  }
}
