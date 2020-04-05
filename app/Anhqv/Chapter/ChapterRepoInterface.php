<?php namespace Anhqv\Chapter;

use Anhqv\Base\BaseRepoInterface;

interface ChapterRepoInterface extends BaseRepoInterface
{
    /**
     * Method for get one model by the given slug.
     *
     * @author jualoppaz
     */
    public function findBySlug($slug);
}
