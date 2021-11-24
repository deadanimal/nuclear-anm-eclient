<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppProfilHargaServisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_profil_harga_servis', function (Blueprint $table) {
            $table->id();

            $table->string('idPKhidmat');
            $table->string('idPKhidmatServis');
            $table->string('idKatServis');
            $table->string('nama');
            $table->string('namaE');
            $table->string('flagHarga');
            $table->string('hargaY');
            $table->string('hargaT');
            $table->string('unitHarga');
            $table->text('catatan');
            
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
        Schema::dropIfExists('spp_profil_harga_servis');
    }
}
