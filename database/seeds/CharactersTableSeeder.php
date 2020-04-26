<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{

  const TABLE_NAME = 'characters';
  const FIELD_NAME = 'name';
  const FIELD_SURNAME = 'surname';
  const FIELD_SECOND_SURNAME = 'second_surname';
  const FIELD_SHORTNAME = 'shortname';
  const FIELD_NICKNAME = 'nickname';
  const FIELD_IMAGE_URL = 'image_url';
  const FIELD_SLUG = 'slug';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $characters = $this->getCharacters();

    foreach ($characters as $character) {
      DB::table(static::TABLE_NAME)->insert([
        static::FIELD_NAME => $character[static::FIELD_NAME],
        static::FIELD_SURNAME => $character[static::FIELD_SURNAME],
        static::FIELD_SECOND_SURNAME => $character[static::FIELD_SECOND_SURNAME],
        static::FIELD_SHORTNAME => $character[static::FIELD_SHORTNAME],
        static::FIELD_NICKNAME => $character[static::FIELD_NICKNAME],
        static::FIELD_IMAGE_URL => $character[static::FIELD_IMAGE_URL],
        static::FIELD_SLUG => $character[static::FIELD_SLUG],
      ]);
    }
  }

  public function getCharacters()
  {
    return [
      [
        static::FIELD_NAME => 'María Luisa',
        static::FIELD_SURNAME => 'Benito',
        static::FIELD_SECOND_SURNAME => 'Valbuena',
        static::FIELD_SHORTNAME => 'Marisa',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/marisa.jpg',
        static::FIELD_SLUG => 'marisa-benito'
      ], [
        static::FIELD_NAME => 'Vicenta',
        static::FIELD_SURNAME => 'Benito',
        static::FIELD_SECOND_SURNAME => 'Valbuena',
        static::FIELD_SHORTNAME => 'Vicenta',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/vicenta.jpg',
        static::FIELD_SLUG => 'vicenta'
      ], [
        static::FIELD_NAME => 'Juan',
        static::FIELD_SURNAME => 'Cuesta',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Juan',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/juan_cuesta.jpg',
        static::FIELD_SLUG => 'juan-cuesta'
      ], [
        static::FIELD_NAME => 'Paloma',
        static::FIELD_SURNAME => 'Hurtado',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Paloma',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/paloma.jpg',
        static::FIELD_SLUG => 'paloma'
      ], [
        static::FIELD_NAME => 'José Miguel',
        static::FIELD_SURNAME => 'Cuesta',
        static::FIELD_SECOND_SURNAME => 'Hurtado',
        static::FIELD_SHORTNAME => 'Josemi',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/josemi.jpg',
        static::FIELD_SLUG => 'josemi'
      ], [
        static::FIELD_NAME => 'Belén',
        static::FIELD_SURNAME => 'López',
        static::FIELD_SECOND_SURNAME => 'Vázquez',
        static::FIELD_SHORTNAME => 'Belén',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/belen.jpg',
        static::FIELD_SLUG => 'belen'
      ], [
        static::FIELD_NAME => 'Alicia',
        static::FIELD_SURNAME => 'Sanz',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Alicia',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/alicia.jpg',
        static::FIELD_SLUG => 'alicia'
      ], [
        static::FIELD_NAME => 'Concepción',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Concha',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/concha.jpg',
        static::FIELD_SLUG => 'concha'
      ], [
        static::FIELD_NAME => 'Daniel',
        static::FIELD_SURNAME => 'Rubio',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Dani',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/dani.jpg',
        static::FIELD_SLUG => 'dani'
      ], [
        static::FIELD_NAME => 'Armando',
        static::FIELD_SURNAME => 'Rubio',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Armando',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/armando.jpg',
        static::FIELD_SLUG => 'armando'
      ], [
        static::FIELD_NAME => 'Mauricio',
        static::FIELD_SURNAME => 'Hidalgo',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Mauri',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mauri.jpg',
        static::FIELD_SLUG => 'mauri'
      ], [
        static::FIELD_NAME => 'Fernando',
        static::FIELD_SURNAME => 'Navarro',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Fernando',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/fernando.jpg',
        static::FIELD_SLUG => 'fernando'
      ], [
        static::FIELD_NAME => 'Natalia',
        static::FIELD_SURNAME => 'Cuesta',
        static::FIELD_SECOND_SURNAME => 'Hurtado',
        static::FIELD_SHORTNAME => 'Natalia',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/natalia.jpg',
        static::FIELD_SLUG => 'natalia'
      ], [
        static::FIELD_NAME => 'Roberto',
        static::FIELD_SURNAME => 'Alonso',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Roberto',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/roberto.jpg',
        static::FIELD_SLUG => 'roberto'
      ], [
        static::FIELD_NAME => 'Lucía',
        static::FIELD_SURNAME => 'Álvarez',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Lucía',
        static::FIELD_NICKNAME => 'La pija',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/lucia.jpg',
        static::FIELD_SLUG => 'lucia'
      ], [
        static::FIELD_NAME => 'Emilio',
        static::FIELD_SURNAME => 'Delgado',
        static::FIELD_SECOND_SURNAME => 'Martínez',
        static::FIELD_SHORTNAME => 'Emilio',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/emilio.jpg',
        static::FIELD_SLUG => 'emilio'
      ], [
        static::FIELD_NAME => 'Mozo mudanza 1', // Antonio gomez
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Mozo mudanza 1',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mozo_mudanza_1.jpg',
        static::FIELD_SLUG => 'mozo-mudanza-1'
      ], [
        static::FIELD_NAME => 'Mozo mudanza 2', // Arsenio Luna (el negrucio)
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Mozo mudanza 2',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mozo_mudanza_2.jpg',
        static::FIELD_SLUG => 'mozo-mudanza-2'
      ], [
        static::FIELD_NAME => 'Repartidor propaganda',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Repartidor propaganda',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/desconocido.jpg',
        static::FIELD_SLUG => 'repartidor-propaganda'
      ], [
        static::FIELD_NAME => 'Paco',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Paco',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/paco.jpg',
        static::FIELD_SLUG => 'paco'
      ], [
        static::FIELD_NAME => 'Santiago',
        static::FIELD_SURNAME => 'Segura',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Santiago',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/santiago_segura.jpg',
        static::FIELD_SLUG => 'santiago-segura'
      ], [
        static::FIELD_NAME => 'Mariano',
        static::FIELD_SURNAME => 'Delgado',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Mariano',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mariano.jpg',
        static::FIELD_SLUG => 'mariano'
      ], [
        static::FIELD_NAME => 'Esther',  // Susana Reija
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Esther',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/esther.jpg',
        static::FIELD_SLUG => 'esther'
      ]
    ];
  }
}
