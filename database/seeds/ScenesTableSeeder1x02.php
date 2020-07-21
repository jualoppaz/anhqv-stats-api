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

    return $scenes;
  }
}
