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

    protected $appends = [
      'parsed_duration',
    ];

    public function getReleaseDateAttribute()
    {
      return Carbon::parse($this->attributes['release_date'])->format('d/m/Y');
    }

    public function getParsedDurationAttribute(){
      $duration = $this->attributes['duration'];

      if (isset($duration)) {
        $duration_sec = $duration * 60;
        $parsed_hour = intval(gmdate('G', $duration_sec));
        $parsed_min = intval(gmdate('i', $duration_sec));

        if ($parsed_hour > 0) $res = $parsed_hour . 'h';
        if ($parsed_min > 0) $res .= ' ' . $parsed_min . 'm';

        return $res;
      }

      return null;
    }
}
