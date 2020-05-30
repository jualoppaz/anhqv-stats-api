<?php namespace Anhqv\Scene;

use Anhqv\Base\BaseRepo;
use Illuminate\Http\Request;

class SceneRepo extends BaseRepo implements SceneRepoInterface
{

  protected $model;

  public function __construct()
  {
    $this->model = new Scene;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function setModel(Scene $scene)
  {
    $this->model = $scene;
    return $this->model;
  }
}
