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

  public $characters;

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->loadCharacters();
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

  public function loadCharacters(){
    $marisaId = DB::table('characters')
      ->whereSlug('marisa-benito')
      ->first()
      ->id;

    $vicentaId = DB::table('characters')
      ->whereSlug('vicenta-benito')
      ->first()
      ->id;

    $juanCuestaId = DB::table('characters')
      ->whereSlug('juan-cuesta')
      ->first()
      ->id;

    $palomaId = DB::table('characters')
      ->whereSlug('paloma-hurtado')
      ->first()
      ->id;

    $josemiId = DB::table('characters')
      ->whereSlug('jose-miguel-cuesta')
      ->first()
      ->id;

    $belenId = DB::table('characters')
      ->whereSlug('belen-lopez')
      ->first()
      ->id;

    $aliciaId = DB::table('characters')
      ->whereSlug('alicia-sanz')
      ->first()
      ->id;

    $conchaId = DB::table('characters')
      ->whereSlug('concha')
      ->first()
      ->id;

    $daniId = DB::table('characters')
      ->whereSlug('dani-rubio')
      ->first()
      ->id;

    $armandoId = DB::table('characters')
      ->whereSlug('armando')
      ->first()
      ->id;

    $mauriId = DB::table('characters')
      ->whereSlug('mauricio-hidalgo')
      ->first()
      ->id;

    $fernandoId = DB::table('characters')
      ->whereSlug('fernando-navarro')
      ->first()
      ->id;

    $nataliaId = DB::table('characters')
      ->whereSlug('natalia-cuesta')
      ->first()
      ->id;

    $robertoId = DB::table('characters')
      ->whereSlug('roberto-alonso')
      ->first()
      ->id;

    $luciaId = DB::table('characters')
      ->whereSlug('lucia-alvarez')
      ->first()
      ->id;

    $emilioId = DB::table('characters')
      ->whereSlug('emilio-delgado')
      ->first()
      ->id;

    $mozoMudanza1Id = DB::table('characters')
      ->whereSlug('mozo-mudanza-1')
      ->first()
      ->id;

    $mozoMudanza2Id = DB::table('characters')
      ->whereSlug('mozo-mudanza-2')
      ->first()
      ->id;

    $pacoId = DB::table('characters')
      ->whereSlug('paco')
      ->first()
      ->id;

    $santiagoSeguraId = DB::table('characters')
      ->whereSlug('santiago-segura')
      ->first()
      ->id;

    $marianoId = DB::table('characters')
      ->whereSlug('mariano-delgado')
      ->first()
      ->id;

    $estherId = DB::table('characters')
      ->whereSlug('esther')
      ->first()
      ->id;

    $antonioId = DB::table('characters')
      ->whereSlug('antonio-el-capataz')
      ->first()
      ->id;

    $obreroAfricanoId = DB::table('characters')
      ->whereSlug('obrero-africano')
      ->first()
      ->id;

    $obreroMarroquiId = DB::table('characters')
      ->whereSlug('obrero-marroqui')
      ->first()
      ->id;

    $obreroPolacoId = DB::table('characters')
      ->whereSlug('obrero-polaco')
      ->first()
      ->id;

    $this->characters = [
      'marisa-benito' => $marisaId,
      'vicenta-benito' => $vicentaId,
      'juan-cuesta' => $juanCuestaId,
      'paloma-hurtado' => $palomaId,
      'jose-miguel-cuesta' => $josemiId,
      'belen-lopez' => $belenId,
      'alicia-sanz' => $aliciaId,
      'concha' => $conchaId,
      'dani-rubio' => $daniId,
      'armando' => $armandoId,
      'mauricio-hidalgo' => $mauriId,
      'fernando-navarro' => $fernandoId,
      'natalia-cuesta' => $nataliaId,
      'roberto-alonso' => $robertoId,
      'lucia-alvarez' => $luciaId,
      'emilio-delgado' => $emilioId,
      'mozo-mudanza-1' => $mozoMudanza1Id,
      'mozo-mudanza-2' => $mozoMudanza2Id,
      'paco' => $pacoId,
      'santiago-segura' => $santiagoSeguraId,
      'mariano-delgado' => $marianoId,
      'esther' => $estherId,
      'antonio-el-capataz' => $antonioId,
      'obrero-africano' => $obreroAfricanoId,
      'obrero-marroqui' => $obreroMarroquiId,
      'obrero-polaco' => $obreroPolacoId,
    ];
  }

  public function getEvents()
  {
    $first_season = $this->getEvents_firstSeason();

    $res = array_merge($first_season);

    return $res;
  }

  public function getEvents_firstSeason()
  {
    $eventsTableSeeder1x01 = new EventsTableSeeder1x01($this->characters);
    $events_1x01 = $eventsTableSeeder1x01->getEvents_1x01();

    $eventsTableSeeder1x02 = new EventsTableSeeder1x02($this->characters);
    $events_1x02 = $eventsTableSeeder1x02->getEvents_1x02();

    $res = array_merge(
      $events_1x01, $events_1x02,
    );

    return $res;
  }
}
