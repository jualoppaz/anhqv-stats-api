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
    }
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
    $events_1x01 = $this->getEvents_1x01();

    $res = array_merge($events_1x01);

    return $res;
  }

  public function getEvents_1x01()
  {
    $this->command->info('Seeding events - 1x01');

    $scenes_1x01 = DB::table('chapters')
        ->whereNaturalId('1x01')
        ->join('scenes', 'chapters.id', '=', 'scenes.chapter_id')
        ->select('scenes.id')
        ->get()
        ->pluck('id');

    $index = 0;

    $events_1x01_01 = $this->getEvents_1x01_01($scenes_1x01[$index++]);
    $events_1x01_02 = $this->getEvents_1x01_02($scenes_1x01[$index++]);
    $events_1x01_03 = $this->getEvents_1x01_03($scenes_1x01[$index++]);
    $events_1x01_04 = $this->getEvents_1x01_04($scenes_1x01[$index++]);
    $events_1x01_05 = $this->getEvents_1x01_05($scenes_1x01[$index++]);
    $events_1x01_06 = $this->getEvents_1x01_06($scenes_1x01[$index++]);
    $events_1x01_07 = $this->getEvents_1x01_07($scenes_1x01[$index++]);
    $events_1x01_08 = $this->getEvents_1x01_08($scenes_1x01[$index++]);
    $events_1x01_09 = $this->getEvents_1x01_09($scenes_1x01[$index++]);
    $events_1x01_10 = $this->getEvents_1x01_10($scenes_1x01[$index++]);
    $events_1x01_11 = $this->getEvents_1x01_11($scenes_1x01[$index++]);
    $events_1x01_12 = $this->getEvents_1x01_12($scenes_1x01[$index++]);
    $events_1x01_13 = $this->getEvents_1x01_13($scenes_1x01[$index++]);
    $events_1x01_14 = $this->getEvents_1x01_14($scenes_1x01[$index++]);
    $events_1x01_15 = $this->getEvents_1x01_15($scenes_1x01[$index++]);
    $events_1x01_16 = $this->getEvents_1x01_16($scenes_1x01[$index++]);
    $events_1x01_17 = $this->getEvents_1x01_17($scenes_1x01[$index++]);
    $events_1x01_18 = $this->getEvents_1x01_18($scenes_1x01[$index++]);
    $events_1x01_19 = $this->getEvents_1x01_19($scenes_1x01[$index++]);
    $events_1x01_20 = $this->getEvents_1x01_20($scenes_1x01[$index++]);
    $events_1x01_21 = $this->getEvents_1x01_21($scenes_1x01[$index++]);
    $events_1x01_22 = $this->getEvents_1x01_22($scenes_1x01[$index++]);
    $events_1x01_23 = $this->getEvents_1x01_23($scenes_1x01[$index++]);
    $events_1x01_24 = $this->getEvents_1x01_24($scenes_1x01[$index++]);
    $events_1x01_25 = $this->getEvents_1x01_25($scenes_1x01[$index++]);

    $res = array_merge(
      $events_1x01_01, $events_1x01_02, $events_1x01_03, $events_1x01_04,
      $events_1x01_05, $events_1x01_06, $events_1x01_07, $events_1x01_08,
      $events_1x01_09, $events_1x01_10, $events_1x01_11, $events_1x01_12,
      $events_1x01_13, $events_1x01_14, $events_1x01_15, $events_1x01_16,
      $events_1x01_17, $events_1x01_18, $events_1x01_19, $events_1x01_20,
      $events_1x01_21, $events_1x01_22, $events_1x01_23, $events_1x01_24,
      $events_1x01_25,
    );

    return $res;
  }

  /**
   * Eventos de la escena 1 del capitulo 1x01
   */
  public function getEvents_1x01_01($scene_id)
  {
    $this->command->info('Seeding scene 01');

    $marisaId = $this->characters['marisa-benito'];
    $vicentaId = $this->characters['vicenta-benito'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Vicenta, ven que esto empieza ya!',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, yo me voy a acostar. Tengo unos ardores...',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Normal, soltera toda tu vida...',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ardor de estómago... ¿Por qué siempre me tienes que estar recordando que no me he casado? Yo decidí esperar al hombre de mi vida.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues parece que tarda, guapa.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No necesito a un hombre para vivir, no como tú:  que desde que te dejó Manolo estás amargada.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eso es mentira. Yo estaba amargada desde antes.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'La culpa de todo la tuvo papá',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Por qué?',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No sé',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 2 del capitulo 1x01
   */
  public function getEvents_1x01_02($scene_id)
  {
    $this->command->info('Seeding scene 02');

    $juanCuestaId = $this->characters['juan-cuesta'];
    $palomaId = $this->characters['paloma-hurtado'];
    $josemiId = $this->characters['jose-miguel-cuesta'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Si le digo a las once es a las once. ¿Por qué esta niña nunca me hace caso?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Llámala al móvil',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero si no me lo coge. ¡Le compramos un móvil y nos lo apaga! Hijo mío, si yo te digo a ti "a las once", ¿tú qué entiendes?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'A las once, ¿no?',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Este niño sí, este niño será algo grande... algún día.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Se habrá retrasado un poquito. Oye, es joven, tiene diecisiete años, le gusta divertirse y salir con chicos; tontear un poquito. Cuando yo tenía su edad...¡ya verás cuando vuelva!',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 3 del capitulo 1x01
   */
  public function getEvents_1x01_03($scene_id)
  {
    $this->command->info('Seeding scene 03');

    $belenId = $this->characters['belen-lopez'];
    $aliciaId = $this->characters['alicia-sanz'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Alicia, ¿nos vamos o qué? Tendré que conocer a tíos cuando todavía no están borrachos',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya estoy',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues hala, vámonos. ¿Vas a salir así?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues no salgo. Es que siempre me haces lo mismo.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, tía. Pero si luego siempre se acercan a hablar contigo.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, para preguntarme tu nombre. Es que es humillante, de verdad.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Por qué siempre tienes que ser tan negativa?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues mira, porque yo ya no estoy para estas cosas, Alicia, que tengo casi 30 años y no tengo piso, no tengo casa, no tengo coche... es que no tengo nada. ¿Hasta cuándo vamos a seguir comportándonos como si tuviéramos dieciséis años, eh?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Nos vamos?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, vámonos. Es la última vez que salgo, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que sí.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Te lo digo en serio, la última vez.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vale.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Siempre me haces lo mismo, jolines.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 4 del capitulo 1x01
   */
  public function getEvents_1x01_04($scene_id)
  {
    $this->command->info('Seeding scene 04');

    $conchaId = $this->characters['concha'];
    $daniId = $this->characters['dani-rubio'];
    $armandoId = $this->characters['armando'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Adónde irán a estas horas?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Pero a ti qué más te da?',
      static::FIELD_CHARACTERS_ID => [$daniId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Si es que éstas dos trasnochan más que Batman. Si lo llego a saber no les alquilo el piso.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que no, Beatriz, que el niño me lo quedo yo. Esta semana me toca a mí: el domingo te lo llevas tú.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Parezco un coche...',
      static::FIELD_CHARACTERS_ID => [$daniId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo también tengo derecho a disfrutar de mi hijo.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Di que sí',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Me voy a tomar algo.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero bueno, ¿y el niño?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero hombre, mamá. Donde voy no le dejan entrar.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Anda que...',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 5 del capitulo 1x01
   */
  public function getEvents_1x01_05($scene_id)
  {
    $this->command->info('Seeding scene 05');

    $mauriId = $this->characters['mauricio-hidalgo'];
    $fernandoId = $this->characters['fernando-navarro'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Por qué no podemos ir a Ibiza en el ferri?',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues porque entre que vamos y venimos se nos va el fin de semana.',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo no me puedo montar en un avión, Fernando. No puedo.',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mauri...',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Me escuchas? No, es que no puedo. No puedo, no...',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mauri, por favor. Ibiza está aquí al lado: son 40 minutos.',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿40 minutos? Suficiendo para estrellarse.',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Pero qué dices? El avión es el medio de transporte más seguro que existe. Mira, lo peor que te puede pasar es que te pierdan la maleta.',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ah, perfecto. Primero me van a matar y luego me van a perder la maleta. Pues esta camisa no la meto que es carísima.',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Todo es un drama...',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 6 del capitulo 1x01
   */
  public function getEvents_1x01_06($scene_id)
  {
    $this->command->info('Seeding scene 06');

    $juanCuestaId = $this->characters['juan-cuesta'];
    $palomaId = $this->characters['paloma-hurtado'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, ya te dije que no podía ir. No, imposible. Bueno, ya te llamo. Natalia, ¿has visto la hora que es? ¿Qué, no tienes nada que decir? ¡Natalia! ¡¡Natalia!!... ¡A tu cuarto castigada... y no salgas!',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No seas tan duro con ella.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ésta no me conoce a mí.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 7 del capitulo 1x01
   */
  public function getEvents_1x01_07($scene_id)
  {
    $this->command->info('Seeding scene 07');

    $events = [];

    $robertoId = $this->characters['roberto-alonso'];
    $luciaId = $this->characters['lucia-alvarez'];
    $conchaId = $this->characters['concha'];
    $marisaId = $this->characters['marisa-benito'];
    $aliciaId = $this->characters['alicia-sanz'];
    $belenId = $this->characters['belen-lopez'];
    $vicentaId = $this->characters['vicenta-benito'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Lucía, ¿te importaría abrir la puerta? Es que esto pesa.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya sé que pesa, cariño, pero no eres el único que va cargado.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y por qué no pruebas con la llave?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues porque me las tenía que dar el conserje. ¿Tú ves al conserje? Pues no hay llaves.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues entonces llama a algún vecino y que nos abra.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Prometiste que ibas a estar de buen humor durante la mudanza.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Si estoy de buen humor: no doy saltos de alegría porque la tele pesa.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Sí?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola, buenos días. Mire, somos los nuevos vecinos. Es que no encontramos al conserje y no tenemos las llaves.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y qué le hace suponer que ese imbécil está en mi casa?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya, oiga, pero... ¿pero nos podría abrir la puerta?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Nooo, no no no. Yo no abro a desconocidos.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero bueno, qué borde ¿no?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, llama a otro.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Por qué no dejas la tele en el suelo?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Porque luego hay que volver a levantarla.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Dígame?',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola, buenos días. Mire, soy la nueva vecina, ¿le impor...?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, gracias. No queremos nada.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya, oiga pero... pero espere.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No les abras, Marisa, que no sé quiénes son.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues son majos los vecinos: yo creo que hemos acertado.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hombre, pero digo yo que habrá alguien que nos acabará abriendo, ¿no?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no creo (risas)',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Y usted cuelge, señora!',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero si sólo son las 12...',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Belén, ¿estás despierta?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Están llamando al telefonillo...',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿No me digas...?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Pero quién es?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Tu menstruación, ¿a mí qué me cuentas?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues yo no pienso levantarme.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo ya no sé dónde llamar.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, ya está bien. Mira, Lucía. Como no me abra alguien inmediatamente esta puerta...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué? ¿Qué vas a hacer?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No lo sé, pero algo habrá que hacer, ¿no? Se acerca el invierno... Ayyy.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Buenos días',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ay. Muchísimas gracias, señora. ¡Muchísimas gracias! Si no estuviese mi novia delante le daba un beso en los morros.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Perdón?',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Nada, nada, no le haga caso. Somos los nuevos vecinos, y es que aún no tenemos las llaves y nadie nos abría la puerta.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Ah, no?',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y Emilio, el portero?',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'AAAhh. Buena pregunta: ¿quién mató a Kennedy? ¿dónde está el portero? Si no le importa yo voy subiendo. Encantado, señora.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, sí. Pasad, pasad: yo os acompaño. Me llamo Vicenta, y éste es Valentín.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Encantada, yo soy Lucía y él es Roberto.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 8 del capitulo 1x01
   */
  public function getEvents_1x01_08($scene_id)
  {
    $this->command->info('Seeding scene 08');

    $events = [];

    $vicentaId = $this->characters['vicenta-benito'];
    $luciaId = $this->characters['lucia-alvarez'];
    $robertoId = $this->characters['roberto-alonso'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué os decía? Aquí están las llaves: Emilio las deja siempre en el mismo sitio.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero bueno, entonces las puede coger cualquiera.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, cualquiera no: sólo los que lo sabemos.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Aahh',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Lucía, ¿me puedes abrir la puerta, por favor?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡No, no, no, no, no, no! No, no, no. Está prohibido utilizar el ascensor para subir: vamos mejor por las escaleras.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cómo?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que... que sólo lo utilizamos para bajar, se estropea mucho: creo que quieren cambiarlo.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues que lo cambien: yo espero aquí.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, va. Cariño, venga va, que sólo son 3 pisos.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ah, ¿sólo 3? Ah, bueno.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Si sólo son 3 pisos, vale.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Les va a encantar la gente del edificio: somos todos muy jóvenes.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 9 del capitulo 1x01
   */
  public function getEvents_1x01_09($scene_id)
  {
    $this->command->info('Seeding scene 09');

    $events = [];

    $vicentaId = $this->characters['vicenta-benito'];
    $luciaId = $this->characters['lucia-alvarez'];
    $marisaId = $this->characters['marisa-benito'];
    $robertoId = $this->characters['roberto-alonso'];
    $fernandoId = $this->characters['fernando-navarro'];
    $mauriId = $this->characters['mauricio-hidalgo'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo vivo aquí, en el 1ºA con mi hermana, ¿queréis conocerla?',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, de verdad. Nos encantaría pero quizá en otro momento.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Marisa! ¡Marisa! ¡Sal un momento!',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero bueno, ¿no ibas tú a la compra?',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Estos son nuestros nuevos vecinos del tercero.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Lo que nos faltaba, más jóvenes. Por lo menos estaréis casaos, ¿no?',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues no, todavía no pero... estamos a punto.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Ah, sí?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mira, dame el carro que ya voy yo a la compra. Encantada, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Igualmente.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No le hagáis caso, es una bromista.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, Mauri, por favor. Que perdemos el avión.',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Nos vamos a Ibiza en un avión, estoy muy contento.',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Perdonadle, es que ha tomado un valium y está histérico.',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mira, Fernando. Éstos son nuestros nuevos vecinos del tercero.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ay, un momento histórico. Di algo.',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Socorro...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bienvenidos, yo soy Fernando y él es Mauri. Y nos vamos porque no llegamos. ¡Hasta el lunes!',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vicenta, ¿le importaría darle las llaves a Emilio? Es que tiene que dar de comer a Versache.',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Quién es Versache?',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mi mascota. Es un conejo... enano.',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Mauricio!',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Ya voy! A ver si ahora con las prisas me voy a torcer un tobillo.',
      static::FIELD_CHARACTERS_ID => [$mauriId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, ¿qué? ¿Podemos seguir la escalada?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Éstos son nuestros vecinos de enfrente. Mi hermana está segura de que son gays, pero a mí me da que son homosexuales de ésos.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hoy día nunca se sabe.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Nunca, hija. Nunca.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 10 del capitulo 1x01
   */
  public function getEvents_1x01_10($scene_id)
  {
    $this->command->info('Seeding scene 10');

    $events = [];

    $vicentaId = $this->characters['vicenta-benito'];
    $conchaId = $this->characters['concha'];
    $luciaId = $this->characters['lucia-alvarez'];
    $robertoId = $this->characters['roberto-alonso'];
    $juanCuestaId = $this->characters['juan-cuesta'];
    $palomaId = $this->characters['paloma-hurtado'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ahora vais a conocer a Concha. No, si lo digo porque estará mirando por la mirilla.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No miro por la mirilla, lo que pasa es que armáis un escándalo... oye, ¿éstos quiénes son?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Los nuevos vecinos. No están casados, pero se van a casar.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Encantada.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Estamos de visita oficial por el edificio.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Buenos días',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ten cuidado con ésta...',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Joder, esto es como jugar a la Play Station: parece que hemos pasado a otra pantalla.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vecinos nuevos, ¿no? Pues yo soy Paloma y éste es mi marido.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo soy Juan Cuesta, presidente de la comunidad. Bienvenidos.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Encantada.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Buena tele llevas, ¿eh? Te tiene que haber costado una pasta.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Gracias por recordármelo, estaba pensando soltarla.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Espera, espera, espera. Espera que te ayudo, espera. No sigas... Ala, tira. Con cuidadito, ¿eh? no vayamos a tener un disgusto. Vamos.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vamos, vamos para arriba, que estos chicos deben estar deseando instalarse.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo subo un momentito y me voy enseguida, ¿eh?, que tengo muchas cosas que hacer.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, ver la tele.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Por favor, si aparece el conserje que levante la mano.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 11 del capitulo 1x01
   */
  public function getEvents_1x01_11($scene_id)
  {
    $this->command->info('Seeding scene 11');

    $events = [];

    $vicentaId = $this->characters['vicenta-benito'];
    $conchaId = $this->characters['concha'];
    $luciaId = $this->characters['lucia-alvarez'];
    $robertoId = $this->characters['roberto-alonso'];
    $juanCuestaId = $this->characters['juan-cuesta'];
    $palomaId = $this->characters['paloma-hurtado'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, pues muchísimas gracias, de verdad. Gracias por todo.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Tira...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Nada, por Dios. Bienvenidos.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vale.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Si necesitáis algo...',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Lo que sea, cualquier cosa.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Aquí somos como una gran familia.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vais a tener... que pintar.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Mira que te he dicho lo del cable, chaval!',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No me gustan. No sé por qué pero no me gustan nada.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y a usted cuándo le ha gustado alguien?',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo te digo a ti que ésos no se casan. ¿Y el piso? ¿se lo han comprado a medias?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No sé, no se lo he preguntado.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mal hecho.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'A mí mientras paguen la comunidad...',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 12 del capitulo 1x01
   */
  public function getEvents_1x01_12($scene_id)
  {
    $this->command->info('Seeding scene 12');

    $events = [];

    $luciaId = $this->characters['lucia-alvarez'];
    $robertoId = $this->characters['roberto-alonso'];
    $emilioId = $this->characters['emilio-delgado'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, ¿qué? ¿Qué te parece? ¿Eh? Esto lo pintamos, arreglamos el suelo, cambiamos el baño, le ponemos unos alógenos... y como nuevo, ¿a que sí?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Con lo bien que estaba yo con mis padres...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, que... que tiene mucha luz.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Verdad?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Has visto el dormitorio?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿El dormitorio? No. No, no, no lo he visto. ¿Y éste quien es?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡El portero! Oiga. ¡Oiga, oiga, despierte!',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué pasa aquí? Eh, eehh... hola, hola.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué tal?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues muy bien, ¿se acuerda de mí? Somos los de las llaves.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, hombre, claro que sí. Perdónenme ustedes, pero es que he venido a arreglar aquí unos enchufes y me ha dado un mareo... yo no sé qué...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Péinate, alguno te ha dado calambre.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eeehh... ah, por cierto, que ya le han traído la cama.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y qué tal?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hombre, está un poco dura, la verdad. Pero esto, en cuanto la rueden ustedes un poquito...esto va a ir fetén.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Claro...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'El plástico... el plástico se lo quitaba yo porque mete un calor... Eh, bueno, los voy a dejar porque yo tengo muchas cosas que hacer. Que... si me necesitan ya saben dónde me tienen, ¿eh? Venga, hasta luego, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hasta luego.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Adiós.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hasta luego.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Buuuuenooo...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Limpiamos?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '... Sí.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 13 del capitulo 1x01
   */
  public function getEvents_1x01_13($scene_id)
  {
    $this->command->info('Seeding scene 13');

    $events = [];

    $juanCuestaId = $this->characters['juan-cuesta'];
    $josemiId = $this->characters['jose-miguel-cuesta'];
    $palomaId = $this->characters['paloma-hurtado'];
    $nataliaId = $this->characters['natalia-cuesta'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Queréis sentaros de una vez? Venga, vamos a comer.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Jo, yo no tengo hambre.',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Da igual, vas a comer. ¡Natalia! ¿Pero qué hace esta niña?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Juan, hazme sitio.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Joe, ¿otra vez lentejas?',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, otra vez lentejas. ¡¡Natalia!! ¡¡No te llamo más!! ¿¿ehh??',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que ya estoy aquí, pesao.',
      static::FIELD_CHARACTERS_ID => [$nataliaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Por qué siempre tenemos que comer tan pronto?',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cuándo van a hacer la mudanza los del tercero?',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Lentejas? Ni de coña, yo no como.',
      static::FIELD_CHARACTERS_ID => [$nataliaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Tú te sientas. Pues no lo sé, no he hablao con ellos.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Acuérdate cómo nos dejaron el portal y la escalera los que se marcharon.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Jum. Natalia, ¿quieres dejar el móvil mientras estás comiendo?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Si es que no estoy comiendo, papá.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'En casa de Dani siempre comen a las tres...',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Luego bajo y hablo con Emilio, para que me avise en cuanto llegue la mudanza.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Es que si van a empezar a torearte desde el principio...',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ah, no, no. A mí no me torea nadie. Natalia...',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Papá, que te está toreando.',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Quieres dejar de jugar con el pan?',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Lo importante de los nuevos es que sean unas personas respetables, educadas y buenos vecinos. Como nosotros.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Y a Dani siempre le ponen pizza...',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Te quieres callar ya?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Natalia...',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 14 del capitulo 1x01
   */
  public function getEvents_1x01_14($scene_id)
  {
    $this->command->info('Seeding scene 14');

    $events = [];

    $aliciaId = $this->characters['alicia-sanz'];
    $belenId = $this->characters['belen-lopez'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Buenos díaaaas. ¿Has visto qué bueno hace? ME voy a preparar algo que tengo un hambre...',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Pero por qué siempre te levantas de buen humor?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hace bueno, he dormido bien, pff... estoy contenta. Hoy es uno de esos día que me siento feliz.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pareces un anuncio de compresas.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Además, esta noche tenemos plaaaan.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Alicia, ¿no crees que en vez de salir a buscar tíos deberíamos salir a buscar trabajo?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Raúl te va a traer un amigo que te vas a caer de culo cuando lo veas: deportista, 1.90, 35... y encima es médico.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Si no me gusta por lo menos me puede recetar algo para la resaca.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 15 del capitulo 1x01
   */
  public function getEvents_1x01_15($scene_id)
  {
    $this->command->info('Seeding scene 15');

    $events = [];

    $emilioId = $this->characters['emilio-delgado'];
    $mozoMudanza1Id = $this->characters['mozo-mudanza-1'];
    $mozoMudanza2Id = $this->characters['mozo-mudanza-2'];
    $juanCuestaId = $this->characters['juan-cuesta'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Que no cabe, que no coge, que no entra al ascensor por ahí te estoy diciendo, coño, el sofá...!',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'A ver, tira tú un poquito de arriba...',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza1Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya, ya, ya, si le estoy dando. Lo que pasa es que esto pesa más que el Cristo del Gran Poder, hombre.',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza1Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Cuidado, para un día que friego... mudanza. Oye tú, la propaganda en los buzones, ¿eh? Ya verás el día que te coja, asqueroso.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eh, eh, eh, un momento, un momento, un momento...',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hombre, hombre, hombre...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Soy Juan Cuesta, presidente de la comunidad, ¿qué pasa aquí?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hombre, señor Juan, que se lo estoy diciendo. Que por ahí no entra, que por ahí no entra, y están pom, pom, pom, pom... hasta que rompan el asce... el ascensor.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Les comunico que está terminantemente prohibido utilizar el ascensor como montacargas, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, si es para subir el sofá...',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza1Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero bueno, no... no pueden subir el sofá por ahí. Según los estatutos de la comunidad...',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, bueno, vale, vale.',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Subimos por las escaleras y ya está.',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cómo?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No se preocupe.',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cómo?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero ¿qué dice de escalera? No pueden subir por las escaleras, que nos desconchan toda la pared, hombre.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Y la barandilla, y, y, y... los escalones de madera.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Esto hay que subirlo con grúa, está clarísimo.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Efectivamente.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero si es que no nos hemos traído la grúa porque el cliente nos ha dicho que no hacía falta.',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza1Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, pues hace falta.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Pues que piense el cliente! Que, ah, um... ¡aquí una grúa!',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ala, hagan el favor de subir todo esto al camión otra vez.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'El tío tocapelotas éste, ¿quién es, ome?',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Soy Juan Cuesta, presidente de la comunidad! ¿No oye usted o qué le pasa?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Presidente del gobierno es usted.',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eh, eh, eh, eh, eh, eh, eh...',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Que le ha insultado, que le ha insultado!',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 16 del capitulo 1x01
   */
  public function getEvents_1x01_16($scene_id)
  {
    $this->command->info('Seeding scene 16');

    $events = [];

    $conchaId = $this->characters['concha'];
    $belenId = $this->characters['belen-lopez'];
    $aliciaId = $this->characters['alicia-sanz'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Soy yo, Concha!',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No... Concha no, por Dios...',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Uy, desde luego... ¡cómo me tenéis esto!',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Buenos días, doña Concha!',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola...',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cómo usted por aquí?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya ves, vengo para que me deis el alquiler, que me lo tenías que haber dado anoche. Un momento... ¡aquí huele a hombre! Sabéis que tenéis prohibido subir hombres a casa.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Doña Concha, si usted sabe que nunca subimos a nadie.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Uy, no. Nunca, nunca...',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No...',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'A mí no me engañáis. Venga... el alquiler.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Tome, y acuérdese de que la lavadora no centrifuga.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Para lo que la usáis... Siempre me dais billetes pequeños, para equivocarme.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Noooo.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, por Dios. Cuéntelo.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Claro que lo voy a contar, pero en mi casa. Y limpiad esto, ¡guarras!',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hasta luego, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Adiós, monada.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Adiós... Ay, esperemos que no lo cuente: ayer cogí 50 euros para las copas...',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ah, muy bien...',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 17 del capitulo 1x01
   */
  public function getEvents_1x01_17($scene_id)
  {
    $this->command->info('Seeding scene 17');

    $events = [];

    $mozoMudanza1Id = $this->characters['mozo-mudanza-1'];
    $mozoMudanza2Id = $this->characters['mozo-mudanza-2'];
    $juanCuestaId = $this->characters['juan-cuesta'];
    $emilioId = $this->characters['emilio-delgado'];
    $pacoId = $this->characters['paco'];
    $aliciaId = $this->characters['alicia-sanz'];
    $marisaId = $this->characters['marisa-benito'];
    $belenId = $this->characters['belen-lopez'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Aquí se va a quedar! ¡Aquí se va a quedar el sofá! ¡Vamos a por las cajas, hombre!',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza1Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Aquí no se puede quedar el sofá! ¡Sáquenlo de aquí ahora mi...! ¿Pero qué hacen con las cajas? Que he dicho que no toquen...',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola. ¿Eres el portero?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, es que me gusta fregar portales.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Ji? Joe, qué raro eres, tío.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues claro que soy el portero. ¿Qué quieres?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ah, ¿qué pasa? Soy Paco, el nuevo dependiente del videoclub, pero es que me aburro, macho. Bueno, ¿qué te cuentas?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Paco, como me pises ahí te mato.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eh, eh. Vale. En realidad soy director de cine, ¿sabes? Este curro es temporal.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Claro, claro. Yo era modelo de Calvin Klein, pero me cansé de enseñar el culo.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Que no, hombre! ¡Que no, que no y que no! Además, todo nuevo inquilino tiene la obligación de indicar a la comunidad la fecha y hora exactas de la mudanza, así como cualquier otra incidencia reseñable. Y no han dicho nada, así que esto va al camión otra vez, hagan el favor.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mira, como no se calle le voy a meter una hostia al pokemon éste...',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza1Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué me ha llamado?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mira...',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza1Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, no. Tranquilo, tranquilo, sí, sí, eh... compañero, déjate de disgustos.',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Chulito, el compañero es chulito, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Déjate de disgustos...',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '... déjate de disgustos...',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No me caliente...',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza1Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '... que hay que comer, que es la hora de comer...',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cómo comer?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '... y hay que echarle gasolina al motor, ¿en?',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cómo comer?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vámonos, esta tarde rematamos la faena.',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Esto, esto no se puede quedar aquí.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Enga ya, ome...',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ala, vamos',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oiga, pero oiga.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no. Sí, venga.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Los sábados por la tarde no trabajamos, ¿no?',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza1Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Aligera que es arroz, chiquillo. Tira.',
      static::FIELD_CHARACTERS_ID => [$mozoMudanza2Id],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oiga.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, hombre.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero ¿dónde van?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que tenéis mu poca vergüenza.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Dónde van? Esto no se puede quedar aquí, hombre. Emilio, hazte con esto y organízalo un poco porque es una vergüenza, hombre. Ah, y me avisas en cuanto vuelvan, ¿eh? Estos no saben quién soy yo.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ea, ahora me como yo el marrón de las cajitas. Yo este trabajo lo dejo, yo este trabajo lo dejo porque estoy hasta las narices. Anda, mira: ésta está abierta. Ahí va, un sin cable de éstos. Esto me lo quedo yo.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero, pero, pero tío, ¿qué haces? ¿Se lo vas a mangar?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, yo no. Esto lo han perdido los de la mudanza.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Qué hijos de puta, macho.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya te digo...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues yo me llevo esto.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero y esto ¿para qué? si es una foto de la muchacha ésta.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Así parece que tengo novia.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'AAhhhh jaja. Es verdad. Oye, ¿y habrá una foto aquí de la tía ésta en topless?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No sé, mira a ver...',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Aquí no hay otra cosa más que libros.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Buenos días...',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Macho, ¿quién es ésa?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ésa... una diosa, una portada del Interviú en movimiento, un fenóme... yo no sé lo que es, pero me pone muy malo a mí...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Se puede saber qué miras?',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eh, doña Marisa, ¿podría pisar usted flojito? Es que estoy fregando.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues ya era hora.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eh, ¿qué tal todo?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y a ti qué te importa?',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'También es verdad.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vaya por Dios, y encima sin ascensor. Pues sí que llevas bien tú el rollo del portal. Voy a hablar con el presidente, guapo, que te va a poner un estanco.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿A mí un estanco?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿para qué?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'para que fumes.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Macho, está buenísima. ¿Vive sola?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Ésta? No, qué va: con la hermana.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No hombre, no, la de... joe, la de la minifalda.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ah, no, ésta no. Ésta vive con Belén, la típica amiga fea que, com no se come una rosca, pues está todo el día amargada y no sé qué... Belén, Belén la... otra Belén, que no es esta Belén que te estaba yo... ¿Qué tal, Belén? ¿Cómo estamos?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Genial... si no hay nada como un buen piropo para alegrarle a una el día, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Claro, que...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Imbécil! Quita, hombre.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Macho, tú... ¿tú llevas mucho trabajando aquí?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '7 años.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Milagroso.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues sí.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 18 del capitulo 1x01
   */
  public function getEvents_1x01_18($scene_id)
  {
    $this->command->info('Seeding scene 18');

    $events = [];

    $robertoId = $this->characters['roberto-alonso'];
    $luciaId = $this->characters['lucia-alvarez'];
    $palomaId = $this->characters['paloma-hurtado'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Cariño, yo creo que eso no sale: es el dibujo de la baldosa.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Tú ya has terminado?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, he terminado hasta los huevos. ¿Por qué no vamos a comer algo?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué dices? ¿Y si vienen los de la mudanza?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ostras, la mudanza... Fff, se me había olvidado. Oye, yo casi prefiero que no vengan.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Se puede saber qué te pasa? Llevas todo el día negativo.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, es sólo que tengo hambre. Pero no te preocupes, que mojo la balleta en Fairy y se me pasa.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, es que parece que no te hace ilusión venir a vivir juntos.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, claro que me hace ilusión, pero es que esto es una mierda.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, que yo también vivía muy bien con mis padres.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Entonces por qué les has dicho a tu padre que te compre este piso?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues porque antes de casarnos tendremos que comprobar si somos compatibles.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Antes ¿de qué?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, mira. Me voy a comprar algo para comer...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Y yo me voy a dar un baño. ¿Tenemos gel?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, tenemos Fairy.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Hola! ¿Qué tal?',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cómo va la mudanza?',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bien, bien, bien, muchas gracias.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Aahh, y ¿a dónde vas?',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eehh, a comprar unas cosas que nos hacen falta.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿A estas horas? No. Pasa, mujer, que yo tengo de todo.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, no, muchísimas gracias, que así me da un poquito el aire.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No. Pasa, mujer, y así te enseño la casa.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, de verdad, si...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga tonta, si lo estás deseando. Anda, pasa para dentro.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero sólo me quedo un ratito, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, siéntate en este sofá, que es de cuero. Bueno, pues estoy encantada de que estés aquí.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 19 del capitulo 1x01
   */
  public function getEvents_1x01_19($scene_id)
  {
    $this->command->info('Seeding scene 19');

    $events = [];

    $emilioId = $this->characters['emilio-delgado'];
    $pacoId = $this->characters['paco'];
    $santiagoSeguraId = $this->characters['santiago-segura'];
    $josemiId = $this->characters['jose-miguel-cuesta'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Toma.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Tío, ¿me vas a pagar unas pipas con un billete de 50 euros?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno venga, unas pipas y un chupa-chup.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Anda, voy a por cambio. Vigílame esto un poquito, anda.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye pero date prisa que yo tengo muchas cosas que hacer, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola, buenas tardes, ¿cómo estamos?',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Coño! Pero bueno... pero tú eres el Parlita.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no. Creo que te confundes.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que sí, coño, que tú has hecho conmigo la mili en Cáceres. Yo soy Emilio, el de Córdoba, el que estuvo...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, si es que no es posible porque yo no he hecho la mili: yo soy insumiso. Nunca he hecho la mili, esto...',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mira, Parlita, yo sé que tuvimos un par de altercados allí en el cuartel pero coño, pero todo se olvida en la vida. Vamos a perdonarnos, ¿no?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya sé lo que pasa, te sueno de algo y yo creo que es de las películas.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, Parlita, me da un poco de pena porque te olvidas de las viejas amistades pero no sé, a ver, ¿en qué te puedo ayudar?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hombre, si fueras tan amable, estoy buscando una película de Robert Aldrich: El emperador del norte.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hombre, pues si es guarra yo te la encuentro. Un momento.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues hombre, están sucios todo el rato pero no, no es muy guarra, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ahí va: Santiago Segura. Oye, tú, ¿dónde está Paco, que le traigo una peli?',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Espérate un momento, coño, niño con las prisas.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye.',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Torrente 2 más flojita que la primera, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Je, je, qué salado. Vamos a ver, niño, ¿no te ha dicho tu madre que, que si al hablar no has de agradar, es mejor callar?',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Sabes que Mortadelo y Filemón te superó en taquilla?',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ja, ja, ja, ja. Qué dato tan interesante, estaba deseando saber algo así. De todas formas, querido pequeño te debo decir que, que me ha superado en taquilla porque las entradas valen más caras... por esta cosa del euro. Realmente, en espectadores, Torrente 2 sigue siendo la primera.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Creo que te equivocas porque en espectadores... la mejor es la de Los otros.',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero es que esa se rodó en inglés, entonces no, no cuenta. No vale. En todo caso ellos tenían a Nicole Kidman y, ¿yo qué tenía? A Gabino Diego. Eh, ¿vas a estar aquí mucho rato, niño? Igual estaría bien que te dieras una vuelta, ¿no? y te airearas un poco ese cerebrillo que tienes.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo no encuentro cambio por ningún laodo, macho. Coño, ¡Santiago Segura!',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué tal?',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué pasa, tío?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cómo estamos, qué tal?',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué pasa, que este tío es famoso o qué?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mogollón.',
      static::FIELD_CHARACTERS_ID => [$josemiId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Sí?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Sabes qué? Como no podéis ayudarme, igual me voy y vuelvo otro día.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, no.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, qué te iba a decir, Parlita, ¿tú no me podrías presentar a mí a la Belén Esteban, que me gusta a mí?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Claro, claro. Yo, como soy famoso, conozco a todos los famosos: a Belén Esteban, a la Campanario, a Rocío Jurado... a todos. Y te la voy a presentar porque, ¿cuándo te ha fallado a ti el Parlita, eh?',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Tú ves, Parlita, como eres tú?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Claro, hombre.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Cago en mi hermana, si...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y del teniente Linares, te acuerdas? La de garitas que nos hemos chupado juntos, esas guardias, ja, ja, ja.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Si tú a mí no me engañabas...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Espérate, macho, es que soy director de cine yo también.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Éramos pocos y parió la abuela.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Tío, que te voy a enseñar mis cortos, ¿vale?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Sí? ¿Es necesario?',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, sí. Son muy buenos.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga. Aquí te espero, venga.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Vale!',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No me muevo.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Parlita, yo no me acuerdo del teniente Linares.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Dile que los mande aquí los cortos, venga. Adiós, niño, muy simpático, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, que no se te olvide lo de la Belén, por favor.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, sí.',
      static::FIELD_CHARACTERS_ID => [$santiagoSeguraId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Parlita, campeón! Qué grande has sido siempre.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Dónde está? ¿Se ha ido?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, tenía prisa. Toma, que lo llames aquí.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ahí va.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, ¿cómo me habías dicho que se llamaba este hombre?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eehh... coño, Santiago Segura.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, éstes es el Parlita, lo que pasa es que se ha hecho famoso y se ha cambiado de nombre, como todos los famosos. Venga, dame las pipas, anda.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 20 del capitulo 1x01
   */
  public function getEvents_1x01_20($scene_id)
  {
    $this->command->info('Seeding scene 20');

    $events = [];

    return $events;
  }

  /**
   * Eventos de la escena 21 del capitulo 1x01
   */
  public function getEvents_1x01_21($scene_id)
  {
    $this->command->info('Seeding scene 21');

    $events = [];

    $marianoId = $this->characters['mariano-delgado'];
    $emilioId = $this->characters['emilio-delgado'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, niño. Decídete ya que todavía me quedan 4 portales.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Fff, si es que no sé. Oye, ¿y éste del afinador de pianos de qué trata?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues de un señor que afina pianos.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya, bueno, pero ¿y qué le pasa? Porque tendrá una vida este hombre, ¿no? O...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues no lo sé, léetelo y te enteras.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, y ¿qué otras ofertas tienes este mes? Porque...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Una colección de vídeo de Jackie Chan y Ufito el dinosaurio.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Uff, pues ahora ya sí que me lo has puesto difícil del todo.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero vamos a ver, ¿te has leído ya lo del mes pasado?',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Qué va, si es que a mí esto de leer me da mucha pereza.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Y entonces, ¿para qué te haces socio del círculo?',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues por hacerte un favor. Oye papá, a mí no me toques las narices porque me borro ahora mismo.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, a tu padre no le amenaces, ¿eh? Haz el favor. Vamos a hacer una cosa: te voy a dejar el catálogo, lo miras, te lo piensas y mañana me paso otra vez.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, bueno.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Vale?',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí. Perdóname, papá, que es que estoy muy tenso con...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, vale ya con los besos. Y dice tu madre que a ver cuándo la llamas, desgraciado.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Es verdad que la tengo que llamar, es verdad que la tengo que llamar. Oye, no le des mucho la brasa a los vecinos que después me cae a mí el marrón.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 22 del capitulo 1x01
   */
  public function getEvents_1x01_22($scene_id)
  {
    $this->command->info('Seeding scene 22');

    $events = [];

    $daniId = $this->characters['dani-rubio'];
    $armandoId = $this->characters['armando'];
    $conchaId = $this->characters['concha'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No llegues tarde, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$daniId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Y pórtate bien con los demás niños.',
      static::FIELD_CHARACTERS_ID => [$daniId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, déjate de cachondeo. Mamá, me voy.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Pero vas a salir otra vez, hijo?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'De cachondeo.',
      static::FIELD_CHARACTERS_ID => [$daniId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Pero tú cuándo duermes?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'En la oficina. ¿Lo ves? Ya llego tarde, me va a matar.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Con quién has quedado?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Con una amiga.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No me gusta.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'A mí tampoco, pero es... es que me ha fallado la otra.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Está claro que yo sobro en esta casa.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 23 del capitulo 1x01
   */
  public function getEvents_1x01_23($scene_id)
  {
    $this->command->info('Seeding scene 23');

    $events = [];

    $robertoId = $this->characters['roberto-alonso'];
    $marianoId = $this->characters['mariano-delgado'];
    $belenId = $this->characters['belen-lopez'];
    $aliciaId = $this->characters['alicia-sanz'];
    $emilioId = $this->characters['emilio-delgado'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Joder... la mudanza...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola. Usted no es Ciriaco Cánovas.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues no. ¿Y usted?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Evidentemente yo tampoco.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, ya. Quiero decir que, ¿quién es usted?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Del círculo de lectores. Venía a traerle el pedido de este mes.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ah, pues el tal Ciriaco ese debe haberse mudado porque nosotros acabamos de comprar esta casa.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya, ya, y a usted no le interesará hacerse del círculo, claro...',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hombre, pues, no lo sé. ¿No le importa que me lo piense con algo más de ropa puesta?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, por Dios. Ya vuelvo otro día. Ahora a buscar a Ciriaco, que vete a saber dónde se ha metido.',
      static::FIELD_CHARACTERS_ID => [$marianoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, coño. No me lo puedo creer. Fff...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Alicia! Alicia, dáte prisa que es la primera vez en 2 años que me espera un tío. ¡Alicia!',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, mujer.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Te gustan estos zapatos?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, te hacen muy alta pero no hay tiempo.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola. ¿Qué tal?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Esto es una señal, ¿eh? La noche promete.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Soy el nuevo vecino.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ah, y ¿qué intentas, que te hagan presidente de la comunidad?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo te voto.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no, vamos a ver, es que se me ha cerrado la puerta ahora mismo y no llevo llaves encima. Estaba dándome un baño y...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y...?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '... y me he dejado el grifo abierto.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, todos tenemos problemas, ¿eh? Hasta luego.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, ¿quieres pasar y llamas o algo?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Eh?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Tú en cuanto ves un tío en pelotas, ¿te lo quieres meter en casa?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, encantada. Suerte.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hasta luego, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hombre, ¿qué pasa, golfillas? ¿Qué vais, de cacería?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Te está buscando un chico que sólo lleva una toalla.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿A mí? Imposible. Se ha equivocado usted, señorita Alicia. Vamos para abajo, ¿no?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Qué bien vivimos, ¿eh? Todo el día de cachondeo, para arriba, para abajo...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Es que Belén tiene una cita.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Cómo? Anda, coño: un milagro.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Tú para qué le cuentas nada a este imbécil?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué pasa? ¿Por qué se ha parado?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vaya, hombre, ha vuelto a estropearse el ascensor.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Pero qué dices? Si te he visto ahí dándole al stop.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que no, que se ha parado sólo.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero tío, tú, tú estás mal de la cabeza, que te he visto ahí dándole al stop.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Belén. Belén, tranquila.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero que le he visto.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo no le he visto hacer nada.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Éste lo que quiere es fastidiarme la cita.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que sí, hombre, que sí. Que yo lo que quería era gastarle una broma aquí a la truñaca ésta.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ja... ja...ja... ja...',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No tiene gracia, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero que ya vamos para abajo, señorita Alicia.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y ahora qué pasa?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues... que no baja.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, conmigo bromitas no, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que no son bromitas, que se lo juro, señorita Belén. Que es que esto no bajo, me cago en la madre que me parió que se ha roto el ascensor.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿A qué hora habíamos quedado?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hace 10 minutos.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Perfecto... perfecto.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 24 del capitulo 1x01
   */
  public function getEvents_1x01_24($scene_id)
  {
    $this->command->info('Seeding scene 24');

    $events = [];

    $conchaId = $this->characters['concha'];
    $daniId = $this->characters['dani-rubio'];
    $robertoId = $this->characters['roberto-alonso'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Me voy a la partida.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Adiós, abuela',
      static::FIELD_CHARACTERS_ID => [$daniId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mierda...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Quién anda ahí? Uy...',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Lucía... buah.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 25 del capitulo 1x01
   */
  public function getEvents_1x01_25($scene_id)
  {
    $this->command->info('Seeding scene 25');

    $events = [];

    $conchaId = $this->characters['concha'];
    $marisaId = $this->characters['marisa-benito'];
    $vicentaId = $this->characters['vicenta-benito'];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vicenta, aquí está Concha. Venga.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya estoy aquí para el vicio. ¿Esta toalla es tuya? Me la he encontrado tirada en la escalera.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'A ver... sí, sí, es mía, es mía. Venga, copazo al cuerpo, tía. Ala, vamos a empezar ya.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Espérate un momento. Ché, no empecéis sin mí. Enseguida vuelvo, voy a dar estas llaves a Emilio.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y qué llaves son ésas?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'De los vecinos de enfrente. Se han ido de fin de semana y, como no le han encontrado, me las han dado a mí. Vuelvo enseguida.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eh, un momentito. ¿No te apetece salir de dudas?',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿De qué?',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'De si los vecinos son gays o no.',
      static::FIELD_CHARACTERS_ID => [$marisaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ahhhhhh',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, venga. Vamos a echar un vistazo.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Estáis locas? ¿Pero vais a meteros a cotillear en una casa que no es vuestra? Ahhhhh.... voy con vosotras.',
      static::FIELD_CHARACTERS_ID => [$vicentaId],
    ];

    return $events;
  }
}
