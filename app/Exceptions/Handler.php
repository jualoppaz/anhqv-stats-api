<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;
use Log;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Utils;
use \Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{

    // Log levels
    const LOG_LEVEL_ERROR = LOG_LEVEL_ERROR;

    const HTTP_BAD_REQUEST = HTTP_BAD_REQUEST;
    const HTTP_FORBIDDEN = HTTP_FORBIDDEN;
    const HTTP_NOT_FOUND = HTTP_NOT_FOUND;
    const HTTP_UNPROCESSABLE_ENTITY = HTTP_UNPROCESSABLE_ENTITY;
    const HTTP_INTERNAL_SERVER_ERROR = HTTP_INTERNAL_SERVER_ERROR;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $e)
    {

        $class_name = class_basename($this);
        $method_name = __FUNCTION__;

        if ($e instanceof ModelNotFoundException) {
            $error_code = static::HTTP_NOT_FOUND;
            $message = 'Record not found';

            Utils::log(static::LOG_LEVEL_ERROR, $class_name, $method_name, $message);

            $json = compact('error_code', 'message');
        } elseif ($e instanceof ValidationException) {
            $error_code = static::HTTP_UNPROCESSABLE_ENTITY;
            $messages = $e->validator->getMessageBag();
            $validations = $messages;

            Utils::log(static::LOG_LEVEL_ERROR, $class_name, $method_name, $validations);

            $json = compact('error_code', 'validations');
        } elseif ($e instanceof QueryException) {
            $error_code = static::HTTP_INTERNAL_SERVER_ERROR;
            $message = $e->getMessage();

            Utils::log(static::LOG_LEVEL_ERROR, $class_name, $method_name, $message);

            $json = compact('error_code', 'message');
        } elseif ($e instanceof NotFoundHttpException) {
            $error_code = $e->getStatusCode();
            $message = 'Route not found';

            if ($e->getStatusCode() !== 500) {
                Utils::log(static::LOG_LEVEL_ERROR, $class_name, $method_name, $message);
            }

            $json = compact('error_code', 'message');
        } elseif ($e instanceof HttpException) { // Error interno del servidor (logica de negocio)
            $error_code = $e->getStatusCode();
            $message = $e->getMessage();

            if ($e->getStatusCode() !== 500) {
                Utils::log(static::LOG_LEVEL_ERROR, $class_name, $method_name, $message);
            }

            $json = compact('error_code');
        } else if ($e instanceof AuthenticationException) {
            $error_code = static::HTTP_FORBIDDEN;
            $message = $e->getMessage();

            $json = compact('error_code', 'message');
        } else {
            $error_code = static::HTTP_INTERNAL_SERVER_ERROR;
            $message = $e->getMessage();

            Utils::log(static::LOG_LEVEL_ERROR, $class_name, $method_name, "Excepcion no tratada explicitamente");
            Utils::log(static::LOG_LEVEL_ERROR, $class_name, $method_name, $message);

            $json = compact('error_code', 'message');
        }

        return response()->json(
            $json
            , $error_code, [], JSON_PRETTY_PRINT);
    }
}
