<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeBarangKlrReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
          'nama_barang' => 'required|unique:barang_keluars,nama_barang,',
            'toko_id' => 'required',
            'kode_barang' => 'required',
            'jumlah_barang' => 'required|integer',
            'tanggal_keluar' =>'required',

        ];
    }
}
