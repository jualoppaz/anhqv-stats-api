<?php namespace Anhqv\Actor;

use Anhqv\Base\BaseRepo;
use Illuminate\Http\Request;

class ActorRepo extends BaseRepo implements ActorRepoInterface
{

    protected $model;

    public function __construct()
    {
        $this->model = new Actor;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel(Actor $actor)
    {
        $this->model = $actor;
        return $this->model;
    }

    public function getPaginated(Request $request, $filters, $page, $perPage, array $visibleFields)
    {

        $query = $this->getModel();

        // Aplicamos los filtros

        $name = $filters['name'];

        if (isset($name)) {
            $query = $query->where('name', 'like', '%' . $name . '%');
        }

        if (!isset($perPage)) {
            $perPage = $query->count();
            $page = 1;
        }

        // Aplicamos la paginacion
        $query = $query
            ->paginate($perPage, ['*'], 'page', $page)
            ->appends($request->except('pagina'));

        // El map hay que hacerlo en el setCollection para que respete la estructura de la respuesta construida por el paginate
        /*$query->setCollection(
            $query->getCollection()
                ->map(function ($item, $key) use ($visibleFields) {

                    $item->[relationship]];

                    $item->setVisible($visibleFields);

                    return $item;
                })
        );*/

        return $query;

    }

    public function findBySlug($slug){
        return $this->model->where('slug', $slug)->firstOrFail();
    }
}
