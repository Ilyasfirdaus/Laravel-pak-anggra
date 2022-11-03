<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index()
    {
   $kontak = DB::table('kontak')->get();

   return view('VKontak',['kontak' => $kontak ]);
    }
    public function tambah(Request $request)
    {
    	DB::table('kontak')->insert([
			'kd_kontak' => $request->kd_kontak,
			'nama_kontak' => $request->nama_kontak,

		]);
		// alihkan halaman ke halaman berita
		return redirect('/kontak');
 
    }
}