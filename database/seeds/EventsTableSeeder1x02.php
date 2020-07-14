<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder1x02
{
  const FIELD_SCENE_ID = 'scene_id';
  const FIELD_ORDER = 'order';
  const FIELD_TYPE = 'type';
  const FIELD_TEXT = 'text';
  const FIELD_CHARACTERS_ID = 'characters_id';

  const VALUE_DIALOG = 'DIALOG';

  public $characters;

  public function __construct()
  {
    $this->loadCharacters();
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

    $this->characters = [
      'marisa-benito' => $marisaId,
      'vicenta-benito' => $vicentaId,
    ];
  }

  public function getEvents_1x02()
  {
    $scenes_1x02 = DB::table('chapters')
        ->whereNaturalId('1x02')
        ->join('scenes', 'chapters.id', '=', 'scenes.chapter_id')
        ->select('scenes.id')
        ->get()
        ->pluck('id');

    $index = 0;

    $events_1x02_01 = $this->getEvents_1x02_01($scenes_1x02[$index++]);

    $res = array_merge(
      $events_1x02_01,
    );

    return $res;
  }

  /**
   * Eventos de la escena 1 del capitulo 1x02
   */
  public function getEvents_1x02_01($scene_id)
  {
    $marisaId = $this->characters['marisa-benito'];
    $vicentaId = $this->characters['vicenta-benito'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Vicenta! ¿Has visto cómo está este mando a distancia?',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Está en el salón.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, hija. Está lleno de mordiscos.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Es que estoy enseñando a Valentín a traerlo',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues hija, para cuando aprenda esto ya no funciona.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿De qué quieres el bocadillo para mañana?',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Y dale, ¡que no quiero ir yo a esa excursión de jubiletas!',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, que te he comprado ya el ticket. Me ha costado 6 euros.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues mira, haces reventa en la puerta del autobús.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que va a estar lleno de viudos...',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Que yo no quiero andar 200 kilómetros para que me suelten en el campo como a Heidi, Vicenta!',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que va a ser muy divertido... va a haber una capea.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'La capea... éstos del IMSERSO ya no saben qué hacer para quitarse a los viejos de encima.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que va a venir hasta Concha, ¿cómo no vas a venir tú?',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Arrg, y dale. Bueno, ya voy pero calla ya, ¿eh? Y dile a este perro que no me siga. ¡Que no me sigas, Valentín, que ya está bien!',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    return $events;
  }
}
