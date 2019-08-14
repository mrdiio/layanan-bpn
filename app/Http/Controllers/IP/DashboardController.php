<?php

namespace App\Http\Controllers\IP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permohonan;
use App\Status;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prapengukuran = Permohonan::where('status_id','2')->get();
        $pengukuran = Permohonan::where('status_id','3')->get();
        $masukp2 = Permohonan::where('status_id','4')->get();
        $status1 = Status::where('id','3','')->get();
        $status2 = Status::where('id','4','')->get();

        return view('ip.dashboard',compact('prapengukuran','pengukuran','masukp2','status1','status2'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengukuran = Permohonan::find($id);
        if ($request->has('file_peta_bidang')) {
            $i = $request->file('file_peta_bidang');
            $filename = $pengukuran->nomor_pemohon.'_petabidang'.'.'.$i->getClientOriginalExtension();
            $i->move(public_path('images/peta_bidang/'),$filename);
            $pengukuran->file_peta_bidang = $filename;
        }
        $pengukuran->status_id = $request->status_id;
        $pengukuran->update();

        return redirect()->action('IP\DashboardController@index')->with('ubah', 'Sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
