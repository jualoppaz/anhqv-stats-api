<?php namespace Anhqv\Character;

use Anhqv\Base\BaseRepoInterface;

interface CharacterRepoInterface extends BaseRepoInterface
{
    /**
     * Method for get one model by the given slug.
     *
     * @author jualoppaz
     */
    public function findBySlug($slug);
}
