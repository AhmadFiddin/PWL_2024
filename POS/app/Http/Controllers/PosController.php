<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function transaction()
    {
        return view('pos.transaction');
    }
}
