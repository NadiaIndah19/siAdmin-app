<?php

namespace App\Http\Controllers\complaint_news;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
  {
    return view('content.info.news');
  }
}
