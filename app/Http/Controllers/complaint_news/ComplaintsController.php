<?php

namespace App\Http\Controllers\complaint_news;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function index()
  {
    return view('content.pengaduan.complaints');
  }
  
  public function create()
  {
    return view('content.pengaduan.create-complaints');
  }

  public function update()
  {
    return view('content.pengaduan.update-complaints');
  }
}
