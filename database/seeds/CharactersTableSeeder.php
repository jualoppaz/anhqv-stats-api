<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{

    const TABLE_NAME = 'characters';
    const FIELD_NAME = 'name';
    const FIELD_SURNAME = 'surname';
    const FIELD_NICKNAME = 'nickname';
    const FIELD_IMAGE_URL = 'image_url';

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
                static::FIELD_NICKNAME => $character[static::FIELD_NICKNAME],
                static::FIELD_IMAGE_URL => $character[static::FIELD_IMAGE_URL],
            ]);
        }
    }

    public function getCharacters()
    {
        return [
            [
                static::FIELD_NAME => 'María Luisa',
                static::FIELD_SURNAME => 'Benito Valbuena',
                static::FIELD_NICKNAME => 'Marisa',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/marisa.jpg'
            ], [
                static::FIELD_NAME => 'Vicenta',
                static::FIELD_SURNAME => 'Benito Valbuena',
                static::FIELD_NICKNAME => 'Vicenta',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/vicenta.jpg'
            ], [
                static::FIELD_NAME => 'Juan',
                static::FIELD_SURNAME => 'Cuesta',
                static::FIELD_NICKNAME => 'Juan',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/juan_cuesta.jpg'
            ], [
                static::FIELD_NAME => 'Paloma',
                static::FIELD_SURNAME => 'Hurtado',
                static::FIELD_NICKNAME => 'Paloma',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/paloma.jpg'
            ], [
                static::FIELD_NAME => 'José Miguel',
                static::FIELD_SURNAME => 'Cuesta Hurtado',
                static::FIELD_NICKNAME => 'Josemi',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/josemi.jpg'
            ], [
                static::FIELD_NAME => 'Belén',
                static::FIELD_SURNAME => 'López Vázquez',
                static::FIELD_NICKNAME => 'Belén',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/belen.jpg'
            ], [
                static::FIELD_NAME => 'Alicia',
                static::FIELD_SURNAME => 'Sanz',
                static::FIELD_NICKNAME => 'Alicia',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/alicia.jpg'
            ], [
                static::FIELD_NAME => 'Concepción',
                static::FIELD_SURNAME => '',
                static::FIELD_NICKNAME => 'Concha',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/concha.jpg'
            ], [
                static::FIELD_NAME => 'Daniel',
                static::FIELD_SURNAME => 'Rubio',
                static::FIELD_NICKNAME => 'Dani',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/dani.jpg'
            ], [
                static::FIELD_NAME => 'Armando',
                static::FIELD_SURNAME => 'Rubio',
                static::FIELD_NICKNAME => 'Armando',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/armando.jpg'
            ], [
                static::FIELD_NAME => 'Mauricio',
                static::FIELD_SURNAME => 'Hidalgo',
                static::FIELD_NICKNAME => 'Mauri',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mauri.jpg'
            ], [
                static::FIELD_NAME => 'Fernando',
                static::FIELD_SURNAME => 'Navarro',
                static::FIELD_NICKNAME => 'Fernando',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/fernando.jpg'
            ], [
                static::FIELD_NAME => 'Natalia',
                static::FIELD_SURNAME => 'Cuesta Hurtado',
                static::FIELD_NICKNAME => 'Natalia',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/natalia.jpg'
            ], [
                static::FIELD_NAME => 'Roberto',
                static::FIELD_SURNAME => 'Alonso',
                static::FIELD_NICKNAME => 'Roberto',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/roberto.jpg'
            ], [
                static::FIELD_NAME => 'Lucía',
                static::FIELD_SURNAME => 'Álvarez',
                static::FIELD_NICKNAME => 'La pija',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/lucia.jpg'
            ], [
                static::FIELD_NAME => 'Emilio',
                static::FIELD_SURNAME => 'Delgado Martínez',
                static::FIELD_NICKNAME => 'Emilio',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/emilio.jpg'
            ], [
                static::FIELD_NAME => 'Trabajador mudanza 1',
                static::FIELD_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/trabajador_mudanza_1.jpg'
            ], [
                static::FIELD_NAME => 'Trabajador mudanza 2',
                static::FIELD_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/trabajador_mudanza_2.jpg'
            ], [
                static::FIELD_NAME => 'Paco',
                static::FIELD_SURNAME => '',
                static::FIELD_NICKNAME => 'Paco',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/paco.jpg'
            ], [
                static::FIELD_NAME => 'Santiago',
                static::FIELD_SURNAME => 'Segura',
                static::FIELD_NICKNAME => 'Santiago',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/santiago.jpg'
            ], [
                static::FIELD_NAME => 'Mariano',
                static::FIELD_SURNAME => 'Delgado',
                static::FIELD_NICKNAME => 'Mariano',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mariano.jpg'
            ], [
                static::FIELD_NAME => 'Esther',  // Susana Reija
                static::FIELD_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/esther.jpg'
            ]
        ];
    }
}
