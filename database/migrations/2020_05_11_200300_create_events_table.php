<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{

  const TABLE_NAME = 'events';
  const TABLE_SCENES_NAME = 'scenes';
  const FIELD_SCENE_ID = 'scene_id';
  const FIELD_ORDER = 'order';
  const FIELD_TYPE = 'type';
  const FIELD_TEXT = 'text';

  const VALUE_DIALOG = 'DIALOG';
  const VALUE_SOUND = 'SOUND';
  const VALUE_NOTE = 'NOTE';
  const VALUE_ACTION = 'ACTION';

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
      $table->bigInteger(static::FIELD_SCENE_ID)
        ->nullable(false)
        ->comment('Id de la escena a la que pertenece el evento');
      $table->enum(static::FIELD_TYPE, [
        static::VALUE_DIALOG,
        static::VALUE_SOUND,
        static::VALUE_NOTE,
        static::VALUE_ACTION
      ])
        ->nullable(false)
        ->comment('Tipo de evento');
      $table->integer(static::FIELD_ORDER)
        ->nullable(false)
        ->comment('Orden del evento dentro de una escena');
      $table->string(static::FIELD_TEXT, 1000)
        ->nullable(true)
        ->comment('Texto del diálogo');

      $table->foreign(static::FIELD_SCENE_ID)->references(static::FIELD_ID)->on(static::TABLE_SCENES_NAME);
      $table->unique([static::FIELD_SCENE_ID, static::FIELD_ORDER]);
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
