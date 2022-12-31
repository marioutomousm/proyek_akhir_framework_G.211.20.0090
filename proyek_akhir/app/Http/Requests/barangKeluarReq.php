<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class barangKeluarReq extends FormRequest
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
              //'nim' => 'required',
          'nama_barang' => 'required|unique:barang_keluars,nama_barang,'.$this->barangKeluar->id,
          //   'nama_barang'=>['required', Rule::unique('barang_masuks')->ignore($this->id)],
          //   'nama_barang'=>[
          //     'required',
          //     'unique:barang_masuks,nama_barang,' . $this->barangMasuk
          // ],
            'toko_id' => 'required',
            'kode_barang' => 'required',
            'jumlah_barang' => 'required|integer',
            'tanggal_keluar' =>'required',
        ];
    }
}
