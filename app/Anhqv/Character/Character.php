<?php

namespace Anhqv\Character;

use Anhqv\Base\BaseEntity;

class Character extends BaseEntity
{
  protected $table = 'characters';
  protected $primaryKey = 'id';

  protected $attributes = [
      'name', 'surname', 'nickname',
  ];
}
