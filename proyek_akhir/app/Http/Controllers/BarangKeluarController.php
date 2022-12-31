<?php

namespace App\Http\Controllers;

use App\Models\barangKeluar;
use Illuminate\Http\Request;
use App\Models\toko;
use App\Http\Requests\barangKeluarReq;
use App\Http\Requests\storeBarangKlrReq;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, barangKeluar $barangKeluar)
    {
        // $barangKeluar = barangKeluar::all();
        // return view('barangKeluar.daftarBarang', compact('barangKeluar'));


        $keyword = $request->keyword;
        $barangKeluar = barangKeluar::where('nama_barang','LIKE','%'.$keyword.'%')
            ->orWhere('kode_barang','LIKE','%'.$keyword.'%')
            ->orWhere('jumlah_barang','LIKE','%'.$keyword.'%')
            ->orWhere('toko_id','LIKE','%'.$keyword.'%')
            ->orWhere('tanggal_keluar','LIKE','%'.$keyword.'%')
            ->paginate(5);

        $barangKeluar->withPath('/barangKeluar/daftarBarang');
        $barangKeluar->appends($barangKeluar->all());

        return view('barangKeluar.daftarBarang',compact('barangKeluar','keyword'))-> with(['barangKeluar' => $barangKeluar]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tokos = toko::all();
        return view('barangKeluar.createBarang', compact('tokos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeBarangKlrReq $request1)
    {
        //  $request->validate([
        //     'nama_barang' => 'required|min:4',
        //     // 'nama_barang'=>['required', Rule::unique('barang_masuks')->ignore($this->id)],
        //     'toko_id' => 'required',
        //     'kode_barang' => 'required',
        //     'jumlah_barang' => 'required',
        // ], [
        //     'toko.required' => 'Toko harus di isi.'
        // ]);

        barangKeluar::create([
            'nama_barang'=>$request1->nama_barang,
            'toko_id'=>$request1->toko_id,
            'kode_barang'=>$request1->kode_barang,
            'jumlah_barang'=>$request1->jumlah_barang,
            'tanggal_keluar'=>$request1->tanggal_keluar,
        ]);

        return redirect('/barangKeluar/daftarBarang')->with('success','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(barangKeluar $barangKeluar)
    {
        $barangKeluar -> makeHidden(['toko_id']);

        return view('barangKeluar/show', compact('barangKeluar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(barangKeluar $barangKeluar)
    {
        $tokos = toko::all();
        return view('barangKeluar.edit', compact('barangKeluar','tokos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(barangKeluarReq $request, barangKeluar $barangKeluar)
    {
        barangKeluar::where('id', $barangKeluar->id)
        ->Update([
            'nama_barang'=>$request->nama_barang,
            'toko_id'=>$request->toko_id,
            'kode_barang'=>$request->kode_barang,
            'jumlah_barang'=>$request->jumlah_barang,
            'tanggal_keluar'=>$request->tanggal_keluar,
        ]);

        return redirect('/barangKeluar/daftarBarang')->with('success','Data Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(barangKeluar $barangKeluar)
    {
        $barangKeluar->delete();
        return redirect('/barangKeluar/daftarBarang')->with('danger','Data Berhasil Dihapus');
    }
}
// $datahapus = barangMasuk::findOrFail($id);
        // $datahapus->delete();
