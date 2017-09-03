<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 03/09/17
 * Time: 17:00
 */
use Core\CoreConfig;

if (CoreConfig::ENVIRONMENT == 'development')
{
    define('BASE_URL', 'http://localhost/');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'app');
    define('DB_USER', 'root');
    define('DB_PASS', '');
}