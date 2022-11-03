<?php
// @author      Vladislav Sarychev <https://github.com/Laiter/Slim-2-php-8.1>
// Fix to support PHP 8.0+
if (!function_exists('get_magic_quotes_gpc'))   {
    function get_magic_quotes_gpc() { return false; }
}
