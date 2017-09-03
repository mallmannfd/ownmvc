<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 03/09/17
 * Time: 11:14
 */
session_start();
use Core\Core;
require_once 'autoload.php';
require_once 'bootstrap.php';

$core = new Core();
$core->run();