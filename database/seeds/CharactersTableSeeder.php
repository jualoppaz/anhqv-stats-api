<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{

    const TABLE_NAME = 'characters';
    const FIELD_NAME = 'name';
    const FIELD_SURNAME = 'surname';
    const FIELD_SECOND_SURNAME = 'second_surname';
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
                static::FIELD_SECOND_SURNAME => $character[static::FIELD_SECOND_SURNAME],
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
                static::FIELD_SURNAME => 'Benito',
                static::FIELD_SECOND_SURNAME => 'Valbuena',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/marisa.jpg'
            ], [
                static::FIELD_NAME => 'Vicenta',
                static::FIELD_SURNAME => 'Benito',
                static::FIELD_SECOND_SURNAME => 'Valbuena',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/vicenta.jpg'
            ], [
                static::FIELD_NAME => 'Juan',
                static::FIELD_SURNAME => 'Cuesta',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/juan_cuesta.jpg'
            ], [
                static::FIELD_NAME => 'Paloma',
                static::FIELD_SURNAME => 'Hurtado',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/paloma.jpg'
            ], [
                static::FIELD_NAME => 'José Miguel',
                static::FIELD_SURNAME => 'Cuesta',
                static::FIELD_SECOND_SURNAME => 'Hurtado',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/josemi.jpg'
            ], [
                static::FIELD_NAME => 'Belén',
                static::FIELD_SURNAME => 'López',
                static::FIELD_SECOND_SURNAME => 'Vázquez',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/belen.jpg'
            ], [
                static::FIELD_NAME => 'Alicia',
                static::FIELD_SURNAME => 'Sanz',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/alicia.jpg'
            ], [
                static::FIELD_NAME => 'Concepción',
                static::FIELD_SURNAME => '',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/concha.jpg'
            ], [
                static::FIELD_NAME => 'Daniel',
                static::FIELD_SURNAME => 'Rubio',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/dani.jpg'
            ], [
                static::FIELD_NAME => 'Armando',
                static::FIELD_SURNAME => 'Rubio',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/armando.jpg'
            ], [
                static::FIELD_NAME => 'Mauricio',
                static::FIELD_SURNAME => 'Hidalgo',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mauri.jpg'
            ], [
                static::FIELD_NAME => 'Fernando',
                static::FIELD_SURNAME => 'Navarro',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/fernando.jpg'
            ], [
                static::FIELD_NAME => 'Natalia',
                static::FIELD_SURNAME => 'Cuesta',
                static::FIELD_SECOND_SURNAME => 'Hurtado',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/natalia.jpg'
            ], [
                static::FIELD_NAME => 'Roberto',
                static::FIELD_SURNAME => 'Alonso',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/roberto.jpg'
            ], [
                static::FIELD_NAME => 'Lucía',
                static::FIELD_SURNAME => 'Álvarez',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => 'La pija',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/lucia.jpg'
            ], [
                static::FIELD_NAME => 'Emilio',
                static::FIELD_SURNAME => 'Delgado',
                static::FIELD_SECOND_SURNAME => 'Martínez',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/emilio.jpg'
            ], [
                static::FIELD_NAME => 'Mozo mudanza 1', // Antonio gomez
                static::FIELD_SURNAME => '',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mozo_mudanza_1.jpg'
            ], [
                static::FIELD_NAME => 'Mozo mudanza 2', // Arsenio Luna (el negrucio)
                static::FIELD_SURNAME => '',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mozo_mudanza_2.jpg'
            ], [
                static::FIELD_NAME => 'Repartidor propaganda',
                static::FIELD_SURNAME => '',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/repartidor_propaganda.jpg'
            ], [
                static::FIELD_NAME => 'Paco',
                static::FIELD_SURNAME => '',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/paco.jpg'
            ], [
                static::FIELD_NAME => 'Santiago',
                static::FIELD_SURNAME => 'Segura',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/santiago_segura.jpg'
            ], [
                static::FIELD_NAME => 'Mariano',
                static::FIELD_SURNAME => 'Delgado',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/mariano.jpg'
            ], [
                static::FIELD_NAME => 'Esther',  // Susana Reija
                static::FIELD_SURNAME => '',
                static::FIELD_SECOND_SURNAME => '',
                static::FIELD_NICKNAME => '',
                static::FIELD_IMAGE_URL => 'http://anhqv-stats.es/images/characters/esther.jpg'
            ]
        ];
    }
}
