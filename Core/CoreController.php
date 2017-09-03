<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 03/09/17
 * Time: 14:45
 */

namespace Core;


class CoreController
{

    public function loadTemplate($viewName, $viewData = array())
    {
        require 'views/template.php';
    }

    private function loadView($viewName, $viewData = array())
    {
        extract($viewData);
        require_once 'views/'.$viewName.'.php';
    }
}