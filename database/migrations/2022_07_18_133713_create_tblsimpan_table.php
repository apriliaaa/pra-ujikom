<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblsimpanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblsimpan', function (Blueprint $table) {
            $table->integer('no_simpan')->primary();
            $table->date('tanggal');
            $table->foreignId('no_anggota');
            $table->integer('jmlsimpan');
            $table->foreignId('kodeksr');
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
        Schema::dropIfExists('tblsimpan');
    }
}
