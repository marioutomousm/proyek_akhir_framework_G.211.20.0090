<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class barangMasuk extends Model
{
    // use HasFactory;

    use SoftDeletes;

    protected $table ='barang_masuks';
    // protected $fillable = [

    //     'nama_barang',

    //     'kode_barang',
    //     'jumlah_barang',
    //     'toko',
    //     'tanggal_masuk',
    //     'created_at',
    //     'updated_at',
    // ];

    protected $guarded =[];

    protected $hidden=['created_at','updated_at'];

    public function toko(){
        return $this->belongsTo('App\Models\toko');
    }

}
