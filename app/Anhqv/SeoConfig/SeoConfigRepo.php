<?php namespace Anhqv\SeoConfig;

use Anhqv\Base\BaseRepo;
use Illuminate\Http\Request;

class SeoConfigRepo extends BaseRepo implements SeoConfigRepoInterface
{

    protected $model;

    public function __construct()
    {
        $this->model = new SeoConfig;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel(SeoConfig $seoConfig)
    {
        $this->model = $seoConfig;
        return $this->model;
    }

    public function findBySlug($slug){
        return $this->model->where('slug', $slug)->firstOrFail();
    }
}
