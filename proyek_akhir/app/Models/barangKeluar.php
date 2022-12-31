<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class barangKeluar extends Model
{
    use SoftDeletes;

    protected $table ='barang_keluars';

    protected $guarded =[];

    protected $hidden=['created_at','updated_at'];

    public function toko(){
        return $this->belongsTo('App\Models\toko');
    }
}
