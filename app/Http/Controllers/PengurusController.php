<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = DB::table('table_pengurus')->get();
        return view('pengurus.index', ['table_pengurus' => $pengurus]);
    }
    public function tambah()
    {

        return view('pengurus.tambah');
    }
    public function store(Request $request)
    {
        DB::table('table_pengurus')->insert([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/pengurus');
    }
    public function edit($id)
    {
        $pengurus = DB::table('table_pengurus')->where('id', $id)->get();
        return view('pengurus.edit', ['table_pengurus' => $pengurus]);
    }
    public function update(Request $request)
    {
        DB::table('table_pengurus')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/pengurus');
    }
    public function hapus($id)
    {

        DB::table('table_pengurus')->where('id', $id)->delete();

        return redirect('/pengurus');
    }
}
