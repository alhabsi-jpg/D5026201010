<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{
    public function index()
    {
        // mengambil data dari table tugas
        $tugas = DB::table('tugas')->get();

        // mengirim data tugas ke view index
        return view('tugas.index', ['tugas' => $tugas]);
    }
    public function tambah()
    {

        // memanggil view tambah
        return view('tugas.tambah');
    }
    public function store(Request $request)
    {
        // insert data ke table tugas
        DB::table('tugas')->insert([
            'IDPegawai' => $request->idPegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namaTugas,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }
    public function edit($id)
    {
        $tugas = DB::table('tugas')->where('ID', $id)->get();
        return view('tugas.edit', ['tugas' => $tugas]);
    }
    public function update(Request $request)
    {
        DB::table('tugas')->where('ID', $request->ID)->update([
            'IDPegawai' => $request->idPegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->namaTugas,
            'Status' => $request->status
        ]);
        return redirect('/tugas');
    }
    public function hapus($id)
    {

        DB::table('tugas')->where('ID', $id)->delete();

        return redirect('/tugas');
    }
}
