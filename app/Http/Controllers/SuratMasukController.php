<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surats = SuratMasuk::latest()->paginate(5);
        
        return view('surats.index', compact('surats'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('surats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pengirim' => 'required|string',
            'tanggal_surat' => 'required|date',
            'kode_surat' => 'required|string',
            'urut_surat' => 'required|string',
            'lembaga_surat' => 'required|string',
            'bulan_surat' => 'required|string',
            'tahun_surat' => 'required|string',
            'perihal' => 'required|string',
            'isi_surat' => 'required|string',
        ]);

        $no_surat = $request->kode_surat.'/'.$request->urut_surat.'/'.$request->lembaga_surat.'/'.$request->bulan_surat.'/'.$request->tahun_surat;

        SuratMasuk::create([
            'pengirim' => $request->pengirim,
            'tanggal_surat' => $request->tanggal_surat,
            'kode_surat' => $request->kode_surat,
            'urut_surat' => $request->urut_surat,
            'lembaga_surat' => $request->lembaga_surat,
            'bulan_surat' => $request->bulan_surat,
            'tahun_surat' => $request->tahun_surat,
            'no_surat' => $no_surat,
            'perihal' => $request->perihal,
            'isi_surat' => $request->isi_surat,
        ]);

        return redirect()->route('surats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratMasuk $surat)
    {
        return view('surats.view', compact('surat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratMasuk $surat)
    {
        return view('surats.edit', compact('surat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratMasuk $surat)
    {
        $request->validate([
            'pengirim' => 'required|string',
            'tanggal_surat' => 'required|date',
            'kode_surat' => 'required|string',
            'urut_surat' => 'required|string',
            'lembaga_surat' => 'required|string',
            'bulan_surat' => 'required|string',
            'tahun_surat' => 'required|string',
            'perihal' => 'required|string',
            'isi_surat' => 'required|string',
        ]);

        $no_surat = $request->kode_surat.'/'.$request->urut_surat.'/'.$request->lembaga_surat.'/'.$request->bulan_surat.'/'.$request->tahun_surat;

        $surat->update([
            'pengirim' => $request->pengirim,
            'tanggal_surat' => $request->tanggal_surat,
            'kode_surat' => $request->kode_surat,
            'urut_surat' => $request->urut_surat,
            'lembaga_surat' => $request->lembaga_surat,
            'bulan_surat' => $request->bulan_surat,
            'tahun_surat' => $request->tahun_surat,
            'no_surat' => $no_surat,
            'perihal' => $request->perihal,
            'isi_surat' => $request->isi_surat,
        ]);

        return redirect()->route('surats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratMasuk $surat)
    {
        $surat->delete();

        return redirect()->route('surats.index');
    }
}