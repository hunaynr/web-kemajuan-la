<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    //
    public function index()
    {
        $judul = DB::table('laporan')->get();
        return view('dosen.dashboard', ['laporan' => $judul]);
    }
}
