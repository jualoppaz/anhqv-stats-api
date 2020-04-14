<?php

namespace App\Http\Controllers;

use Anhqv\Actor\ActorRepoInterface;
use Illuminate\Http\Request;
use Utils;

class ActorController extends Controller
{
  // Log levels
  const LOG_LEVEL_INFO = LOG_LEVEL_INFO;
  const LOG_LEVEL_DEBUG = LOG_LEVEL_DEBUG;

  // HTTP status codes
  const HTTP_OK = HTTP_OK;

  // Fields
  const ID = 'id';
  const NAME = 'name';
  const SURNAME = 'surname';
  const NICKNAME = 'nickname';
  const PAGE = 'page';
  const PER_PAGE = 'per_page';

  protected $rules_index = [
      self::NAME => 'sometimes|required',
      self::PAGE => 'required_with:per_page|integer|min:1',
      self::PER_PAGE => 'required_with:page|integer|min:1',
  ];

  public function __construct(ActorRepoInterface $actorRepo)
  {
    $this->className = class_basename($this);

    $this->actorRepo = $actorRepo;
  }

  /**
   * @OA\Get(
   *  path="/actors",
   *  summary="Mostrar actores",
   *  tags={"actors"},
   *  @OA\Response(
   *    response=200,
   *    description="Listado con los actores consultados."
   *  )
   * )
   */
  public function index(Request $request)
  {
    $methodName = __FUNCTION__;
    Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Access');

    $data = $request->validate($this->rules_index);

    $name = isset($data[static::NAME]) ? $data[static::NAME] : null;
    $page = isset($data[static::PAGE]) ? $data[static::PAGE] : null;
    $perPage = isset($data[static::PER_PAGE]) ? $data[static::PER_PAGE] : null;

    $filters = [
        static::NAME => $name,
    ];

    $visibleFields = [
        static::ID, static::NAME, static::SURNAME,
    ];

    $res = $this->actorRepo->getPaginated($request, $filters, $page, $perPage, $visibleFields);

    Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Exit');
    return response()->json($res, static::HTTP_OK, [], JSON_PRETTY_PRINT);
  }
}
