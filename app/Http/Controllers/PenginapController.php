<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class PenginapController extends Controller
{
    public function all()
    {
    	return view('penginap.kos');
    }

    public function cari()
    {
    	return view('penginap.kos');
    }

    public function saran()
    {
    	return view('penginap.saran');
    }

    public function profile()
    {
        $profile = User::all();
    	return view('penginap.edit', compact('profile'));
    }

    public function update(Request $r)
    {
        $id = $r->id;
        $name = $r->name;
        $email = $r->email;

        $profile = User::find($id);
        $profile->name = $name;
        $profile->email = $email;
        $profile->save();

        return redirect('penginap/profile');
    }
}
