<?php namespace Anhqv\Chapter;

use Anhqv\Base\BaseRepo;
use Illuminate\Http\Request;

class ChapterRepo extends BaseRepo implements ChapterRepoInterface
{

  protected $model;

  public function __construct()
  {
    $this->model = new Chapter;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function setModel(Chapter $chapter)
  {
    $this->model = $chapter;
    return $this->model;
  }

  public function getPaginated(Request $request, $filters, $page, $perPage, array $visibleFields)
  {

    $query = $this->getModel();

    // Aplicamos los filtros

    $season = $filters['season'];

    if (isset($season)) {
      $query = $query->where('season', $season);
    }

    if (!isset($perPage)) {
      $perPage = $query->count();
      $page = 1;
    }

    // Aplicamos la ordenacion
    $query = $query->orderBy('slug', 'ASC');

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
