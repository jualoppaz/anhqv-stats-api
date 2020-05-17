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

    $res = array_merge(
      $events_1x01_01, $events_1x01_02, $events_1x01_03, $events_1x01_04,
      $events_1x01_05, $events_1x01_06, $events_1x01_07, $events_1x01_08,
      $events_1x01_09, $events_1x01_10, $events_1x01_11, $events_1x01_12,
      $events_1x01_13,
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
      static::FIELD_TEXT => 'Normal, soltera to\' tu vida...',
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
      static::FIELD_TEXT => 'No necesito a un hombre a para vivir, no como tú:  que desde que te dejó Manolo estás amargada.',
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
      static::FIELD_TEXT => 'Pues mira, porque yo ya no estoy pa\' estas cosas, Alicia, que tengo casi 30 años y no tengo piso, no tengo casa, no tengo coche... es que no tengo nada. ¿Hasta cuándo vamos a seguir comportándonos como si tuviéramos dieciséis años, eh?',
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
      static::FIELD_TEXT => '¿40 minutos? Suficiendo pa\' estrellarse.',
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
      static::FIELD_TEXT => 'Sí, hombre, claro que sí. Perdónenme ustedes, pero es que he venido a arreglar aquí unos enchufes y ma\' dao un mareo... yo no sé qué...',
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
}
