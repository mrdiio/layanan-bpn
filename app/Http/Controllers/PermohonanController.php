<?php

namespace App\Http\Controllers;

use App\Pemohon;
use App\Tanggungan;
use App\Tanah;
use App\Permohonan;
use App\Http\Requests\PermohonanRequest;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loket.permohonan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loket.permohonan-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermohonanRequest $request)
    {   
        $pemohon = new Pemohon;
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
        $pemohon->save();
        
        if ($request->nama_tanggungan) {
            foreach($request->nama_tanggungan as $key => $value){
                if ($value) {
                    $tanggungan = [
                        'nama' => $value,
                        'pemohon_id' => $pemohon->id,
                    ];
                    $input_tanggungan[] = $tanggungan;
                } else {
                    $input_tanggungan[] = null;
                }
            }
            if ($input_tanggungan) {
                Tanggungan::insert($input_tanggungan);
            }
        }

        return back()->with('tambah', 'Sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(Permohonan $permohonan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permohonan $permohonan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {
        //
    }
}
