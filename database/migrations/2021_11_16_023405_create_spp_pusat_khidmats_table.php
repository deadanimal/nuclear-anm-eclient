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
            $table->string('kod');
            $table->string('kumpulan');
            $table->string('nama');
            $table->string('namaE');
            $table->string('flagPenceramah');
            $table->string('flagUtiliti');
            $table->string('flagPromosi');
            $table->string('cid');

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
