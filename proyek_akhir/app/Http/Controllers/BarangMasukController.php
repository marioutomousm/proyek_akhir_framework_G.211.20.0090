<?php

namespace App\Http\Controllers;

use App\Models\barangMasuk;
use App\Models\toko;
use Illuminate\Http\Request;
use App\Http\Requests\barangMasukReq;
use App\Http\Requests\storeBarangMskReq;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,barangMasuk $barangMasuk)
    {
        // $barangMasuk = barangMasuk::with('toko')->get();
        // return view('barangMasuk.daftarBarang', compact('barangMasuk'));
        // return view('barangMasuk.daftarBarang')-> with(['data' => $data]);


        // $barangMasuk = barangMasuk::all();
        // return view('barangMasuk.daftarBarang', compact('barangMasuk'));


        $keyword = $request->keyword;
        $barangMasuk = barangMasuk::where('nama_barang','LIKE','%'.$keyword.'%')
            ->orWhere('kode_barang','LIKE','%'.$keyword.'%')
            ->orWhere('jumlah_barang','LIKE','%'.$keyword.'%')
            ->orWhere('toko_id','LIKE','%'.$keyword.'%')
            ->orWhere('tanggal_masuk','LIKE','%'.$keyword.'%')
            ->paginate(5);

        $barangMasuk->withPath('/barangMasuk/daftarBarang');
        $barangMasuk->appends($barangMasuk->all());

        return view('barangMasuk.daftarBarang',compact('barangMasuk','keyword'))-> with(['barangMasuk' => $barangMasuk]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tokos = toko::all();
        return view('barangMasuk.createBarang', compact('tokos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeBarangMskReq $request)
    {

        // return $request;

        // $request->validate([
        //     'nama_barang' => 'required|min:4',
        //     // 'nama_barang'=>['required', Rule::unique('barang_masuks')->ignore($this->id)],
        //     'toko_id' => 'required',
        //     'kode_barang' => 'required',
        //     'jumlah_barang' => 'required',
        // ], [
        //     'toko.required' => 'Toko harus di isi.'
        // ]);

        barangMasuk::create([
            'nama_barang'=>$request->nama_barang,
            'toko_id'=>$request->toko_id,
            'kode_barang'=>$request->kode_barang,
            'jumlah_barang'=>$request->jumlah_barang,
            'tanggal_masuk'=>$request->tanggal_masuk,
        ]);

        return redirect('/barangMasuk/daftarBarang')->with('success','Data Berhasil Disimpan');

        // $daftarBarangMasuk = $request -> except(['_token']);

        // barangMasuk::insert($daftarBarangMasuk);




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(barangMasuk $barangMasuk)
    {
        $barangMasuk -> makeHidden(['toko_id']);

        return view('barangMasuk/show', compact('barangMasuk'));
        // $tokos = Toko::all();
        // $data = barangMasuk::findOrFail($id);

        // return view('barangMasuk.show')-> with(['data' => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(barangMasuk $barangMasuk)
    {
        $tokos = toko::all();
        return view('barangMasuk.edit', compact('barangMasuk','tokos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(barangMasukReq $request, barangMasuk $barangMasuk)

    {

        // $item = barangMasuk::findOrFail($id);
        // $data = $request -> except(['_token']);
        // $item -> update($data);

        // return redirect('/dashboard')->with('success','Data Berhasil Diperbaharui');


        barangMasuk::where('id', $barangMasuk->id)
        ->Update([
            'nama_barang'=>$request->nama_barang,
            'toko_id'=>$request->toko_id,
            'kode_barang'=>$request->kode_barang,
            'jumlah_barang'=>$request->jumlah_barang,
            'tanggal_masuk'=>$request->tanggal_masuk,
        ]);

        return redirect('/barangMasuk/daftarBarang')->with('success','Data Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    // public function destroy(barangMasuk $barangMasuk)
    public function destroy(barangMasuk $barangMasuk)
    {
        $barangMasuk->delete();

        // $datahapus = barangMasuk::findOrFail($id);
        // $datahapus->delete();
        return redirect('/barangMasuk/daftarBarang')->with('danger','Data Berhasil Dihapus');
    }
}
