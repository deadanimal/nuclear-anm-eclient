<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePermohonanSebuthargaLuaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_sebutharga_luarans', function (Blueprint $table) {
            $table->id();
            $table->string('sebutharga_jenis_permohonan')->nullable();
            $table->string('name')->nullable();
            $table->string('no_pelanggan')->nullable();
            $table->string('catatan')->nullable();
            $table->string('pusat_khidmat')->nullable();
            $table->string('pusat_perkhidmatan')->nullable();
            $table->string('jenis_perkhidmatan')->nullable();
            $table->string('harga_perkhidmatan')->nullable();
            $table->string('jumlah_perkhidmatan')->nullable();
            $table->string('tajuk')->nullable();
            $table->string('catatanT')->nullable();
            $table->string('fail_permohonan')->nullable();

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
        Schema::dropIfExists('permohonan_sebutharga_luarans');
    }
}
