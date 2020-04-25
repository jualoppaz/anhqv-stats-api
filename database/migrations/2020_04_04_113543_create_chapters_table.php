<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
  const TABLE_NAME = 'chapters';
  const FIELD_NAME = 'name';
  const FIELD_SLUG = 'slug';
  const FIELD_NATURAL_ID = 'natural_id';
  const FIELD_SEASON = 'season';
  const FIELD_SUMMARY = 'summary';
  const FIELD_IMAGE_URL = 'image_url';
  const FIELD_VIDEO_URL = 'video_url';
  const FIELD_RELEASE_DATE = 'release_date';
  const FIELD_DURATION = 'duration';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      $table->id();
      $table->string(static::FIELD_NAME, 50)->nullable(false)->comment('Nombre del capítulo');
      $table->string(static::FIELD_SLUG, 50)->nullable(false)->comment('Slug del capítulo');
      $table->string(static::FIELD_NATURAL_ID, 5)->nullable(false)->comment('Identificador del capítulo en lenguaje natural');
      $table->string(static::FIELD_SEASON, 1)->nullable(false)->comment('Temporada a la que pertenece');
      $table->text(static::FIELD_SUMMARY)->nullable(false)->comment('Sinopsis del capítulo');
      $table->string(static::FIELD_IMAGE_URL, 100)->nullable(false)->comment('URL de la imagen del capítulo');
      $table->string(static::FIELD_VIDEO_URL, 100)->comment('URL del vídeo de Youtube con el capítulo');
      $table->date(static::FIELD_RELEASE_DATE)->nullable(true)->comment('Fecha de estreno del capítulo');
      $table->integer(static::FIELD_DURATION)->nullable(true)->comment('Duración del capítulo en minutos');
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
