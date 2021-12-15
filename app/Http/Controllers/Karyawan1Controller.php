<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
        $Karyawan1 = DB::table('Karyawan1')->get();
        return view('Karyawan1.index', ['Karyawan1' => $Karyawan1]);
    }
    public function edit($NIP)
    {
        $Karyawan1 = DB::table('Karyawan1')->where('NIP', $NIP)->get();
        return view('Karyawan1.edit', ['Karyawan1' => $Karyawan1]);
    }
    public function update(Request $request)
    {
        DB::table('Karyawan1')->where('NIP', $request->NIP)->update([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        return redirect('/Karyawan1');
    }
    public function detail($NIP)
    {
        $Karyawan1 = DB::table('Karyawan1')->where('NIP', $NIP)->get();
        return view('Karyawan1.detail', ['Karyawan1' => $Karyawan1]);
    }
}
