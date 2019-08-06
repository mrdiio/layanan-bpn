<?php

namespace App\Http\Controllers\Loket;

use App\Tanah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function show(Tanah $tanah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanah $tanah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tanah $tanah)
    {
        $tanah->jalan = $request->jalan;
        $tanah->desa = $request->desa;
        $tanah->kecamatan = $request->kecamatan;
        $tanah->kabupaten = $request->kabupaten;
        $tanah->luas = $request->luas;
        $tanah->batas_utara = $request->batas_utara;
        $tanah->batas_timur = $request->batas_timur;
        $tanah->batas_selatan = $request->batas_selatan;
        $tanah->batas_barat = $request->batas_barat;
        $tanah->status_tanah = $request->status_tanah;
        $tanah->hak_tanah = $request->hak_tanah;
        $tanah->tanggal_haktanah = $request->tanggal_haktanah;
        $tanah->nomor_haktanah = $request->nomor_haktanah;
        $tanah->jenis_tanah = $request->jenis_tanah;
        $tanah->dasar_penguasaan = $request->dasar_penguasaan;
        $tanah->rencana_penggunaan = $request->rencana_penggunaan;
        $tanah->update();

        return back()->with('ubah', 'Sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tanah  $tanah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanah $tanah)
    {
        //
    }
}
