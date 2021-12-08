<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppPusatServisKhidmatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_pusat_servis_khidmats', function (Blueprint $table) {
            $table->id();
            $table->string('idPKhidmat')->nullable();
            $table->string('idKatServis')->nullable();
            $table->string('kod')->nullable();
            $table->string('nama')->nullable();
            $table->string('catatan')->nullable();
            $table->string('namaE')->nullable();
            $table->string('catatanE')->nullable();
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
        Schema::dropIfExists('spp_pusat_servis_khidmats');
    }
}
