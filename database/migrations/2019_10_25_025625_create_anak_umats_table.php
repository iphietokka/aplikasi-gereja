<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnakUmatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak_umats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('umat_id')->nullable();
            $table->integer('anak_ke');
            $table->string('nama');
            $table->integer('nik');
            $table->string('ttl');
            $table->string('pekerjaan');
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
        Schema::dropIfExists('anak_umats');
    }
}
