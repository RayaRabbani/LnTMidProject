<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Karyawan extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
    	$karyawann = DB::table('tbl_karyawan')->get();
		
 
    	// mengirim data pegawai ke view index
    	return view('template',['karyawan' => $karyawann]);
 
    }
    public function tambah()
{
 
	// memanggil view tambah
	return view('tambah');
 
}
public function store(Request $request)
{
	// insert data ke table pegawai
    $request->validate([
        'namakaryawan' => 'required|min:5|max:10',
        'nohp' => 'required|min:9|max:12',
        'umur' => 'required',
        'alamat' => 'required|min:10|max:40'
    ]);

	DB::table('tbl_karyawan')->insert([
		'namakaryawan' => $request->namakaryawan,
		'nohp' => $request->nohp,
		'umur' => $request->umur,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/datakaryawan');
 
}

public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$karyawann = DB::table('tbl_karyawan')->where('idkaryawan',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['karyawan' => $karyawann]);
 
}

public function update(Request $request)
{
	// update data pegawai
	DB::table('tbl_karyawan')->where('idkaryawan',$request->id)->update([
        'namakaryawan' => $request->namakaryawan,
		'nohp' => $request->nohp,
		'umur' => $request->umur,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/datakaryawan');
}

public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('tbl_karyawan')->where('idkaryawan',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/datakaryawan');
}
}
