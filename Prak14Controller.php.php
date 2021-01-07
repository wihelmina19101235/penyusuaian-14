<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class Prak14Controller extends Controller
{
	
    public function index() {

    	$barang = DB::table('tb_prak14')->get();

    	return view('halaman/barang', compact('barang'));
    }
}
