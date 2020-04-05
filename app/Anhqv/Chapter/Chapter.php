<?php

namespace Anhqv\Chapter;

use Anhqv\Base\BaseEntity;

class Chapter extends BaseEntity
{
    protected $table = 'chapters';
    protected $primaryKey = 'id';

    protected $attributes = [
        'name', 'slug', 'season', 'summary', 'image_url',
    ];
}
