<?php

namespace App\Http\Controllers\HHP;

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
        $petugasA = Permohonan::where('status_id','9')->get();
        $publikasi = Permohonan::where('status_id','10')->get();
        $pencetakan = Permohonan::where('status_id','11')->get();
        $dicetak = Permohonan::where('status_id','12')->get();
        $selesai = Permohonan::where('status_id','13')->get();
        $status1 = Status::where('id', 10)->get();
        $status2 = Status::where('id', 11)->get();
        $status3 = Status::where('id', 12)->get();
        $status4 = Status::where('id', 13)->get();

        return view('hhp.dashboard',compact('petugasA','publikasi','pencetakan','dicetak','selesai','status1','status2','status3','status4'));
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
        $petugasA = Permohonan::find($id);
        $petugasA->status_id = $request->status_id;
        $petugasA->update();

        $publikasi = Permohonan::find($id);
        $publikasi->status_id = $request->status_id;
        $publikasi->update();

        $pencetakan = Permohonan::find($id);
        $pencetakan->status_id = $request->status_id;
        $pencetakan->update();

        $dicetak = Permohonan::find($id);
        $dicetak->status_id = $request->status_id;
        $dicetak->update();

        $selesai = Permohonan::find($id);
        $selesai->status_id = $request->status_id;
        $selesai->update();

        return redirect()->action('HHP\DashboardController@index')->with('ubah', 'Sukses');
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
