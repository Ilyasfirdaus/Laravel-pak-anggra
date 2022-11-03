<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
   $profile = DB::table('profile')->get();

   return view('VProfile',['profile' => $profile ]);
    }
    public function tambah(Request $request)
    {
    	DB::table('profile')->insert([
			'kd_profile' => $request->kd_profile,
			'nama_profile' => $request->nama_profile,

		]);
		// alihkan halaman ke halaman berita
		return redirect('/profile');
 
    }
}

