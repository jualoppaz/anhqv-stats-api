<?php

namespace App\Helpers;

use Log;

class Utils{

    const LOG_LEVEL_INFO = LOG_LEVEL_INFO;
    const LOG_LEVEL_DEBUG = LOG_LEVEL_DEBUG;
    const LOG_LEVEL_ERROR = LOG_LEVEL_ERROR;

    function log($level, $class, $function, $text, $array=null){

        $level = strtoupper($level);

        $value = $class . '@' . $function . ' - ' . $text;

        $params = [
            $value
        ];

        if($level === static::LOG_LEVEL_INFO){
            $method = 'Log::info';
        }else if($level === static::LOG_LEVEL_DEBUG){
            $method = 'Log::debug';
        }else if($level === static::LOG_LEVEL_ERROR){
            $method = 'Log::error';
        }else{
            Log::error(strtoupper("No se ha podido escribir en el log al indicarse un nivel de error desconocido."));
            return;
        }

        call_user_func_array($method, $params);
        if(isset($array)){
            call_user_func_array($method, [print_r($array,1)]);
        }
    }
}