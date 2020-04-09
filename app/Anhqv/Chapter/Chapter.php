<?php

namespace Anhqv\Chapter;

use Anhqv\Base\BaseEntity;

use Carbon\Carbon;

class Chapter extends BaseEntity
{
    protected $table = 'chapters';
    protected $primaryKey = 'id';

    protected $attributes = [
        'name', 'slug', 'season', 'summary', 'image_url',
    ];

    public function getReleaseDateAttribute()
    {
      return Carbon::parse($this->attributes['release_date'])->format('d/m/Y');
    }
}
