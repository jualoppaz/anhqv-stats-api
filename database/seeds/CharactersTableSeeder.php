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
  const FIELD_IMAGE_ALT = 'image_alt';
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
        static::FIELD_IMAGE_ALT => $character[static::FIELD_IMAGE_ALT],
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
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/marisa-benito.jpg',
        static::FIELD_IMAGE_ALT => 'Marisa Benito',
        static::FIELD_SLUG => 'marisa-benito'
      ], [
        static::FIELD_NAME => 'Vicenta',
        static::FIELD_SURNAME => 'Benito',
        static::FIELD_SECOND_SURNAME => 'Valbuena',
        static::FIELD_SHORTNAME => 'Vicenta',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/vicenta-benito.jpg',
        static::FIELD_IMAGE_ALT => 'Vicenta Benito',
        static::FIELD_SLUG => 'vicenta-benito'
      ], [
        static::FIELD_NAME => 'Juan',
        static::FIELD_SURNAME => 'Cuesta',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Juan',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/juan-cuesta.jpg',
        static::FIELD_IMAGE_ALT => 'Juan Cuesta',
        static::FIELD_SLUG => 'juan-cuesta'
      ], [
        static::FIELD_NAME => 'Paloma',
        static::FIELD_SURNAME => 'Hurtado',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Paloma',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/paloma-hurtado.jpg',
        static::FIELD_IMAGE_ALT => 'Paloma Hurtado',
        static::FIELD_SLUG => 'paloma-hurtado'
      ], [
        static::FIELD_NAME => 'José Miguel',
        static::FIELD_SURNAME => 'Cuesta',
        static::FIELD_SECOND_SURNAME => 'Hurtado',
        static::FIELD_SHORTNAME => 'Josemi',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/jose-miguel-cuesta.jpg',
        static::FIELD_IMAGE_ALT => 'José Miguel Cuesta',
        static::FIELD_SLUG => 'jose-miguel-cuesta'
      ], [
        static::FIELD_NAME => 'Belén',
        static::FIELD_SURNAME => 'López',
        static::FIELD_SECOND_SURNAME => 'Vázquez',
        static::FIELD_SHORTNAME => 'Belén',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/belen-lopez.jpg',
        static::FIELD_IMAGE_ALT => 'Belén López',
        static::FIELD_SLUG => 'belen-lopez'
      ], [
        static::FIELD_NAME => 'Alicia',
        static::FIELD_SURNAME => 'Sanz',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Alicia',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/alicia-sanz.jpg',
        static::FIELD_IMAGE_ALT => 'Alicia Sanz',
        static::FIELD_SLUG => 'alicia-sanz'
      ], [
        static::FIELD_NAME => 'Concepción',
        static::FIELD_SURNAME => 'de la Fuente',
        static::FIELD_SECOND_SURNAME => 'García',
        static::FIELD_SHORTNAME => 'Concha',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/concha.jpg',
        static::FIELD_IMAGE_ALT => 'Concha de la Fuente',
        static::FIELD_SLUG => 'concha'
      ], [
        static::FIELD_NAME => 'Daniel',
        static::FIELD_SURNAME => 'Rubio',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Dani',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/dani-rubio.jpg',
        static::FIELD_IMAGE_ALT => 'Dani Rubio',
        static::FIELD_SLUG => 'dani-rubio'
      ], [
        static::FIELD_NAME => 'Armando',
        static::FIELD_SURNAME => 'Rubio',
        static::FIELD_SECOND_SURNAME => 'de la Fuente',
        static::FIELD_SHORTNAME => 'Armando',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/armando.jpg',
        static::FIELD_IMAGE_ALT => 'Armando Rubio',
        static::FIELD_SLUG => 'armando'
      ], [
        static::FIELD_NAME => 'Mauricio',
        static::FIELD_SURNAME => 'Hidalgo',
        static::FIELD_SECOND_SURNAME => 'Torres',
        static::FIELD_SHORTNAME => 'Mauri',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/mauricio-hidalgo.jpg',
        static::FIELD_IMAGE_ALT => 'Mauricio Hidalgo',
        static::FIELD_SLUG => 'mauricio-hidalgo'
      ], [
        static::FIELD_NAME => 'Fernando',
        static::FIELD_SURNAME => 'Navarro',
        static::FIELD_SECOND_SURNAME => 'Sánchez',
        static::FIELD_SHORTNAME => 'Fernando',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/fernando-navarro.jpg',
        static::FIELD_IMAGE_ALT => 'Fernando Navarro',
        static::FIELD_SLUG => 'fernando-navarro'
      ], [
        static::FIELD_NAME => 'Natalia',
        static::FIELD_SURNAME => 'Cuesta',
        static::FIELD_SECOND_SURNAME => 'Hurtado',
        static::FIELD_SHORTNAME => 'Natalia',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/natalia-cuesta.jpg',
        static::FIELD_IMAGE_ALT => 'Natalia Cuesta',
        static::FIELD_SLUG => 'natalia-cuesta'
      ], [
        static::FIELD_NAME => 'Roberto',
        static::FIELD_SURNAME => 'Alonso',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Roberto',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/roberto-alonso.jpg',
        static::FIELD_IMAGE_ALT => 'Roberto Alonso',
        static::FIELD_SLUG => 'roberto-alonso'
      ], [
        static::FIELD_NAME => 'Lucía',
        static::FIELD_SURNAME => 'Álvarez',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Lucía',
        static::FIELD_NICKNAME => 'La pija',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/lucia-alvarez.jpg',
        static::FIELD_IMAGE_ALT => 'Lucía Álvarez',
        static::FIELD_SLUG => 'lucia-alvarez'
      ], [
        static::FIELD_NAME => 'Emilio',
        static::FIELD_SURNAME => 'Delgado',
        static::FIELD_SECOND_SURNAME => 'Martínez',
        static::FIELD_SHORTNAME => 'Emilio',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/emilio-delgado.jpg',
        static::FIELD_IMAGE_ALT => 'Emilio Delgado',
        static::FIELD_SLUG => 'emilio-delgado'
      ], [
        static::FIELD_NAME => 'Mozo mudanza 1', // Antonio gomez
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Mozo mudanza 1',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/mozo-mudanza-1.jpg',
        static::FIELD_IMAGE_ALT => 'Mozo mudanza 1',
        static::FIELD_SLUG => 'mozo-mudanza-1'
      ], [
        static::FIELD_NAME => 'Mozo mudanza 2', // Arsenio Luna (el negrucio)
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Mozo mudanza 2',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/mozo-mudanza-2.jpg',
        static::FIELD_IMAGE_ALT => 'Mozo mudanza 2',
        static::FIELD_SLUG => 'mozo-mudanza-2'
      ], [
        static::FIELD_NAME => 'Repartidor propaganda',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Repartidor propaganda',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/desconocido.jpg',
        static::FIELD_IMAGE_ALT => 'Repartidor propaganda',
        static::FIELD_SLUG => 'repartidor-propaganda'
      ], [
        static::FIELD_NAME => 'Paco',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Paco',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/paco.jpg',
        static::FIELD_IMAGE_ALT => 'Paco',
        static::FIELD_SLUG => 'paco'
      ], [
        static::FIELD_NAME => 'Santiago',
        static::FIELD_SURNAME => 'Segura',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Santiago',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/santiago-segura.jpg',
        static::FIELD_IMAGE_ALT => 'Santiago Segura',
        static::FIELD_SLUG => 'santiago-segura'
      ], [
        static::FIELD_NAME => 'Mariano',
        static::FIELD_SURNAME => 'Delgado',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Mariano',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/mariano-delgado.jpg',
        static::FIELD_IMAGE_ALT => 'Mariano Delgado',
        static::FIELD_SLUG => 'mariano-delgado'
      ], [
        static::FIELD_NAME => 'Esther',  // Susana Reija
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Esther',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/esther.jpg',
        static::FIELD_IMAGE_ALT => 'Esther',
        static::FIELD_SLUG => 'esther'
      ], [
        static::FIELD_NAME => 'Antonio',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Antonio',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/antonio-el-capataz.jpg',
        static::FIELD_IMAGE_ALT => 'Antonio, el capataz de la obra',
        static::FIELD_SLUG => 'antonio-el-capataz'
      ], [
        static::FIELD_NAME => 'Obrero marroquí',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Obrero marroquí',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/obrero-marroqui.jpg',
        static::FIELD_IMAGE_ALT => 'Obrero marroquí',
        static::FIELD_SLUG => 'obrero-marroqui'
      ], [
        static::FIELD_NAME => 'Obrero africano',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Obrero africano',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/obrero-africano.jpg',
        static::FIELD_IMAGE_ALT => 'Obrero africano',
        static::FIELD_SLUG => 'obrero-africano'
      ], [
        static::FIELD_NAME => 'Obrero polaco',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Obrero polaco',
        static::FIELD_NICKNAME => '',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/obrero-polaco.jpg',
        static::FIELD_IMAGE_ALT => 'Obrero polaco',
        static::FIELD_SLUG => 'obrero-polaco'
      ], [
        static::FIELD_NAME => 'Gerardo',
        static::FIELD_SURNAME => '',
        static::FIELD_SECOND_SURNAME => '',
        static::FIELD_SHORTNAME => 'Gerardo',
        static::FIELD_NICKNAME => 'El calvo que habla rápido',
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/characters/gerardo.jpg',
        static::FIELD_IMAGE_ALT => 'Gerardo, el calvo que habla rápido',
        static::FIELD_SLUG => 'gerardo'
      ],
    ];
  }
}
