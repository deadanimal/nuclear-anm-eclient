<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppProsesTemplateSijilDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_proses_template_sijil_details', function (Blueprint $table) {
            $table->id();
            
            $table->string('idTemplateSijil')->nullable();
            $table->string('urutan')->nullable();
            $table->string('level')->nullable();
            $table->string('bil')->nullable();
            $table->string('keterangan')->nullable();
            
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
        Schema::dropIfExists('spp_proses_template_sijil_details');
    }
}
