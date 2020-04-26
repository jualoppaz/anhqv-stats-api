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
      ], [
        static::FIELD_SLUG => 'characters',
        static::FIELD_TITLE => 'Personajes',
        static::FIELD_DESCRIPTION => 'Galería con todos los personajes que aparecen en Aquí No Hay Quien Viva.',
        static::FIELD_CANONICAL_URL => 'http://anhqv-stats.es/personajes',
        static::FIELD_OG_TITLE => 'Personajes',
        static::FIELD_OG_TYPE => static::VALUE_OG_TYPE,
        static::FIELD_OG_IMAGE => 'http://anhqv-stats.es/images/logo.png',
        static::FIELD_OG_URL => 'http://anhqv-stats.es/personajes',
        static::FIELD_OG_DESCRIPTION => 'Galería con los personajes que han participado en Aquí No Hay Quien Viva.',
        static::FIELD_TWITTER_CARD => static::VALUE_TWITTER_CARD,
        static::FIELD_TWITTER_SITE => static::VALUE_TWITTER_SITE,
      ], [
        static::FIELD_SLUG => 'character-marisa-benito',
        static::FIELD_TITLE => 'Personaje | Marisa Benito',
        static::FIELD_DESCRIPTION => 'Ficha con los detalles de Marisa Benito, personaje de Aquí No Hay Quien Viva interpretado por Mariví Bilbao.',
        static::FIELD_CANONICAL_URL => 'http://anhqv-stats.es/personajes/marisa-benito',
        static::FIELD_OG_TITLE => 'Personaje | Marisa Benito',
        static::FIELD_OG_TYPE => static::VALUE_OG_TYPE,
        static::FIELD_OG_IMAGE => 'http://anhqv-stats.es/images/characters/marisa-benito.jpg',
        static::FIELD_OG_URL => 'http://anhqv-stats.es/personajes/marisa-benito',
        static::FIELD_OG_DESCRIPTION => 'Ficha con los detalles de Marisa Benito, personaje de Aquí No Hay Quien Viva interpretado por Mariví Bilbao.',
        static::FIELD_TWITTER_CARD => static::VALUE_TWITTER_CARD,
        static::FIELD_TWITTER_SITE => static::VALUE_TWITTER_SITE,
      ], [
        static::FIELD_SLUG => 'character-vicenta-benito',
        static::FIELD_TITLE => 'Personaje | Vicenta Benito',
        static::FIELD_DESCRIPTION => 'Ficha con los detalles de Vicenta Benito, personaje de Aquí No Hay Quien Viva interpretado por Gemma Cuervo.',
        static::FIELD_CANONICAL_URL => 'http://anhqv-stats.es/personajes/vicenta-benito',
        static::FIELD_OG_TITLE => 'Personaje | Vicenta Benito',
        static::FIELD_OG_TYPE => static::VALUE_OG_TYPE,
        static::FIELD_OG_IMAGE => 'http://anhqv-stats.es/images/characters/vicenta-benito.jpg',
        static::FIELD_OG_URL => 'http://anhqv-stats.es/personajes/vicenta-benito',
        static::FIELD_OG_DESCRIPTION => 'Ficha con los detalles de Vicenta Benito, personaje de Aquí No Hay Quien Viva interpretado por Gemma Cuervo.',
        static::FIELD_TWITTER_CARD => static::VALUE_TWITTER_CARD,
        static::FIELD_TWITTER_SITE => static::VALUE_TWITTER_SITE,
      ], [
        static::FIELD_SLUG => 'character-juan-cuesta',
        static::FIELD_TITLE => 'Personaje | Juan Cuesta',
        static::FIELD_DESCRIPTION => 'Ficha con los detalles de Juan Cuesta, personaje de Aquí No Hay Quien Viva interpretado por José Luis Gil.',
        static::FIELD_CANONICAL_URL => 'http://anhqv-stats.es/personajes/juan-cuesta',
        static::FIELD_OG_TITLE => 'Personaje | Juan Cuesta',
        static::FIELD_OG_TYPE => static::VALUE_OG_TYPE,
        static::FIELD_OG_IMAGE => 'http://anhqv-stats.es/images/characters/juan-cuesta.jpg',
        static::FIELD_OG_URL => 'http://anhqv-stats.es/personajes/juan-cuesta',
        static::FIELD_OG_DESCRIPTION => 'Ficha con los detalles de Juan Cuesta, personaje de Aquí No Hay Quien Viva interpretado por José Luis Gil.',
        static::FIELD_TWITTER_CARD => static::VALUE_TWITTER_CARD,
        static::FIELD_TWITTER_SITE => static::VALUE_TWITTER_SITE,
      ], [
        static::FIELD_SLUG => 'character-paloma-hurtado',
        static::FIELD_TITLE => 'Personaje | Paloma Hurtado',
        static::FIELD_DESCRIPTION => 'Ficha con los detalles de Paloma Hurtado, personaje de Aquí No Hay Quien Viva interpretado por Loles León.',
        static::FIELD_CANONICAL_URL => 'http://anhqv-stats.es/personajes/paloma-hurtado',
        static::FIELD_OG_TITLE => 'Personaje | Paloma Hurtado',
        static::FIELD_OG_TYPE => static::VALUE_OG_TYPE,
        static::FIELD_OG_IMAGE => 'http://anhqv-stats.es/images/characters/paloma-hurtado.jpg',
        static::FIELD_OG_URL => 'http://anhqv-stats.es/personajes/paloma-hurtado',
        static::FIELD_OG_DESCRIPTION => 'Ficha con los detalles de Paloma Hurtado, personaje de Aquí No Hay Quien Viva interpretado por Loles León.',
        static::FIELD_TWITTER_CARD => static::VALUE_TWITTER_CARD,
        static::FIELD_TWITTER_SITE => static::VALUE_TWITTER_SITE,
      ]
    ];
  }
}
