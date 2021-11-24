<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppPusatKhidmatServisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_pusat_khidmat_servis', function (Blueprint $table) {
            $table->id();
            $table->string('idPKhidmat');
            $table->string('idKatServis');
            $table->string('kod');
            $table->string('nama');
            $table->string('catatan');
            $table->string('namaE');
            $table->string('catatanE');
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
        Schema::dropIfExists('spp_pusat_khidmat_servis');
    }
}
