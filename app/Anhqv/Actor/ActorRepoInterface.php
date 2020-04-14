<?php namespace Anhqv\Actor;

use Anhqv\Base\BaseRepoInterface;

interface ActorRepoInterface extends BaseRepoInterface
{
    /**
     * Method for get one model by the given slug.
     *
     * @author jualoppaz
     */
    public function findBySlug($slug);
}
