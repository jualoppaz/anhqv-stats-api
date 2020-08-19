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
    $scenesTableSeeder1x01 = new ScenesTableSeeder1x01();
    $scenes_1x01 = $scenesTableSeeder1x01->getScenes_1x01();

    $scenesTableSeeder1x02 = new ScenesTableSeeder1x02();
    $scenes_1x02 = $scenesTableSeeder1x02->getScenes_1x02();

    $res = array_merge(
      $scenes_1x01, $scenes_1x02,
    );

    return $res;
  }
}
