<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        
        if ($user->hasanyrole('Admin|Superadmin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('Loket')) {
            return redirect()->route('loket.dashboard.index');
        } 
        elseif ($user->hasRole('IP')) {
            return redirect()->route('ip.dashboard.index');
        } 
        elseif ($user->hasRole('P2')) {
            return redirect()->route('p2.dashboard.index');
        } 
        elseif ($user->hasRole('HHP')) {
            return redirect()->route('hhp.dashboard');
        } 
        else {
            return 'forbidden';
        }
    }
}
