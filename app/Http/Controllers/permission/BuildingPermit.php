<?php

namespace App\Http\Controllers\permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuildingPermit extends Controller
{
    public function index()
  {
    return view('content.perizinan.building-permit');
  }
}
