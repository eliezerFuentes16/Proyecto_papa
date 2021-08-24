<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TITULO');
            $table->string('DESCRIPCION');
            $table->string('FECHA');
            $table->string('SUB_TITULO1');
            $table->string('PARRAFO1');
            $table->string('FOTO1');
            $table->string('SUB_TITULO2');
            $table->string('PARRAFO2');
            $table->string('FOTO2');
            $table->string('SUB_TITULO3');
            $table->string('PARRAFO3');
            $table->string('FOTO3');
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
        Schema::dropIfExists('posts');
    }
}
