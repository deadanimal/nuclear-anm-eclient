<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodKategoriSyarikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kod_kategori_syarikats', function (Blueprint $table) {
            $table->id();
            $table->string('kod')->nullable();
            $table->string('nama')->nullable();
            $table->string('noPelanggan')->nullable();
            $table->string('noPembekal')->nullable();
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
        Schema::dropIfExists('kod_kategori_syarikats');
    }
}
