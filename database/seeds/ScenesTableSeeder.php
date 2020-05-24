<?php

use Illuminate\Database\Seeder;

class ScenesTableSeeder extends Seeder
{

  const TABLE_NAME = 'scenes';
  const FIELD_IMAGE_URL = 'image_url';
  const FIELD_IMAGE_ALT = 'image_alt';
  const FIELD_CHAPTER_ID = 'chapter_id';
  const FIELD_TITLE = 'title';
  const FIELD_ORDER = 'order';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $scenes = $this->getScenes();

    foreach ($scenes as $scene) {
      DB::table(static::TABLE_NAME)->insert([
        static::FIELD_IMAGE_URL => $scene[static::FIELD_IMAGE_URL],
        static::FIELD_IMAGE_ALT => $scene[static::FIELD_IMAGE_ALT],
        static::FIELD_CHAPTER_ID => $scene[static::FIELD_CHAPTER_ID],
        static::FIELD_TITLE => $scene[static::FIELD_TITLE],
        static::FIELD_ORDER => $scene[static::FIELD_ORDER],
      ]);
    }
  }

  public function getScenes()
  {
    $first_season = $this->getScenes_firstSeason();

    $res = array_merge(
      $first_season
    );

    return $res;
  }

  public function getScenes_firstSeason()
  {
    $scenes_1x01 = $this->getScenes_1x01();

    $res = array_merge(
      $scenes_1x01
    );

    return $res;
  }

  /**
   * Escenas del capítulo 1x01
   */
  public function getScenes_1x01()
  {
    $scenes = [];

    $chapter_1x01 = DB::table('chapters')->whereNaturalId('1x01')->first()->id;

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Marisa y Vicenta ven la tele',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Los Cuesta esperan a Natalia',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Belén y Alicia salen a tomar algo',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Armando discute con su mujer por la custodia de su hijo',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_TITLE => 'Mauri y Fernando valoran cómo viajar hasta Ibiza',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Natalia llega tarde a casa',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto y Lucía llegan a Desengaño 21',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Vicenta les da a Roberto y Lucía las llaves de su piso',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto y Lucía conocen a Marisa, MAuri y Fernando',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto y Lucía conocen a los Cuesta y a Concha',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto y Lucía llegan a su piso',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto y Lucía conocen a Emilio',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'La familia Cuesta come y Natalia no para con el móvil',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Belén y Alicia se despiertan... a mediodía',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'La mudanza de Roberto y lucía se complica',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Doña Concha se cuela en el piso de Alicia y Belén para cobrarles el alquiler',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Los mozos de la mudanza de Roberto y Lucía se marchan sin terminar su trabajo',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto y Lucía comienzan con la limpieza de su nuevo piso',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Emilio se reencuentra con su amigo de la mili... el "Parlita"',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto intenta darse un baño',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'El padre de Emilio intenta vender libros en la Comunidad',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Armando vuelve a quedar con una mujer',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto consigue llenar la bañera pero llaman a la puerta',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto deambula desnudo por el rellano',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Concha visita a Marisa y Vicenta pero deciden colarse en el 1ºB',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto es pillado por Natalia',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Las "señoras" consiguen entrar en el 1ºB',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Paloma "engancha" a Lucía para saber más sobre ella',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Las "señoras" rebuscan en el 1ºB',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'La bañera del 3ºA se desborda',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Paloma continúa con su interrogatorio a Lucía',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Las "señoras" simulan un robo en el 1ºB',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Juan Cuesta conoce a Paco en el videoclub',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Lucía ve una gotera en el 2ºB y consigue escabullirse de Paloma',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Lucía vuelve a su piso pero Roberto no le abre',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto sigue deambulando desnudo por la comunidad',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Emilio, Alicia y Belén continúan encerrados en el ascensor',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Emilio, Alicia y Belén continúan encerrados en el ascensor',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Juan Cuesta intenta derribar la puerta del 3ºA',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto consigue algo de "ropa" en el patio',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Mauri y Fernando se quedan sin vacaciones',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Mauri y Fernando descubren a los "ladrones"',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Los vecinos descubren que Roberto no estaba en el 3ºA',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'A Armando se le fastidia la "noche"',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Mauri insiste a Fernando para salir del armario públicamente',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Vicenta habla con su hermana sobre su primera "experiencia sexual"',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Roberto y Lucía hacen balance del día',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Juan Cuesta y Paloma critican a los nuevos',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x01,
      static::FIELD_TITLE => 'Emilio, Alicia y Belén acaban jugando al veo veo en el ascensor',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    return $scenes;
  }
}
