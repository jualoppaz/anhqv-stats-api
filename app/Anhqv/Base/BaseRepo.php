<?php namespace Anhqv\Base;

abstract class BaseRepo implements BaseRepoInterface
{

    abstract public function getModel();

    public function all()
    {
        return $this->getModel()->all();
    }

    public function find($id)
    {
        return $this->getModel()->find($id);
    }

    public function findOrFail($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->getModel()->create($data);
    }

    public function update(BaseEntity $entity, array $data)
    {
        $entity->fill($data);
        $entity->save();
        return $entity;
    }

    public function updateOrCreate(array $criteria, array $data){
        return $this->getModel()->updateOrCreate($criteria, $data);
    }

    public function delete($entity)
    {

        if (is_numeric($entity)) {
            $entity = $this->find($entity);
        }

        $entity->delete();
        return $entity;
    }
}
