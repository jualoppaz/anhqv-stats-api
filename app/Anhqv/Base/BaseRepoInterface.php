<?php namespace Anhqv\Base;

interface BaseRepoInterface
{

    /**
     * Method for get all models.
     *
     * @author jualoppaz
     */
    public function all();

    /**
     * Method for retrieve a model by its id.
     *
     * @author jualoppaz
     */
    public function find($id);

    /**
     * Method for retrieve a model by its id. If it doesn't exist an exception will be throwed.
     *
     * @author jualoppaz
     */
    public function findOrFail($id);

    /**
     * Method for create a model from a given params array.
     *
     * @author jualoppaz
     */
    public function create(array $data);

    /**
     * Method for update a model.
     *
     * @author jualoppaz
     */
    public function update(BaseEntity $entity, array $data);

    /**
     * Method for update a model. It it doesn't exist it will be created.
     *
     * @author jualoppaz
     */
    public function updateOrCreate(array $criteria, array $data);

    /**
     * Method for delete a model.
     *
     * @author jualoppaz
     */
    public function delete($entity);
}
