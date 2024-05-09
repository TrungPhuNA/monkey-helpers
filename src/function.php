<?php
/**
 * Created By PhpStorm
 * User: trungphuna
 * Date: 5/10/24
 * Time: 1:06 AM
 */

if (!function_exists('get_data_user')) {
    function get_data_user($type, $field = 'id')
    {
        return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field : '';
    }
}

if (!function_exists('helpers_check')) {
    function helpers_check(): string
    {
        return "success";
    }
}