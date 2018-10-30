<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerDonor extends Controller
{
    public function index()
    {
      return view('pmi/index');
    }
    public function konten1()
    {
      return view('konten/konten1');
    }
}
