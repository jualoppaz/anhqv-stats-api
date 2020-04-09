<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
* @OA\Info(
    title=SWAGGER_API_TITLE,
    version="0.2.1"
  )
*/

/**
* @OA\Server(url=SWAGGER_API_URL)
*/

/**
 * @OA\Tag(
 *   name="characters",
 *   description="Recursos relacionados con los Personajes"
 * )
 */

 /**
 * @OA\Tag(
 *   name="chapters",
 *   description="Recursos relacionados con los Capítulos"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
