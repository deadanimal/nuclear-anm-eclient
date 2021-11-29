<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('no_sebutharga')->nullable();
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->string('untuk_perhatian');
            $table->string('no_telefon');
            $table->string('kuantiti_pesanan');
            $table->string('jumlah_pesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
