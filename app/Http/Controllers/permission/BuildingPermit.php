<?php

namespace App\Http\Controllers\permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuildingPermit extends Controller
{
    public function index()
  {
    return view('content.perizinan.building.building-permit');
  }

  public function create()
  {
    return view('content.perizinan.building.create-building-permit');
  }

  public function update()
  {
    return view('content.perizinan.building.update-building-permit');
  }

  public function view()
  {
    return view('content.perizinan.building.view-building-permit');
  }
}
