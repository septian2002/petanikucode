<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class LADataAnggotaController extends Controller
{
    
    public function listAnggota()
    {
        return view('LA data anggota');
    }

//     public function create()
//     {
//         $list_anggota = null;
//         return view('data anggota', compact('list_anggota'));
//     }

//     public function store(Request $request)
//     {
//         DB::table('list_anggota')->insert([
//             'nama' => $request->nama,
//             'alamat' => $request->alamat,
//             'nomor_tlp' => $request->nomor_tlp
//         ]);

//         return redirect()->route('data anggota')
//                         ->with('success', 'Data list_anggota baru telah berhasil disimpan.');
//     }
}