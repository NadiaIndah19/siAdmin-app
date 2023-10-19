<?php

namespace App\Http\Controllers\permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BussinessLicence extends Controller
{
    public function index()
  {
    return view('content.perizinan.bussiness.bussiness-licence');
  }

  public function update()
  {
    return view('content.perizinan.bussiness.update-bussiness-licence');
  }

  public function create()
  {
    return view('content.perizinan.bussiness.create-bussiness-licence');
  }

  public function view()
  {
    return view('content.perizinan.bussiness.view-bussiness-licence');
  }
}
