<?php

namespace Anhqv\Actor;

use Anhqv\Base\BaseEntity;

class Actor extends BaseEntity
{
    protected $table = 'actors';
    protected $primaryKey = 'id';

    protected $attributes = [
        'name', 'surname', 'second_surname', 'birthdate', 'deathdate'
    ];
}
