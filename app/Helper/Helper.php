<?php

namespace App\Helper;

use App\Models\ErrorLog;

class Helper
{
    public static function errorLogs($function_name, $error)
    {
        $error_log = new ErrorLog;
        $error_log->function_name = $function_name;
        $error_log->exception = $error;
        $error_log->save();
    }

}