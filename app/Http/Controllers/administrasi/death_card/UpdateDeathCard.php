<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeathCard extends Controller
{
    public function index()
  {
    return view('content.kependudukan.death-list.death-card');
  }
}
