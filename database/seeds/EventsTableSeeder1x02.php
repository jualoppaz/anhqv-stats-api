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

  public function __construct($characters)
  {
    $this->characters = $characters;
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
    $events_1x02_02 = $this->getEvents_1x02_02($scenes_1x02[$index++]);
    $events_1x02_03 = $this->getEvents_1x02_03($scenes_1x02[$index++]);
    $events_1x02_04 = $this->getEvents_1x02_04($scenes_1x02[$index++]);
    $events_1x02_05 = $this->getEvents_1x02_05($scenes_1x02[$index++]);

    $res = array_merge(
      $events_1x02_01, $events_1x02_02, $events_1x02_03, $events_1x02_04,
      $events_1x02_05,
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

  /**
   * Eventos de la escena 2 del capitulo 1x02
   */
  public function getEvents_1x02_02($scene_id)
  {
    $palomaId = $this->characters['paloma-hurtado'];
    $conchaId = $this->characters['concha'];
    $armandoId = $this->characters['armando'];
    $juanCuestaId = $this->characters['juan-cuesta'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Señora, yo lo único que le digo es que no me ocupe toda la cuerda.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Es que a mí me hace más falta. Tú tienes secadora, que la veo yo desde aquí.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, si lo que usted no vea...',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oye, ¿me estás llamando cotilla?',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pues mira, esto... te lo tiro.',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Pero qué está haciendo? ¡Juan! ¡¡Juan!!',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Chivata. ¡Hijo!',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que conste que ha empezado usted, ¿eh? Mire.',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Oy, mi blusa. Si esa blusa hay que lavarla a mano...',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Mamá, ¿qué pasa?',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'La vecina, que me está tirando toda la ropa. No sé por qué me ha tomado una manía... Y tú, claro: como no me defiendes...',
      static::FIELD_CHARACTERS_ID => [$conchaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero ¿qué gritos son esos, Paloma?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Esta señora, que no está bien de la cabeza. Haz algo, Juan, porque yo no puedo vivir así. ¡Yo no puedo vivir así!',
      static::FIELD_CHARACTERS_ID => [$palomaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué hacemos?',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, hasta mañana.',
      static::FIELD_CHARACTERS_ID => [$armandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Buenas noches.',
      static::FIELD_CHARACTERS_ID => [$juanCuestaId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 3 del capitulo 1x02
   */
  public function getEvents_1x02_03($scene_id)
  {
    $belenId = $this->characters['belen-lopez'];
    $aliciaId = $this->characters['alicia-sanz'];
    $emilioId = $this->characters['emilio-delgado'];
    $fernandoId = $this->characters['fernando-navarro'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Unas rodajitas, o unas rodajitas de pepperoni...',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya, pero eso engorda muchísimo.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero hombre, un poquito de por favor. Pero ¿qué os cuesta limpiaros los pies al entrar? Si es solamente hacer un poco así, como Michael Jackson.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Que sí, Emilio. Que sí.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, "que sí" no. No paséis de mí: este portal es mío y aquí mando yo. Y si yo digo que aquí todo el mundo se limpia los pies, pues todo el mundo se los limpia y punto.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola, ¿qué tal?',
      static::FIELD_CHARACTERS_ID => [$fernandoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola, ¿qué tal?',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y a ése no le dices nada o qué?',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hombre, ese se me ha escapado: fíjate cómo va.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Está como muy bueno, ¿no?',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no. Ahora ya no me hagáis la pelota porque ya no sirve de nada.',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Cómo me gusta ese tío... No sé, tiene algo.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, novio. Y vive con él.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Y dale! Es que cada vez que ves un tío guapo tiene que ser gay.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Lamentablemente sí. Venga, pasa.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, yo voy por las escaleras que es bueno para el culo.',
      static::FIELD_CHARACTERS_ID => [$aliciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, espera que voy contigo.',
      static::FIELD_CHARACTERS_ID => [$belenId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eso, y ahora os dejáis la puerta del ascensor abierta. Si es que no tenéis arreglo. Aaaayyy...',
      static::FIELD_CHARACTERS_ID => [$emilioId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 4 del capitulo 1x02
   */
  public function getEvents_1x02_04($scene_id)
  {
    $nataliaId = $this->characters['natalia-cuesta'];
    $robertoId = $this->characters['roberto-alonso'];
    $pacoId = $this->characters['paco'];
    $luciaId = $this->characters['lucia-alvarez'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola.',
      static::FIELD_CHARACTERS_ID => [$nataliaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Hola... ¿Qué, alquilando una película?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, estoy haciendo tiempo, para llegar tarde a casa y fastidiar a mi padre.',
      static::FIELD_CHARACTERS_ID => [$nataliaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ah, muy bien.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué tal con tu novia?',
      static::FIELD_CHARACTERS_ID => [$nataliaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Eh? ¿Mi novia? Bien. Bien, muy bien.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Yo no te veo emocionalmente maduro para mantener una relación estable.',
      static::FIELD_CHARACTERS_ID => [$nataliaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Ah, no?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, creo que si te comprometes te acabarás arrepintiendo. Pero ya será demasiado tarde, habrás desaprovechado los mejores años de tu vida y te habrás convertido en el típico padre de familia, atrapado en la rutina. Jmmmjeje, qué triste, ¿no?',
      static::FIELD_CHARACTERS_ID => [$nataliaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya te digo.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Las edades de Lulú?',
      static::FIELD_CHARACTERS_ID => [$nataliaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Eh? ¿Qué Lulú? No... Estoy aquí con La Colmena.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Jmmmjeje. Bueno, me voy que son y veinte. Ya seguiremos hablando, ¿no?',
      static::FIELD_CHARACTERS_ID => [$nataliaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Cómo está la hija del presidente, ¿eh?',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ey, que yo tengo novia.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Y yo...',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Buenas... Bueno, ¿qué? Cariño, ¿has elegido ya?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Eehhh...',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Se lo está pensando...',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no. Yo ya he elegido, claro.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, que... te espero en casa.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ufff, claro que ésta también está muy buena.',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya, pero tiene novio.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Y yo...',
      static::FIELD_CHARACTERS_ID => [$pacoId],
    ];

    return $events;
  }

  /**
   * Eventos de la escena 5 del capitulo 1x02
   */
  public function getEvents_1x02_05($scene_id)
  {
    $robertoId = $this->characters['roberto-alonso'];
    $luciaId = $this->characters['lucia-alvarez'];
    $antonioId = $this->characters['antonio-el-capataz'];
    $obreroAfricanoId = $this->characters['obrero-africano'];
    $obreroMarroquiId = $this->characters['obrero-marroqui'];
    $obreroPolacoId = $this->characters['obrero-polaco'];

    $events = [];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Ya estamos aquí.',
      static::FIELD_CHARACTERS_ID => [$antonioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero bueno, ¡qué puntuales!',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Jajajajaja. A la hija del jefe lo que haga falta...',
      static::FIELD_CHARACTERS_ID => [$antonioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Muy bien...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Venga, ya podéis pasar el material. ¡Ala, cenutrio! ¡Que te vas a cargar la puerta, que vas como las vacas! Bueno, no te preocupes que eso luego te lo pinto yo.',
      static::FIELD_CHARACTERS_ID => [$antonioId],
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
      static::FIELD_TEXT => '¡Benito, la radial ahí al fondo! Sshh, ¡y ponedme los plásticos!',
      static::FIELD_CHARACTERS_ID => [$antonioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, a ver, ¿por dónde vas a empezar?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, pues... Lo primero, ese tabique fuera: desescombramos, quitamos gotelé, te pintamos esa pared bien lisita, levantamos el suelo y nos metemos con la cocina.',
      static::FIELD_CHARACTERS_ID => [$antonioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Y cuánto tiempo vas a tardar?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Jaja, pues... más deprisa que rápidamente.',
      static::FIELD_CHARACTERS_ID => [$antonioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Toma, así me gusta.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Perdón?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¡Antonio! Mira, perdona: él es Roberto.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Anda, chaval, que dentro de 10 días estrenas casa jajaja.',
      static::FIELD_CHARACTERS_ID => [$antonioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero, ¿podemos hablar un momentito?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí. ¡Oye, Antonio, no se te olvide lo de las molduras!',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, sí, hombre, si está pedido.',
      static::FIELD_CHARACTERS_ID => [$antonioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué es esto?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Antonio, el capataz...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No, no. ¿Que qué hace esta gente aquí, qué pasa?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'La reforma...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Qué reforma?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Pero no te acuerdas que te lo he dicho?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'No.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Aaayyyy... Son de la constructora de mi padre, nos han hecho un hueco. ¿Tú sabes la suerte que tenemos?',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Pero espera, espera, un momento. ¿Seguro que tú y yo hemos hablado de esto?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Seguro. Es que nunca me escuchas cuando te hablo. Bueno, yo me voy. Cualquier cosa que necesitéis se lo pedís a Roberto.',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Espera, espera, si bajo contigo: tengo que ir al almacén a por un material. Ya os dejo con ésos ahí dale que te pego.',
      static::FIELD_CHARACTERS_ID => [$antonioId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, cariño. Adiós, ¿vale? Luego te llamo y ya me cuentas, ¿eh? Suerte...',
      static::FIELD_CHARACTERS_ID => [$luciaId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Bueno, eh... ¿ustedes saben lo que tienen que hacer?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, sí, sí, sí...',
      static::FIELD_CHARACTERS_ID => [
        $obreroAfricanoId, $obreroMarroquiId, $obreroPolacoId
      ],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Vale. ¿Hasta qué hora van a estar más o menos?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, sí, sí, sí...',
      static::FIELD_CHARACTERS_ID => [
        $obreroAfricanoId, $obreroMarroquiId, $obreroPolacoId
      ],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => '¿Hablan ustedes castellano?',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, sí, sí, sí...',
      static::FIELD_CHARACTERS_ID => [
        $obreroAfricanoId, $obreroMarroquiId, $obreroPolacoId
      ],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Esto va a estar divertido.',
      static::FIELD_CHARACTERS_ID => [$robertoId],
    ];

    $events[] = [
      static::FIELD_SCENE_ID => $scene_id,
      static::FIELD_ORDER => count($events) + 1,
      static::FIELD_TYPE => static::VALUE_DIALOG,
      static::FIELD_TEXT => 'Sí, sí, sí, sí...',
      static::FIELD_CHARACTERS_ID => [
        $obreroAfricanoId, $obreroMarroquiId, $obreroPolacoId
      ],
    ];

    return $events;
  }
}
