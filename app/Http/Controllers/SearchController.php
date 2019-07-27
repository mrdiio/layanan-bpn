<?php

namespace App\Http\Controllers;

use App\Permohonan;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->get('nomor_pemohon');
        $hasil = Permohonan::where('nomor_pemohon', $request->nomor_pemohon)->get();
        return view('search-result', compact('hasil', 'query'));
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
