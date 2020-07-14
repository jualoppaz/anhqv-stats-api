<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

  const TABLE_NAME = 'events';
  const TABLE_SCENES_NAME = 'scenes';
  const FIELD_SCENE_ID = 'scene_id';
  const FIELD_ORDER = 'order';
  const FIELD_TYPE = 'type';
  const FIELD_TEXT = 'text';

  const TABLE_EVENTS_CHARACTERS_NAME = 'events_characters';
  const FIELD_CHARACTERS_ID = 'characters_id';
  const FIELD_CHARACTER_ID = 'character_id';
  const FIELD_EVENT_ID = 'event_id';

  const VALUE_DIALOG = 'DIALOG';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $events = $this->getEvents();

    $this->command->getOutput()->progressStart(count($events));

    foreach ($events as $event) {
      $eventId = DB::table(static::TABLE_NAME)->insertGetId([
        static::FIELD_SCENE_ID => $event[static::FIELD_SCENE_ID],
        static::FIELD_ORDER => $event[static::FIELD_ORDER],
        static::FIELD_TYPE => $event[static::FIELD_TYPE],
        static::FIELD_TEXT => $event[static::FIELD_TEXT],
      ]);

      foreach ($event[static::FIELD_CHARACTERS_ID] as $characterId)
      {
        DB::table(static::TABLE_EVENTS_CHARACTERS_NAME)->insert([
          static::FIELD_EVENT_ID => $eventId,
          static::FIELD_CHARACTER_ID => $characterId,
        ]);
      }

      $this->command->getOutput()->progressAdvance();
    }

    $this->command->getOutput()->progressFinish();
  }

  public function getEvents()
  {
    $first_season = $this->getEvents_firstSeason();

    $res = array_merge($first_season);

    return $res;
  }

  public function getEvents_firstSeason()
  {
    $eventsTableSeeder1x01 = new EventsTableSeeder1x01();
    $events_1x01 = $eventsTableSeeder1x01->getEvents_1x01();

    $res = array_merge($events_1x01);

    return $res;
  }
}
