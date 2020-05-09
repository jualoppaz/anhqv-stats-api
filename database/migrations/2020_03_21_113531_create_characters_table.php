<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{

  const TABLE_NAME = 'characters';
  const FIELD_NAME = 'name';
  const FIELD_SURNAME = 'surname';
  const FIELD_SECOND_SURNAME = 'second_surname';
  const FIELD_SHORTNAME = 'shortname';
  const FIELD_NICKNAME = 'nickname';
  const FIELD_IMAGE_URL = 'image_url';
  const FIELD_IMAGE_ALT = 'image_alt';
  const FIELD_SLUG = 'slug';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      $table->id();
      $table->string(static::FIELD_NAME, 30)->nullable(false)->comment('Nombre del personaje');
      $table->string(static::FIELD_SURNAME, 50)->comment('Primer apellido del personaje');
      $table->string(static::FIELD_SECOND_SURNAME, 50)->comment('Segundo apellido del personaje');
      $table->string(static::FIELD_SHORTNAME, 30)->nullable(false)->comment('Nombre corto del personaje');
      $table->string(static::FIELD_NICKNAME, 30)->comment('Apodo del personaje');
      $table->string(static::FIELD_IMAGE_URL, 100)->comment('Url a la imagen del personaje');
      $table->string(static::FIELD_IMAGE_ALT, 100)->comment('Texto a mostrar en el atributo alt de la imagen del personaje');
      $table->string(static::FIELD_SLUG, 30)->nullable(false)->comment('Slug que identifica al personaje en las urls');
      $table->timestamps();

      // constraints
      $table->unique(static::FIELD_SLUG);
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
