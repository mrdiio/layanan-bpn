<?php

namespace App\Http\Controllers\P2;

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
        $aspek = Permohonan::where('status_id','5')->get();
        $pembayaran = Permohonan::where('status_id','6')->get();
        $ptpgt = Permohonan::where('status_id','7')->get();

        $status = Status::orderBy('id','asc')->get();

        return view('p2.dashboard',compact('aspek','status','pembayaran','ptpgt'));
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
        $aspek = Permohonan::find($id);
        $aspek->status_id = $request->status_id;
        $aspek->update();

        $pembayaran = Permohonan::find($id);
        $pembayaran->status_id = $request->status_id;
        $pembayaran->update();

        $ptpgt = Permohonan::find($id);
        if ($request->has('file_ptpgt')) {
            $i = $request->file('file_ptpgt');
            $filename = $ptpgt->nomor_pemohon.'_ptpgt'.'.'.$i->getClientOriginalExtension();
            $i->move(public_path('images/pt_pgt/'),$filename);
            $ptpgt->file_ptpgt = $filename;
        }
        $ptpgt->status_id = $request->status_id;
        $ptpgt->update();

        return redirect()->action('P2\DashboardController@index')->with('ubah', 'Sukses');
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
