<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppPusatKhidmatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_pusat_khidmats', function (Blueprint $table) {
            $table->id();
            $table->string('kod')->nullable();
            $table->string('kumpulan')->nullable();
            $table->string('nama')->nullable();
            $table->string('namaE')->nullable();
            $table->string('flagPenceramah')->nullable();
            $table->string('flagUtiliti')->nullable();
            $table->string('flagPromosi')->nullable();
            $table->string('cid')->nullable();

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
        Schema::dropIfExists('spp_pusat_khidmats');
    }
}
