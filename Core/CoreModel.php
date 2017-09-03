<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 03/09/17
 * Time: 16:55
 */

namespace Core;


class CoreModel
{

    protected $db;

    function __construct()
    {
        $this->db = CoreConfig::getConnection();
    }

}