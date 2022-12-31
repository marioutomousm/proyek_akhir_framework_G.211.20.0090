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
        Schema::create('barang_keluars', function (Blueprint $table) {
            $table -> id();
            $table -> foreignId('toko_id')->constrained('tokos')->onDelete('cascade')->onUpdate('cascade');
            $table -> string('nama_barang',100);
            $table -> unique('nama_barang');
            $table -> string('kode_barang',100);
            $table -> integer('jumlah_barang');
            // $table -> string('toko');
            $table -> date('tanggal_keluar');
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
        Schema::dropIfExists('barang_keluars');
    }
};
