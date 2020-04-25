<?php

namespace App\Http\Controllers;

use Anhqv\SeoConfig\SeoConfigRepoInterface;
use Illuminate\Http\Request;
use Utils;

class SeoConfigController extends Controller
{
  // Log levels
  const LOG_LEVEL_INFO = LOG_LEVEL_INFO;
  const LOG_LEVEL_DEBUG = LOG_LEVEL_DEBUG;

  // HTTP status codes
  const HTTP_OK = HTTP_OK;

  // Fields
  const ID = 'id';
  const SLUG = 'slug';

  public function __construct(SeoConfigRepoInterface $seoConfigRepo)
  {
    $this->className = class_basename($this);

    $this->seoConfigRepo = $seoConfigRepo;
  }

  /**
   * @OA\Get(
   *  path="/seo-configs/{slug}",
   *  summary="Mostrar configuraciones de SEO de una página dado su slug",
   *  tags={"seo configs"},
   *  @OA\Parameter(
   *    name="slug",
   *    description="Slug que identifica al conjunto de configuraciones de una página en concreto",
   *    required=true,
   *    in="path",
   *    @OA\Schema(
   *      type="string"
   *    )
   * ),
   *  @OA\Response(
   *    response=200,
   *    description="Conjunto de configuraciones de SEO de una página."
   *  )
   * )
   */
  public function show(Request $request, $slug)
  {
    $methodName = __FUNCTION__;
    Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Access');

    $res = $this->seoConfigRepo->findBySlug($slug);

    Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Exit');
    return response()->json($res, static::HTTP_OK, [], JSON_PRETTY_PRINT);
  }
}
