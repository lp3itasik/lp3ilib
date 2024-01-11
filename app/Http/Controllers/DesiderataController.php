<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesiderataController extends Controller
{
    public function index()
    {
        return view('desiderata');
    }
}
