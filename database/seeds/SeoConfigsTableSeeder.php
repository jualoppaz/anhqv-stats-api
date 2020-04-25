<?php

use Illuminate\Database\Seeder;

class SeoConfigsTableSeeder extends Seeder
{

  const TABLE_NAME = 'seo_configs';
  const FIELD_SLUG = 'slug';
  const FIELD_DESCRIPTION = 'description';
  const FIELD_TITLE = 'title';
  const FIELD_CANONICAL_URL = 'canonical_url';
  const FIELD_OG_TITLE = 'og_title';
  const FIELD_OG_TYPE = 'og_type';
  const FIELD_OG_IMAGE = 'og_image';
  const FIELD_OG_URL = 'og_url';
  const FIELD_OG_DESCRIPTION = 'og_description';
  const FIELD_TWITTER_CARD = 'twitter_card';
  const FIELD_TWITTER_SITE = 'twitter_site';

  const VALUE_OG_TYPE = 'website';
  const VALUE_TWITTER_CARD = 'summary';
  const VALUE_TWITTER_SITE = '@anhqvstats';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $seoConfigs = $this->getSeoConfigs();

    foreach ($seoConfigs as $seoConfig) {
      DB::table(static::TABLE_NAME)->insert([
        static::FIELD_SLUG => $seoConfig[static::FIELD_SLUG],
        static::FIELD_TITLE => $seoConfig[static::FIELD_TITLE],
        static::FIELD_DESCRIPTION => $seoConfig[static::FIELD_DESCRIPTION],
        static::FIELD_CANONICAL_URL => $seoConfig[static::FIELD_CANONICAL_URL],static::FIELD_OG_TITLE => $seoConfig[static::FIELD_OG_TITLE],
        static::FIELD_OG_TYPE => $seoConfig[static::FIELD_OG_TYPE],
        static::FIELD_OG_IMAGE => $seoConfig[static::FIELD_OG_IMAGE],
        static::FIELD_OG_URL => $seoConfig[static::FIELD_OG_URL],
        static::FIELD_OG_DESCRIPTION => $seoConfig[static::FIELD_OG_DESCRIPTION],
        static::FIELD_TWITTER_CARD => $seoConfig[static::FIELD_TWITTER_CARD],
        static::FIELD_TWITTER_SITE => $seoConfig[static::FIELD_TWITTER_SITE],
      ]);
    }
  }

  public function getSeoConfigs()
  {
    return [
      [
        static::FIELD_SLUG => 'home',
        static::FIELD_TITLE => 'ANHQV STATS',
        static::FIELD_DESCRIPTION => 'Información y estadísticas Aquí No Hay Quien Viva: personajes, actores, capítulos... y mucho más. ✅ Disponible API REST documentada.',
        static::FIELD_CANONICAL_URL => 'http://anhqv-stats.es/',static::FIELD_OG_TITLE => 'ANHQV STATS',
        static::FIELD_OG_TYPE => static::VALUE_OG_TYPE,
        static::FIELD_OG_IMAGE => 'http://anhqv-stats.es/images/logo.png',
        static::FIELD_OG_URL => 'http://anhqv-stats.es/',
        static::FIELD_OG_DESCRIPTION => 'Información y estadísticas Aquí No Hay Quien Viva: personajes, actores, capítulos... y mucho más. ✅ Disponible API REST documentada.',
        static::FIELD_TWITTER_CARD => static::VALUE_TWITTER_CARD,
        static::FIELD_TWITTER_SITE => static::VALUE_TWITTER_SITE,
      ]
    ];
  }
}
