<?php

namespace Anhqv\Actor;

use Anhqv\Base\BaseEntity;

use Carbon\Carbon;

class Actor extends BaseEntity
{
  protected $table = 'actors';
  protected $primaryKey = 'id';

  protected $attributes = [
      'name', 'surname', 'second_surname', 'birthdate', 'deathdate'
  ];

  protected $appends = [
    'parsed_birthdate',
    'parsed_deathdate'
  ];

  public function getParsedBirthdateAttribute()
  {
    $birthdate = $this->attributes['birthdate'];
    if (isset($birthdate)) return Carbon::parse($birthdate)->format('d/m/Y');

    return null;
  }

  public function getParsedDeathdateAttribute()
  {
    $deathdate = $this->attributes['deathdate'];
    if (isset($deathdate)) return Carbon::parse($deathdate)->format('d/m/Y');

    return null;
  }
}
