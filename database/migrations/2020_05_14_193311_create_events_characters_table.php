<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsCharactersTable extends Migration
{

  const TABLE_NAME = 'events_characters';
  const TABLE_EVENTS_NAME = 'events';
  const TABLE_CHARACTERS_NAME = 'characters';
  const FIELD_EVENT_ID = 'event_id';
  const FIELD_CHARACTER_ID = 'character_id';
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
      $table->bigInteger(static::FIELD_EVENT_ID)->comment('Id del suceso');
      $table->bigInteger(static::FIELD_CHARACTER_ID)->comment('Id del personaje');

      $table->foreign(static::FIELD_EVENT_ID)->references(static::FIELD_ID)->on(static::TABLE_EVENTS_NAME);
      $table->foreign(static::FIELD_CHARACTER_ID)->references(static::FIELD_ID)->on(static::TABLE_CHARACTERS_NAME);
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
