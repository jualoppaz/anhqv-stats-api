<?php namespace Anhqv\Event;

use Anhqv\Base\BaseRepo;
use Illuminate\Http\Request;

class EventRepo extends BaseRepo implements EventRepoInterface
{

  protected $model;

  public function __construct()
  {
    $this->model = new Event;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function setModel(Event $event)
  {
    $this->model = $event;
    return $this->model;
  }
}
