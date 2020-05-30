<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class ActorsTableSeeder extends Seeder
{

  const TABLE_NAME = 'actors';
  const FIELD_NAME = 'name';
  const FIELD_SURNAME = 'surname';
  const FIELD_SECOND_SURNAME = 'second_surname';
  const FIELD_SHORTNAME = 'shortname';
  const FIELD_BIRTHDATE = 'birthdate';
  const FIELD_DEATHDATE = 'deathdate';
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

    $actors = $this->getActors();

    foreach ($actors as $actor) {
      DB::table(static::TABLE_NAME)->insert([
        static::FIELD_NAME => $actor[static::FIELD_NAME],
        static::FIELD_SURNAME => $actor[static::FIELD_SURNAME],
        static::FIELD_SECOND_SURNAME => $actor[static::FIELD_SECOND_SURNAME],
        static::FIELD_SHORTNAME => $actor[static::FIELD_SHORTNAME],
        static::FIELD_BIRTHDATE => $actor[static::FIELD_BIRTHDATE],static::FIELD_DEATHDATE => isset($actor[static::FIELD_DEATHDATE]) ? $actor[static::FIELD_DEATHDATE] : null,
        static::FIELD_IMAGE_URL => $actor[static::FIELD_IMAGE_URL],
        static::FIELD_IMAGE_ALT => $actor[static::FIELD_IMAGE_ALT],
        static::FIELD_SLUG => $actor[static::FIELD_SLUG],
      ]);
    }
  }

  public function getActors()
  {
    return [
      [
        static::FIELD_NAME => 'María Victoria',
        static::FIELD_SURNAME => 'Bilbao-Goyoaga',
        static::FIELD_SECOND_SURNAME => 'Álvarez',
        static::FIELD_SHORTNAME => 'Mariví Bilbao',
        static::FIELD_BIRTHDATE => Carbon::create('1930', '01', '22'),
        static::FIELD_DEATHDATE => Carbon::create('2013', '04', '03'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/marivi-bilbao.jpg',
        static::FIELD_IMAGE_ALT => 'Mariví Bilbao',
        static::FIELD_SLUG => 'marivi-bilbao'
      ], [
        static::FIELD_NAME => 'Gemma',
        static::FIELD_SURNAME => 'Cuervo',
        static::FIELD_SECOND_SURNAME => 'Igartúa',
        static::FIELD_SHORTNAME => 'Gemma Cuervo',
        static::FIELD_BIRTHDATE => Carbon::create('1936', '06', '22'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/gemma-cuervo.jpg',
        static::FIELD_IMAGE_ALT => 'Gemma Cuervo',
        static::FIELD_SLUG => 'gemma-cuervo'
      ], [
        static::FIELD_NAME => 'José Luis',
        static::FIELD_SURNAME => 'Gil',
        static::FIELD_SECOND_SURNAME => 'Sanz',
        static::FIELD_SHORTNAME => 'José Luis Gil',
        static::FIELD_BIRTHDATE => Carbon::create('1957', '12', '09'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/jose-luis-gil.jpg',
        static::FIELD_IMAGE_ALT => 'José Luis Gil',
        static::FIELD_SLUG => 'jose-luis-gil'
      ], [
        static::FIELD_NAME => 'María Dolores',
        static::FIELD_SURNAME => 'León',
        static::FIELD_SECOND_SURNAME => 'Rodríguez',
        static::FIELD_SHORTNAME => 'Loles León',
        static::FIELD_BIRTHDATE => Carbon::create('1950', '08', '01'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/loles-leon.jpg',
        static::FIELD_IMAGE_ALT => 'Loles León',
        static::FIELD_SLUG => 'loles-leon'
      ], [
        static::FIELD_NAME => 'Eduardo',
        static::FIELD_SURNAME => 'García',
        static::FIELD_SECOND_SURNAME => 'Martínez',
        static::FIELD_SHORTNAME => 'Edu García',
        static::FIELD_BIRTHDATE => Carbon::create('1992', '04', '30'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/edu-garcia.jpg',
        static::FIELD_IMAGE_ALT => 'Eduardo García',
        static::FIELD_SLUG => 'edu-garcia'
      ], [
        static::FIELD_NAME => 'Malena Grisel',
        static::FIELD_SURNAME => 'Alterio',
        static::FIELD_SECOND_SURNAME => 'Bacaicoa',
        static::FIELD_SHORTNAME => 'Malena Alterio',
        static::FIELD_BIRTHDATE => Carbon::create('1974', '01', '21'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/malena-alterio.jpg',
        static::FIELD_IMAGE_ALT => 'Malena Grisel',
        static::FIELD_SLUG => 'malena-alterio'
      ], [
        static::FIELD_NAME => 'Laura',
        static::FIELD_SURNAME => 'Gonsalves',
        static::FIELD_SECOND_SURNAME => 'Pamplona',
        static::FIELD_SHORTNAME => 'Laura Pamplona',
        static::FIELD_BIRTHDATE => Carbon::create('1973', '09', '07'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/laura-pamplona.jpg',
        static::FIELD_IMAGE_ALT => 'Laura Pamplona',
        static::FIELD_SLUG => 'laura-pamplona'
      ], [
        static::FIELD_NAME => 'Manuela',
        static::FIELD_SURNAME => 'Ruiz',
        static::FIELD_SECOND_SURNAME => 'Penella',
        static::FIELD_SHORTNAME => 'Emma Penella',
        static::FIELD_BIRTHDATE => Carbon::create('1931', '03', '02'),
        static::FIELD_DEATHDATE => Carbon::create('2007', '08', '27'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/emma-penella.jpg',
        static::FIELD_IMAGE_ALT => 'Manuel Ruiz',
        static::FIELD_SLUG => 'emma-penella'
      ], [
        static::FIELD_NAME => 'Daniel',
        static::FIELD_SURNAME => 'Rubio',
        static::FIELD_SECOND_SURNAME => 'Ballesteros',
        static::FIELD_SHORTNAME => 'Dani Ballesteros',
        static::FIELD_BIRTHDATE => Carbon::create('1992', '12', '02'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/dani-ballesteros.jpg',
        static::FIELD_IMAGE_ALT => 'Daniel Rubio Ballesteros',
        static::FIELD_SLUG => 'dani-ballesteros'
      ], [
        static::FIELD_NAME => 'Joseba',
        static::FIELD_SURNAME => 'Apaolaza',
        static::FIELD_SECOND_SURNAME => 'Jáuregui',
        static::FIELD_SHORTNAME => 'Joseba Apaolaza',
        static::FIELD_BIRTHDATE => Carbon::create('1960', '12', '29'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/joseba-apaolaza.jpg',
        static::FIELD_IMAGE_ALT => 'Joseba Apaolaza',
        static::FIELD_SLUG => 'joseba-apaolaza'
      ], [
        static::FIELD_NAME => 'Luis María',
        static::FIELD_SURNAME => 'Larrañaga',
        static::FIELD_SECOND_SURNAME => 'Merlo',
        static::FIELD_SHORTNAME => 'Luis Merlo',
        static::FIELD_BIRTHDATE => Carbon::create('1966', '06', '13'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/luis-merlo.jpg',
        static::FIELD_IMAGE_ALT => 'Luis Merlo',
        static::FIELD_SLUG => 'luis-merlo'
      ], [
        static::FIELD_NAME => 'Adriá',
        static::FIELD_SURNAME => 'Collado',
        static::FIELD_SECOND_SURNAME => null,
        static::FIELD_SHORTNAME => 'Adriá Collado',
        static::FIELD_BIRTHDATE => Carbon::create('1972', '08', '03'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/adria-collado.jpg',
        static::FIELD_IMAGE_ALT => 'Adriá Collado',
        static::FIELD_SLUG => 'adria-collado'
      ], [
        static::FIELD_NAME => 'Sofía',
        static::FIELD_SURNAME => 'Nieto',
        static::FIELD_SECOND_SURNAME => null,
        static::FIELD_SHORTNAME => 'Sofía Nieto',
        static::FIELD_BIRTHDATE => Carbon::create('1984', '08', '16'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/sofia-nieto.jpg',
        static::FIELD_IMAGE_ALT => 'Sofía Nieto',
        static::FIELD_SLUG => 'sofia-nieto'
      ], [
        static::FIELD_NAME => 'Daniel',
        static::FIELD_SURNAME => 'García-Pérez',
        static::FIELD_SECOND_SURNAME => 'Guzmán',
        static::FIELD_SHORTNAME => 'Daniel Guzmán',
        static::FIELD_BIRTHDATE => Carbon::create('1974', '09', '21'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/daniel-guzman.jpg',
        static::FIELD_IMAGE_ALT => 'Daniel Guzmán',
        static::FIELD_SLUG => 'daniel-guzman'
      ], [
        static::FIELD_NAME => 'María',
        static::FIELD_SURNAME => 'Adánez',
        static::FIELD_SECOND_SURNAME => 'Almenara',
        static::FIELD_SHORTNAME => 'María Adánez',
        static::FIELD_BIRTHDATE => Carbon::create('1976', '03', '12'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/maria-adanez.jpg',
        static::FIELD_IMAGE_ALT => 'María Adánez',
        static::FIELD_SLUG => 'maria-adanez'
      ], [
        static::FIELD_NAME => 'Fernando',
        static::FIELD_SURNAME => 'Tejero',
        static::FIELD_SECOND_SURNAME => 'Muñoz-Torrero',
        static::FIELD_SHORTNAME => 'Fernando Tejero',
        static::FIELD_BIRTHDATE => Carbon::create('1967', '02', '24'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/fernando-tejero.jpg',
        static::FIELD_IMAGE_ALT => 'Fernando Tejero',
        static::FIELD_SLUG => 'fernando-tejero'
      ], [
        static::FIELD_NAME => 'Antonio',
        static::FIELD_SURNAME => 'Gómez',
        static::FIELD_SECOND_SURNAME => 'Celdrán',
        static::FIELD_SHORTNAME => 'Antonio Gómez',
        static::FIELD_BIRTHDATE => null,
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/antonio-gomez.jpg',
        static::FIELD_IMAGE_ALT => 'Antonio Gómez',
        static::FIELD_SLUG => 'antonio-gomez'
      ], [
        static::FIELD_NAME => 'Arsenio',
        static::FIELD_SURNAME => 'Luna',
        static::FIELD_SECOND_SURNAME => null,
        static::FIELD_SHORTNAME => 'Arsenio Luna',
        static::FIELD_BIRTHDATE => null,
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/desconocido.jpg',
        static::FIELD_IMAGE_ALT => 'Arsenio Luna',
        static::FIELD_SLUG => 'arsenio-luna'
      ], [
        static::FIELD_NAME => 'Guillermo',
        static::FIELD_SURNAME => 'Ortega',
        static::FIELD_SECOND_SURNAME => 'Sierra',
        static::FIELD_SHORTNAME => 'Guillermo Ortega',
        static::FIELD_BIRTHDATE => Carbon::create('1971', '06', '30'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/guillermo-ortega.jpg',
        static::FIELD_IMAGE_ALT => 'Guillermo Ortega',
        static::FIELD_SLUG => 'guillermo-ortega'
      ], [
        static::FIELD_NAME => 'Santiago',
        static::FIELD_SURNAME => 'Segura',
        static::FIELD_SECOND_SURNAME => 'Silva',
        static::FIELD_SHORTNAME => 'Santiago Segura',
        static::FIELD_BIRTHDATE => Carbon::create('1965', '07', '17'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/santiago-segura.jpg',
        static::FIELD_IMAGE_ALT => 'Santiago Segura',
        static::FIELD_SLUG => 'santiago-segura'
      ], [
        static::FIELD_NAME => 'Eduardo',
        static::FIELD_SURNAME => 'Gómez',
        static::FIELD_SECOND_SURNAME => 'Manzano',
        static::FIELD_SHORTNAME => 'Eduardo Gómez',
        static::FIELD_BIRTHDATE => Carbon::create('1951', '07', '27'),
        static::FIELD_DEATHDATE => Carbon::create('2019', '07', '28'),
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/eduardo-gomez.jpg',
        static::FIELD_IMAGE_ALT => 'Eduardo Gómez',
        static::FIELD_SLUG => 'eduardo-gomez'
      ], [
        static::FIELD_NAME => 'Susana',
        static::FIELD_SURNAME => 'Reija',
        static::FIELD_SECOND_SURNAME => null,
        static::FIELD_SHORTNAME => 'Susana Reija',
        static::FIELD_BIRTHDATE => null,
        static::FIELD_IMAGE_URL => 'http://www.anhqv-stats.es/images/actors/desconocido.jpg',
        static::FIELD_IMAGE_ALT => 'Susana Reija',
        static::FIELD_SLUG => 'susana-reija'
      ]
    ];
  }
}
