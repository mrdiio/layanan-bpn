<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permohonan;
use App\Status;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $nama = $request->nama;
        $hasil = Permohonan::with('pemohon')->where('nomor_pemohon', $request->nomor_pemohon)
                                ->whereHas('pemohon', function($q) use($nama) {
                                    $q->where('nama', $nama);
                                })
                                ->first();
        // $hasil = Permohonan::where([['nomor_pemohon', $request->nomor_pemohon],['nama', $request->nama]])->first();
        $status = Status::first();
        // return $hasil;
        return view('search-result', compact('hasil','request','status'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
