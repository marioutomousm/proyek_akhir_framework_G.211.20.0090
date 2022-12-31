<?php

namespace App\Http\Controllers;

use App\Models\toko;
use Illuminate\Http\Request;
use App\Http\Requests\storeTokoReq;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, toko $toko)
    // public function index( Request $request)

    {
        // $keyword = $request->keyword;
        // $toko = toko::all();

        $keyword = $request->keyword;
        $toko = toko::where('nama_toko','LIKE','%'.$keyword.'%')
            ->orWhere('kepala_toko','LIKE','%'.$keyword.'%')
            ->orWhere('jumlah_pekerja','LIKE','%'.$keyword.'%')
            ->orWhere('alamat','LIKE','%'.$keyword.'%')
            ->orWhere('kota','LIKE','%'.$keyword.'%')
            ->paginate(5);

        $toko->withPath('/toko/daftarToko');
        $toko->appends($toko->all());

        // return view('index',compact('data','keyword'))
        // -> with(['data' => $data]);

        return view('toko.daftarToko',compact('toko','keyword'))-> with(['toko' => $toko]);


        // return view('toko.daftarToko',compact('toko'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tokos = toko::all();
        // return view('toko.create', compact('tokos'));

        return view('toko.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeTokoReq $request)
    {
        // $daftarToko = $request -> except(['_token']);

        // toko::insert($daftarToko);

        // return redirect('/toko/daftarToko');




        // $request->validate([
        //     'nama_toko' => 'required|min:4',
        //     // 'nama_barang'=>['required', Rule::unique('barang_masuks')->ignore($this->id)],
        //     'toko_id' => 'required',
        //     'kode_barang' => 'required',
        //     'jumlah_barang' => 'required',
        // ], [
        //     'toko.required' => 'Toko harus di isi.'
        // ]);

        toko::create([
            'nama_toko'=>$request->nama_toko,
            'kepala_toko'=>$request->kepala_toko,
            'jumlah_pekerja'=>$request->jumlah_pekerja,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
        ]);

        return redirect('/toko/daftarToko')->with('success','Data Berhasil Disimpan');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\toko  $toko
     * @return \Illuminate\Http\Response
     */
    // public function show(toko $toko)
    public function show(toko $toko)
    {
        $toko -> makeHidden(['toko_id']);
        return view('toko/show', compact('toko'));


        // $data = toko::findOrFail($id);

        // return view('toko.show')-> with(['data' => $data]);

        // return view('show')-> with(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(toko $toko)
    {
        // $data = toko::findOrFail($toko);
        // return view('toko.edit')-> with(['toko' => $data]);;
        return view('toko.edit', compact('toko'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\toko  $toko
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, toko $toko)
    public function update(Request $request, $id)
    {
        $tokoLama = toko::findOrFail($id);
        $tokobaru = $request -> except(['_token']);

        // $validationData=$request->validate([
        //     'nim' => 'unique:mahasiswas,nim,'.$id,
        // ]);


        $tokoLama -> update($tokobaru);

        return redirect('/toko/daftarToko')->with('success','Data Berhasil Diperbaharui');
        // return redirect('/toko/daftarToko')->with('success','Data Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\toko  $toko
     * @return \Illuminate\Http\Response
     */
    // public function destroy(toko $toko)
    public function destroy(toko $toko)
    {


        $toko->delete();
        return redirect('/toko/daftarToko')->with('danger','Data Berhasil Dihapus');

        // $datahapus = toko::findOrFail($id);
        // $datahapus->delete();
        // return redirect('/toko/daftarToko');
    }
}
