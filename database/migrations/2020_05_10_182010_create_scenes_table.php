<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScenesTable extends Migration
{

  const TABLE_NAME = 'scenes';
  const TABLE_CHAPTERS_NAME = 'chapters';

  const FIELD_IMAGE_URL = 'image_url';
  const FIELD_IMAGE_ALT = 'image_alt';
  const FIELD_CHAPTER_ID = 'chapter_id';
  const FIELD_TITLE = 'title';
  const FIELD_ORDER = 'order';
  const FIELD_ID = 'id';


  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      $table->id();
      $table->string(static::FIELD_IMAGE_URL, 100)->comment('Url a la imagen de la escena');
      $table->string(static::FIELD_IMAGE_ALT, 100)->comment('Texto a mostrar en el atributo alt de la imagen de la escena');
      $table->bigInteger(static::FIELD_CHAPTER_ID)->comment('Id del capítulo al que pertenece la escena');
      $table->string(static::FIELD_TITLE)->nullable(false)->comment('Título que resumen la escena');
      $table->integer(static::FIELD_ORDER)->comment('Orden de la escena en el capítulo');

      $table->foreign(static::FIELD_CHAPTER_ID)->references(static::FIELD_ID)->on(static::TABLE_CHAPTERS_NAME);
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
