<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppProfilSyarikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_profil_syarikats', function (Blueprint $table) {
            $table->id();
            $table->string('idKategoriSyarikat')->nullable();
            $table->string('noSyarikat')->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat1')->nullable();
            $table->string('alamat')->nullable();
            $table->string('poskod')->nullable();
            $table->string('idDaerah')->nullable();
            $table->string('idNegeri')->nullable();
            $table->string('noTel')->nullable();
            $table->string('noFax')->nullable();
            $table->string('email')->nullable();
            $table->string('flagMigrasi')->nullable();
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
        Schema::dropIfExists('spp_profil_syarikats');
    }
}
