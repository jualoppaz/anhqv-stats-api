<?php

namespace App\Http\Controllers;

use Anhqv\Chapter\ChapterRepoInterface;
use Illuminate\Http\Request;
use Utils;

class ChapterController extends Controller
{
  // Log levels
  const LOG_LEVEL_INFO = LOG_LEVEL_INFO;
  const LOG_LEVEL_DEBUG = LOG_LEVEL_DEBUG;

  // HTTP status codes
  const HTTP_OK = HTTP_OK;

  // Fields
  const FIELD_ID = 'id';
  const FIELD_NAME = 'name';
  const FIELD_SLUG = 'slug';
  const FIELD_SEASON = 'season';
  const FIELD_SUMMARY = 'summary';
  const FIELD_IMAGE_URL = 'image_url';
  const PAGE = 'page';
  const PER_PAGE = 'per_page';

  protected $rules_index = [
      self::FIELD_SEASON => 'sometimes|required',
      self::PAGE => 'required_with:per_page|integer|min:1',
      self::PER_PAGE => 'required_with:page|integer|min:1',
  ];

  public function __construct(ChapterRepoInterface $chapterRepo)
  {
      $this->className = class_basename($this);

      $this->chapterRepo = $chapterRepo;
  }

  /**
   * @OA\Get(
   *  path="/chapters",
   *  summary="Mostrar capítulos",
   *  tags={"chapters"},
   *  @OA\Response(
   *    response=200,
   *    description="Listado con los capítulos consultados."
   *  )
   * )
   */
  public function index(Request $request)
  {
      $methodName = __FUNCTION__;
      Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Access');

      $data = $request->validate($this->rules_index);

      $season = isset($data[static::FIELD_SEASON]) ? $data[static::FIELD_SEASON] : null;
      $page = isset($data[static::PAGE]) ? $data[static::PAGE] : null;
      $perPage = isset($data[static::PER_PAGE]) ? $data[static::PER_PAGE] : null;

      $filters = [
          static::FIELD_SEASON => $season,
      ];

      $visibleFields = [];

      $res = $this->chapterRepo->getPaginated($request, $filters, $page, $perPage, $visibleFields);

      Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Exit');
      return response()->json($res, static::HTTP_OK, [], JSON_PRETTY_PRINT);
  }

  /**
   * @OA\Get(
   *  path="/chapters/{slug}",
   *  summary="Mostrar detalle de capítulo",
   *  tags={"chapters"},
   *  @OA\Parameter(
   *    name="slug",
   *    description="Slug que identifica al capítulo de forma única",
   *    required=true,
   *    in="path",
   *    @OA\Schema(
   *      type="string"
   *    )
   * ),
   *  @OA\Response(
   *    response=200,
   *    description="Detalle del capítulo consultado."
   *  )
   * )
   */
  public function show(Request $request, $slug)
  {
      $methodName = __FUNCTION__;
      Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Access');

      $res = $this->chapterRepo->findBySlug($slug);

      Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Exit');
      return response()->json($res, static::HTTP_OK, [], JSON_PRETTY_PRINT);
  }
}
