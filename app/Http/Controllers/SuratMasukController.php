<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Exports\SuratsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

    public function exportExcel() 
    {
        return Excel::download(new SuratsExport, 'Laporan Surat.xlsx');
    }

    public function exportPDF() 
    {
        return Excel::download(new SuratsExport, 'Laporan Surat.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
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

        toast('Data Successfully Created!', 'success');

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

        toast('Data Successfully Modified!', 'success');

        return redirect()->route('surats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratMasuk $surat)
    {
        $surat->delete();

        toast('Data Successfully Deleted!', 'success');

        return redirect()->route('surats.index');
    }

    public function search(Request $request)
    {
        $surats = SuratMasuk::where('pengirim', 'LIKE', '%'. $request->data .'%')
                    ->orWhere('tanggal_surat', 'LIKE', '%'. $request->data .'%')
                    ->orWhere('no_surat', 'LIKE', '%'. $request->data .'%')
                    ->orWhere('perihal', 'LIKE', '%'. $request->data .'%')
                    ->latest()->paginate(5);

        return view('surats.index', compact('surats'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
