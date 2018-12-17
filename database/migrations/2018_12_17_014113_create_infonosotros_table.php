<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfonosotrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infonosotros', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nos_logo')->nullable();
            $table->string('nos_titulo')->nullable();
            $table->text('nos_decripcion');

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
        Schema::dropIfExists('infonosotros');
    }
}
