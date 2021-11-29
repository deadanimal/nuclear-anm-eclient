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
            $table->string('idKategoriSyarikat');
            $table->string('noSyarikat');
            $table->string('nama');
            $table->string('alamat1');
            $table->string('alamat');
            $table->string('poskod');
            $table->string('idDaerah');
            $table->string('idNegeri');
            $table->string('noTel');
            $table->string('noFax');
            $table->string('email');
            $table->string('flagMigrasi');
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
