<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoConfigsTable extends Migration
{

  const TABLE_NAME = 'seo_configs';
  const FIELD_SLUG = 'slug';
  const FIELD_TITLE = 'title';

  // Common metas
  const FIELD_DESCRIPTION = 'description';
  const FIELD_KEYWORDS = 'keywords';
  const FIELD_CANONICAL_URL = 'canonical_url';

  // Open Graph fields
  const FIELD_OG_TITLE = 'og_title';
  const FIELD_OG_TYPE = 'og_type';
  const FIELD_OG_IMAGE = 'og_image';
  const FIELD_OG_URL = 'og_url';
  const FIELD_OG_DESCRIPTION = 'og_description';
  const FIELD_OG_SITE_NAME = 'og_site_name';

  // Twitter fields
  const FIELD_TWITTER_CARD = 'twitter_card';
  const FIELD_TWITTER_SITE = 'twitter_site';
  const FIELD_TWITTER_IMAGE = 'twitter_image';
  const FIELD_TWITTER_TITLE = 'twitter_title';
  const FIELD_TWITTER_DESCRIPTION = 'twitter_description';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(static::TABLE_NAME, function (Blueprint $table) {
      $table->id();
      $table->string(static::FIELD_SLUG, 100)->comment('Slug que identifica a una página en la web');
      $table->string(static::FIELD_TITLE)->comment('Título de la página');
      $table->string(static::FIELD_DESCRIPTION)->comment('Descripción deseada en buscadores');
      $table->string(static::FIELD_KEYWORDS, 300)->comment('Palabras clave de la página');
      $table->string(static::FIELD_CANONICAL_URL)->comment('Url absoluta que identifica a la página de forma inequívoca');
      $table->string(static::FIELD_OG_TITLE)->comment('Título para el meta og:title de');
      $table->string(static::FIELD_OG_TYPE)->comment('Tipo de contenido para el meta og:type');
      $table->string(static::FIELD_OG_IMAGE)->comment('Url de la imagen deseada en el meta og:image');
      $table->string(static::FIELD_OG_URL)->comment('Url del contenido posicionado en el meta og:url');
      $table->string(static::FIELD_OG_DESCRIPTION)->comment('Descripción para el meta og:description');
      $table->string(static::FIELD_OG_SITE_NAME)->comment('Nombre del sitio web');
      $table->string(static::FIELD_TWITTER_CARD)->comment('Tipo de tarjeta para el meta twitter:card');
      $table->string(static::FIELD_TWITTER_SITE)->comment('Nombre de la web para el meta twitter:site');
      $table->string(static::FIELD_TWITTER_IMAGE)->comment('Url de la imagen deseada en el meta twitter:image');
      $table->string(static::FIELD_TWITTER_TITLE)->comment('Título para el meta twitter:title');
      $table->string(static::FIELD_TWITTER_DESCRIPTION)->comment('Descripción para el meta twitter:description');

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
