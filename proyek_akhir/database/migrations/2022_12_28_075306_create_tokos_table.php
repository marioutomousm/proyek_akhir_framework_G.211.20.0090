<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table -> id();
            $table -> string('nama_toko',100);
            $table -> unique('nama_toko');
            $table -> string('kepala_toko',100);
            $table -> integer('jumlah_pekerja');
            $table -> text('alamat',255);
            $table -> string('kota',150);
            $table -> timestamps();
            $table->softDeletes($column = 'deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokos');
    }
};
