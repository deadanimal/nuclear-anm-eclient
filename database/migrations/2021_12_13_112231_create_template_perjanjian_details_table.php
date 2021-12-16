<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatePerjanjianDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_perjanjian_details', function (Blueprint $table) {
            $table->id();

            $table->string('tpm_id')->nullable();
            $table->string('tpd_urutan')->nullable();
            $table->string('tpd_level')->nullable();
            $table->string('tpd_bil')->nullable();
            $table->text('tpd_keterangan')->nullable();

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
        Schema::dropIfExists('template_perjanjian_details');
    }
}
