<?php

namespace App\Http\Controllers;

use App\Models\loaitin;
use Illuminate\Http\Request;

class LtController extends Controller
{
    public function create()
    {
        $loaiTins = loaitin::all();
        return view('client.shop', compact('loaiTins'));
    }
}
