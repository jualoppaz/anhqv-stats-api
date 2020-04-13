<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorsTable extends Migration
{

  const TABLE_NAME = 'actors';
  const FIELD_NAME = 'name';
  const FIELD_SURNAME = 'surname';
  const FIELD_SECOND_SURNAME = 'second_surname';
  const FIELD_BIRTHDATE = 'birthdate';
  const FIELD_DEATHDATE = 'deathdate';
  const FIELD_IMAGE_URL = 'image_url';
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
      $table->string(static::FIELD_NAME, 30)->nullable(false)->comment('Nombre del actor');
      $table->string(static::FIELD_SURNAME, 50)->comment('Primer apellido del actor');
      $table->string(static::FIELD_SECOND_SURNAME, 50)->comment('Segundo apellido del actor');
      $table->date(static::FIELD_BIRTHDATE)->comment('Fecha de nacimiento del actor');
      $table->date(static::FIELD_DEATHDATE)->nullable(true)->comment('Fecha de fallecimiento del actor');
      $table->string(static::FIELD_IMAGE_URL, 100)->comment('Url a la imagen del actor');
      $table->string(static::FIELD_SLUG, 30)->nullable(false)->comment('Slug que identifica al actor en las urls');
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
