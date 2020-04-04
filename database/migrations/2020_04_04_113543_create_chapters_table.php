<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    const TABLE_NAME = 'chapters';
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_SEASON = 'season';
    const FIELD_SUMMARY = 'summary';
    const FIELD_IMAGE_URL = 'image_url';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(static::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(static::FIELD_NAME, 50)->nullable(false)->comment('Nombre del capítulo');
            $table->string(static::FIELD_SLUG, 10)->nullable(false)->comment('Slug del capítulo');
            $table->string(static::FIELD_SEASON, 1)->nullable(false)->comment('Temporada a la que pertenece');
            $table->text(static::FIELD_SUMMARY)->nullable(false)->comment('Sinopsis del capítulo');
            $table->string(static::FIELD_IMAGE_URL, 100)->nullable(false)->comment('URL de la imagen del capítulo');
            $table->timestamps();

            // constraints
            $table->unique(static::FIELD_SLUG);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(static::TABLE_NAME);
    }
}
