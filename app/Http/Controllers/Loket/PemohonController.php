<?php

namespace App\Http\Controllers\Loket;

use App\Pemohon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermohonanRequest;

class PemohonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemohon = Pemohon::orderBy('id', 'desc')->get();

        return view('loket.pemohon', compact('pemohon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createPermohonan(Request $request, Pemohon $pemohon)
    {
        return [$pemohon->id, $pemohon->nama];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pemohon  $pemohon
     * @return \Illuminate\Http\Response
     */
    public function show(Pemohon $pemohon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemohon  $pemohon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemohon $pemohon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemohon  $pemohon
     * @return \Illuminate\Http\Response
     */
    public function update(PermohonanRequest $request, Pemohon $pemohon)
    {
        $request->validate([
            'nomor_identitas' => 'unique:pemohons,nomor_identitas,'.$pemohon->id,
        ]);

        $pemohon->nama = $request->nama;
        $pemohon->umur = $request->umur;
        $pemohon->kewarganegaraan = $request->kewarganegaraan;
        $pemohon->jenis_identitas = $request->jenis_identitas;
        $pemohon->nomor_identitas = $request->nomor_identitas;
        $pemohon->pekerjaan = $request->pekerjaan;
        $pemohon->alamat = $request->alamat;
        $pemohon->nama_ibu = $request->nama_ibu;
        $pemohon->status_pasangan = $request->status_pasangan;
        $pemohon->nama_pasangan = $request->nama_pasangan;
        $pemohon->no_hp = $request->no_hp;
        $pemohon->update();

        return back()->with('ubah', 'Sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemohon  $pemohon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemohon $pemohon)
    {
        //
    }
}
