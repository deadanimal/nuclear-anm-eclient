<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwMenuDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sw_menu_details', function (Blueprint $table) {
            $table->id();

            $table->string('mm_id')->nullable();
            $table->string('md_bil')->nullable();
            $table->string('md_href')->nullable();
            $table->string('md_tajuk')->nullable();
            $table->string('md_flagaktif')->nullable();

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
        Schema::dropIfExists('sw_menu_details');
    }
}
