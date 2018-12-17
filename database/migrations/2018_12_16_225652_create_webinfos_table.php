<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinfos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('web_titulo');
            $table->string('web_subtitulo')->nullable();
            $table->string('web_subti_dos')->nullable();
            $table->string('web_direccion')->nullable();
            $table->string('web_correo')->nullable();
            $table->string('web_telefono')->nullable();
            $table->text('web_mision')->nullable();
            $table->text('web_vision')->nullable();
            $table->string('web_facebook')->nullable();
            $table->string('web_twiter')->nullable();
            $table->string('web_instagram')->nullable();
            $table->string('web_google')->nullable();

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
        Schema::dropIfExists('webinfos');
    }
}
