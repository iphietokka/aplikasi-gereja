<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUmatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('nik_kk');
            $table->integer('nik');
            $table->string('ttl');
            $table->integer('usia');
            $table->integer('pekerjaan');
            $table->enum('status_kawin', ['belum', 'kawin', 'cerai']);
            $table->string('alamat');
            $table->string('sektor');
            $table->string('unit');
            // $table->integer('anak_id')->nullable();
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
        Schema::dropIfExists('umats');
    }
}
