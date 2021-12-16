<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppProsesTemplateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_proses_template_details', function (Blueprint $table) {
            $table->id();

            $table->string('idTemplate')->nullable();
            $table->string('namaProses')->nullable();
            $table->string('urutan')->nullable();
            $table->string('href')->nullable();
            $table->string('flagWajib')->nullable();

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
        Schema::dropIfExists('spp_proses_template_details');
    }
}
