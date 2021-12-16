<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsmBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psm_biodatas', function (Blueprint $table) {
            $table->id();
            
            $table->string('Bio_Pin')->nullable();
            $table->string('Bio_Nokpl')->nullable();
            $table->string('Bio_Nokpb')->nullable();
            $table->string('Bio_Nama')->nullable();
            $table->string('Bio_Kjwtn')->nullable();
            $table->string('Bio_Gredgaji')->nullable();
            $table->string('Bio_Kjab')->nullable();
            $table->string('Bio_Tkhlahir')->nullable();
            $table->string('Bio_Knegeri')->nullable();
            $table->string('Bio_Kstatkah')->nullable();
            $table->string('Bio_Kjantina')->nullable();
            $table->string('Bio_Kbangsa')->nullable();
            $table->string('Bio_Kagama')->nullable();
            $table->string('Bio_Telefon')->nullable();
            $table->string('Bio_Nwaris')->nullable();
            $table->string('Bio_Telwaris')->nullable();
            $table->string('Bio_StatJwtn')->nullable();
            $table->string('Bio_Samb')->nullable();
            $table->string('Bio_NoBilik')->nullable();
            $table->string('Bio_NewJab')->nullable();
            $table->string('Bio_Email')->nullable();
            
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
        Schema::dropIfExists('psm_biodatas');
    }
}
