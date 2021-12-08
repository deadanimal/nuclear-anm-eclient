<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppPelangganSyarikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_pelanggan_syarikats', function (Blueprint $table) {
            $table->id();

            $table->string('idSyarikat')->nullable();
            $table->string('idStatusSyarikat')->nullable();
            $table->string('noAkaun')->nullable();
            $table->string('username')->nullable();
            $table->string('userpassword')->nullable();
            $table->string('contact')->nullable();
            $table->string('noHP')->nullable();
            $table->string('email')->nullable();
            $table->string('cid')->nullable();
            $table->string('flag_pass')->nullable();

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
        Schema::dropIfExists('spp_pelanggan_syarikats');
    }
}
