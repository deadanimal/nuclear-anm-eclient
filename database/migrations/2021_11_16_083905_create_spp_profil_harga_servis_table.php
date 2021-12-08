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

            $table->string('idPKhidmat')->nullable();
            $table->string('idPKhidmatServis')->nullable();
            $table->string('idKatServis')->nullable();
            $table->string('nama')->nullable();
            $table->string('namaE')->nullable();
            $table->string('flagHarga')->nullable();
            $table->string('hargaY')->nullable();
            $table->string('hargaT')->nullable();
            $table->string('unitHarga')->nullable();
            $table->text('catatan')->nullable();
            
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
