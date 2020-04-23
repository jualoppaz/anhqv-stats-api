<?php namespace Anhqv\SeoConfig;

use Anhqv\Base\BaseRepoInterface;

interface SeoConfigRepoInterface extends BaseRepoInterface
{
    /**
     * Method for get one model by the given slug.
     *
     * @author jualoppaz
     */
    public function findBySlug($slug);
}
