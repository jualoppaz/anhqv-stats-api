<?php

namespace Anhqv\SeoConfig;

use Anhqv\Base\BaseEntity;

use Carbon\Carbon;

class SeoConfig extends BaseEntity
{
  protected $table = 'seo_configs';
  protected $primaryKey = 'id';

  protected $attributes = [
      'slug', 'description', 'title', 'canonical_url', 'og_title', 'og_type', 'og_image', 'og_url', 'og_description', 'twitter_card', 'twitter_site',
  ];
}
