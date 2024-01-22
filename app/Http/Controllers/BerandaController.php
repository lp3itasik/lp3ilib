<?php

namespace App\Http\Controllers;

use App\Models\Repositories;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
       // $tugas_akhir = Welcome::all();
       $tugas_akhir = Repositories::where('type_id', 6)->get();
       $kkn = Repositories::where('type_id', 7)->get();
       $kki = Repositories::where('type_id', 8)->get();
       $pkm = Repositories::where('type_id', 12)->get();
       return view('welcome')->with([
           'tugas_akhir'=>$tugas_akhir,
           'kkn'=>$kkn,
           'kki'=>$kki,
           'pkm'=>$pkm,
       ]);
    }
}
