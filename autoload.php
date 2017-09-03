<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 03/09/17
 * Time: 12:46
 */

spl_autoload_register(function($class){
    $class = str_replace("\\", '/', $class);
    require_once $class.'.php';
});