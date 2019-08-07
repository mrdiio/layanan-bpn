<?php

namespace App\Http\Controllers;

use App\Pemohon;
use App\Tanggungan;
use App\Tanah;
use App\Permohonan;
use Illuminate\Http\Request;
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

        $tanah = new Tanah;
        $tanah->pemohon_id = $pemohon->id;
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
        $tanah->save();

        $permohonan = new Permohonan;
        $permohonan->pemohon_id = $pemohon->id;
        $permohonan->tanah_id = $tanah->id;
        $permohonan->nomor_pemohon = time();
        $permohonan->status_id = 1;
        $permohonan->save();

        // return back()->with('tambah', 'Sukses');
        return redirect()->action('PermohonanController@show', $permohonan->id)->with('tambah', 'Sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        return view('loket.permohonan-show', compact('permohonan'));
    }

    public function lihat(Permohonan $permohonan)
    {
        return view('permohonan-show', compact('permohonan'));
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
        // return $permohonan;
        $permohonan->fc_identitas = $request->fc_identitas;
        $permohonan->surat_kuasa = $request->surat_kuasa;
        $permohonan->bukti_perolehan = $request->bukti_perolehan;
        $permohonan->fc_suratukur = $request->fc_suratukur;
        $permohonan->imb = $request->imb;
        $permohonan->fc_persetujuanbidang = $request->fc_persetujuanbidang;
        $permohonan->fc_rekomendasi = $request->fc_rekomendasi;
        $permohonan->surat_persetujuan_penguasaan = $request->surat_persetujuan_penguasaan;
        $permohonan->surat_pernyataan = $request->surat_pernyataan;
        $permohonan->surat_pelepasan_kawasan = $request->surat_pelepasan_kawasan;
        $permohonan->surat_penunjukkan = $request->surat_penunjukkan;
        $permohonan->surat_rencana = $request->surat_rencana;
        $permohonan->surat_pernyataan_modal = $request->surat_pernyataan_modal;
        $permohonan->surat_lain = $request->surat_lain;
        $permohonan->bayar_ptpgt = $request->bayar_ptpgt;
        if ($request->bayar_ptpgt == 1) {
            $permohonan->status_id = 7;
        }
        $permohonan->update();

        return back()->with('ubah', 'Sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {
        $permohonan->delete();
        return response()->json($permohonan, 200);
    }
}
