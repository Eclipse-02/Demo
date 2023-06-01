<?php

namespace App\Http\Controllers;

use App\Models\PencatatanATK;
use App\Models\SuratMasuk;
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
        $surats = SuratMasuk::all()->count();
        $atks = PencatatanATK::all()->count();

        return view('home', compact('surats', 'atks'));
    }
}
