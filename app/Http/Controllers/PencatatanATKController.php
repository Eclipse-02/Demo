<?php

namespace App\Http\Controllers;

use App\Models\PencatatanATK;
use Illuminate\Http\Request;

class PencatatanATKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atks = PencatatanATK::latest()->paginate(5);
        
        return view('atks.index', compact('atks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('atks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'satuan' => 'required|string',
            'harga_barang' => 'required|string',
            'jumlah' => 'required|string',
            'sumber_dana' => 'required|string',
            'pj' => 'required|string',
        ]);

        PencatatanATK::create([
            'nama_barang' => $request->nama_barang,
            'satuan' => $request->satuan,
            'harga_barang' => $request->harga_barang,
            'jumlah' => $request->jumlah,
            'sumber_dana' => $request->sumber_dana,
            'pj' => $request->pj,
        ]);

        return redirect()->route('atks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PencatatanATK $atk)
    {
        return view('atks.view', compact('atk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PencatatanATK $atk)
    {
        return view('atks.edit', compact('atk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PencatatanATK $atk)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'satuan' => 'required|string',
            'harga_barang' => 'required|string',
            'jumlah' => 'required|string',
            'sumber_dana' => 'required|string',
            'pj' => 'required|string',
        ]);

        $atk->update([
            'nama_barang' => $request->nama_barang,
            'satuan' => $request->satuan,
            'harga_barang' => $request->harga_barang,
            'jumlah' => $request->jumlah,
            'sumber_dana' => $request->sumber_dana,
            'pj' => $request->pj,
        ]);

        return redirect()->route('atks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PencatatanATK $atk)
    {
        $atk->delete();

        return redirect()->route('atks.index');
    }

    public function search(Request $request)
    {
        $atks = PencatatanATK::where('nama_barang', 'LIKE', '%'. $request->data .'%')
                    ->orWhere('sumber_dana', 'LIKE', '%'. $request->data .'%')
                    ->orWhere('pj', 'LIKE', '%'. $request->data .'%')
                    ->latest()->paginate(5);

        return view('atks.index', compact('atks'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
