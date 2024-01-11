<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Desiderata;
use Illuminate\Http\Request;

class DesideratasController extends Controller
{
    public function get_all()
    {
        $desideratas = Desiderata::all();
        return response()->json([
            'desideratas'=>$desideratas,
        ]);
    }
}
