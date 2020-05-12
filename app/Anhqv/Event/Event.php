<?php namespace Anhqv\Event;

use Anhqv\Base\BaseEntity;

use Carbon\Carbon;

class Event extends BaseEntity
{
  protected $table = 'events';
  protected $primaryKey = 'id';

  protected $attributes = [
    'image_url', 'image_alt', 'order', 'text',
  ];

  public function characters()
  {
    return $this->belongsToMany('Anhqv\Character');
  }
}
