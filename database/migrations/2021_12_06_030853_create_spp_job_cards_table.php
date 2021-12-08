<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppJobCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_job_cards', function (Blueprint $table) {
            $table->id();
        
            $table->string('noJOB')->nullable();
            $table->string('idOrderDetail')->nullable();
            $table->string('idStatusJC')->nullable();
            $table->string('tarikh')->nullable();
            $table->string('masa')->nullable();
            $table->string('khidmat')->nullable();
            $table->string('idDO')->nullable();
            $table->string('idINV')->nullable();
            $table->string('flagMigrasi')->nullable();
            $table->string('idJadualDetail')->nullable();
            $table->string('flagJadual')->nullable();
            $table->string('noSiri')->nullable();
            $table->string('tarikhMulaKerja')->nullable();

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
        Schema::dropIfExists('spp_job_cards');
    }
}
