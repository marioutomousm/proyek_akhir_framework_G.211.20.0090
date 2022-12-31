<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeTokoReq extends FormRequest
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
          'nama_toko' => 'required|unique:tokos,nama_toko,',
          'kepala_toko'=>'required',
          'jumlah_pekerja' => 'required|integer',
          'alamat' =>'required',
          'kota' => 'required',
        ];
    }
}
