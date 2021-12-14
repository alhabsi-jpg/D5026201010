<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedamotorController extends Controller
{
    public function index()
    {
        $sepedamotor = DB::table('sepedamotor')->paginate(5);
        return view('sepedamotor.index', ['sepedamotor' => $sepedamotor]);
    }
    public function tambah()
    {

        return view('sepedamotor.tambah');
    }
    public function store(Request $request)
    {
        DB::table('sepedamotor')->insert([
            'merksepedamotor' => $request->merksepedamotor,
            'stocksepedamotor' => $request->stocksepedamotor,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/sepedamotor');
    }
    public function edit($kodesepedamotor)
    {
        $sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor', $kodesepedamotor)->get();
        return view('sepedamotor.edit', ['sepedamotor' => $sepedamotor]);
    }
    public function update(Request $request)
    {
        DB::table('sepedamotor')->where('kodesepedamotor', $request->kodesepedamotor)->update([
            'merksepedamotor' => $request->merksepedamotor,
            'stocksepedamotor' => $request->stocksepedamotor,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/sepedamotor');
    }
    public function hapus($kodesepedamotor)
    {

        DB::table('sepedamotor')->where('kodesepedamotor', $kodesepedamotor)->delete();

        return redirect('/sepedamotor');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        $sepedamotor = DB::table('sepedamotor')
        ->where('merksepedamotor','like',"%".$cari."%")
        ->orWhere('stocksepedamotor','like', "%" . $cari . "%")
        ->paginate();


        return view('sepedamotor.index',['sepedamotor' => $sepedamotor]);

    }
    public function detail($kodesepedamotor)
    {
        $sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor', $kodesepedamotor)->get();

        return view('sepedamotor.detail', ['sepedamotor' => $sepedamotor]);
    }
}
