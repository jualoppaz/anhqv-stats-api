<?php namespace Anhqv\Scene;

use Anhqv\Base\BaseEntity;

use Carbon\Carbon;

class Scene extends BaseEntity
{
  protected $table = 'scenes';
  protected $primaryKey = 'id';

  protected $attributes = [
    'image_url', 'image_alt', 'order',
  ];

  public function chapter()
  {
    return $this->belongsTo('Anhqv\Chapter\Chapter', 'chapter_id', 'id');
  }

  public function events()
  {
    return $this->hasMany('Anhqv\Event\Event', 'scene_id', 'id');
  }
}
