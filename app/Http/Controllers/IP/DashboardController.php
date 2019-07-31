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
        $prapengukuran = Permohonan::where('status_id','2','desc')->get();
        $pengukuran = Permohonan::where('status_id','3','desc')->get();
        $masukp2 = Permohonan::where('status_id','4','desc')->get();
        $status = Status::orderBy('id','asc')->get();

        return view('ip.dashboard',compact('prapengukuran','pengukuran','masukp2','status'));
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
        $prapengukuran = Permohonan::find($id);
        $prapengukuran->status_id = $request->status_id;

        $prapengukuran->save();

        return redirect()->action('IP\DashboardController@index');
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
