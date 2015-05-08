<?php
namespace core\library;

class Path
{

    public static function baseUrl()
    {
        return $_SERVER['SERVER_NAME'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
    }
}