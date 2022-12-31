<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class toko extends Model
{

    use SoftDeletes;

    protected $table ='tokos';
    protected $guarded =[];

    protected $hidden=['created_at','updated_at'];

    public function toko(){
        return $this->belongsTo('App\Models\toko');
    }
}
// use SoftDeletes;

    // protected $table ='tokos';
    // protected $fillable = [

    //     'nama_toko',
    //     'kepala_toko',
    //     'jumlah_pekerja',
    //     'alamat',
    //     'kota',
    //     'created_at',
    //     'updated_at',
    // ];

    // protected $hidden;

