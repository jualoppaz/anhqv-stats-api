<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{

    const TABLE_NAME = 'characters';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(static::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->comment('Nombre del personaje');
            $table->string('surname', 50)->comment('Apellidos del personaje');
            $table->string('nickname', 30)->comment('Apodo del personaje');
            $table->string('image_url', 100)->comment('Url a la imagen del personaje');
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
        Schema::dropIfExists(static::TABLE_NAME);
    }
}
