<?php

namespace App\Http\Controllers\layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxFinance extends Controller
{
    public function index()
  {
    return view('content.layanan.tax-finance');
  }
}
