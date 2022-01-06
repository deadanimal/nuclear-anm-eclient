<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppStafInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp_staf_infos', function (Blueprint $table) {
            $table->id();
            
            $table->string('bioPin')->nullable();
            $table->string('username')->nullable();
            $table->string('userpassword')->nullable();
            $table->string('idPKhidmat')->nullable();
            $table->string('tarikhMula')->nullable();
            $table->string('tarikhTamat')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_regdate')->nullable();
            $table->string('activity')->nullable();
            $table->string('user_viewemail')->nullable();
            $table->string('user_sorttopics')->nullable();
            $table->string('language')->nullable();
            $table->string('num_topics')->nullable();
            $table->string('num_posts')->nullable();
            $table->string('access')->nullable();
            $table->string('utype')->nullable();


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
        Schema::dropIfExists('spp_staf_infos');
    }
}
