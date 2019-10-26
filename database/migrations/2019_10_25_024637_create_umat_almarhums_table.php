<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUmatAlmarhumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umat_almarhums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('umat_id');
            $table->string('tgl_wafat');
            $table->string('tgl_makam');
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
        Schema::dropIfExists('umat_almarhums');
    }
}
