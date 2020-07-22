<?php

class ScenesTableSeeder1x02
{

  const TABLE_NAME = 'scenes';
  const FIELD_IMAGE_URL = 'image_url';
  const FIELD_IMAGE_ALT = 'image_alt';
  const FIELD_CHAPTER_ID = 'chapter_id';
  const FIELD_TITLE = 'title';
  const FIELD_ORDER = 'order';

  public function __construct()
  {

  }

  /**
   * Escenas del capítulo 1x02
   */
  public function getScenes_1x02()
  {
    $scenes = [];

    $chapter_1x02 = DB::table('chapters')->whereNaturalId('1x02')->first()->id;

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Marisa y Vicenta se preparan para la capea',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Paloma y Concha discuten por el uso del tendedero',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Emilio pone firmes a Alicia y Belén',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Natalia flirtea con Roberto',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Los albañiles llegan al 3ºA',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Los Cuesta oyen el inicio de las obras',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Juan Cuesta para la obra del 3ºA',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => '"Las señoras" vuelven de la capea',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => '"Las señoras" descubren que han entrado en el 1ªA',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Alicia se obsesiona con Fernando',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Alicia y Belén piden sal en el 1ºB',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Marisa y Vicenta se plantean poner una alarma',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Lucía descubre que la obra está detenida',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Lucía pide explicaciones a Juan Cuesta',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Vicenta no consigue conciliar el sueño',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Mauri se despierta por culpa de los obreros',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Concha es sorprendida por escombros de la obra mientras tiende',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Los cuesta desayunan entre porrazos',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Belén no consigue dormir',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Emilio abronca a un albañil por ensuciarle el portal',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Los vecinos se quejan de la reforma',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Alicia y Belén hurgan en el buzón del 1ºB',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => '"El calvo que habla rápido" explica el uso de la alarma',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Paloma insta a Juan Cuesta a volver a detener la obra',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Marisa y Vicenta ponen la alarma por primera vez',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Juan Cuesta avisa a Emilio para que suba al 1ºA',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Marisa le da las instrucciones de la alarma a Vicenta',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Fernando se levanta para ver qué sucede',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Fernando consigue apagar la alarma',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Juan Cuesta y Emilio suben al 3ºA para quejarse de las obras',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Juan Cuesta y Emilio trasladan sus quejas a Roberto y Lucía',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Emilio anuncia nueva junta con motivo de la obra del 3ºA',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Alicia y Belén proponen a Fernando quedar para tomar algo',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Mauri se pone celoso por Alicia',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Roberto y Lucía charlan sobre las quejas vecinales',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Fernando vuelve a desactivar la alarma del 1ºA',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Alicia y Belén llegan al 1ºB',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Mauri se marcha de la junta',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Mauri reflexiona sobre la decisión de volver a su piso',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Mauri regresa al 1ºB',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Juan Cuesta se prepara para la junta',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Los vecinos deciden permitir la obra',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Mauri y Belén van a por hielo',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Mauri y Belén llaman al 1ºA',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Marisa se cansa de la alarma',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Fernando y Alicia se van a dormir... pero la fiesta sigue',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Juan Cuesta reflexiona sobre lo acontecido en la junta',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Marisa y Vicenta hablan sobre la alarma',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Alicia le da la tabarra a Belén con Fernando',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    $scenes[] = [
      static::FIELD_IMAGE_URL => '',
      static::FIELD_IMAGE_ALT => '',
      static::FIELD_CHAPTER_ID => $chapter_1x02,
      static::FIELD_TITLE => 'Emilio sugiere a Paco darle "vida" al videoclub',
      static::FIELD_ORDER => count($scenes) + 1,
    ];

    return $scenes;
  }
}
