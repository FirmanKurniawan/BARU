<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kamar;
use \App\Kost;
use \App\Penginap;
use \App\Pesanan;

class KostController extends Controller
{
    public function save(Request $r)
    {
    	$nama_kost = $r->nama_kost;
    	$jumlah_kamar = $r->jumlah_kamar;
    	$alamat_kost = $r->alamat_kost;
    	$kontak_kost = $r->kontak_kost;
    	$wilayah_kost = $r->wilayah_kost;

    	$kost = new Kost;
    	$kost->nama_kost = $nama_kost;
    	$kost->jumlah_kamar = $jumlah_kamar;
    	$kost->alamat_kost = $alamat_kost;
    	$kost->kontak_kost = $kontak_kost;
    	$kost->wilayah_kost = $wilayah_kost;
    	$kost->save();

    	return redirect(url('kost/all'));
    }

    public function all()
    {
    	$kost = Kost::all();

    	return view('kost.index');
    }

    public function edit($id)
    {
    	$kost = Kost::find($id);

    	return view('kost.edit')->with('kost',$kost);;
    }

    public function update(Request $r)
    {
    	$id = $r->id;
    	$nama_kost = $r->nama_kost;
    	$jumlah_kamar = $r->jumlah_kamar;
    	$alamat_kost = $r->alamat_kost;
    	$kontak_kost = $r->kontak_kost;
    	$wilayah_kost = $r->wilayah_kost;

    	$kost = Kost::find($id);
    	$kost->nama_kost = $nama_kost;
    	$kost->jumlah_kamar = $jumlah_kamar;
    	$kost->alamat_kost = $alamat_kost;
    	$kost->kontak_kost = $kontak_kost;
    	$kost->wilayah_kost = $wilayah_kost;
    	$kost->save();

    	return redirect(url('kost/all'));
    }

    public function delete($id)
    {
    	$kost = Kost::find($id);
        $kost->delete(); 
    	return redirect(url('kost/all'));
    }

    public function add()
    {
        return view('kost.add');
    }

    public function datakos()
    {
        $datakos = Kost::all();

        return view('penginap.kos', compact('datakos'));
    }
}
