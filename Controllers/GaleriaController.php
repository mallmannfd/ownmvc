<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 03/09/17
 * Time: 14:36
 */

namespace Controllers;


use Core\CoreController;

class GaleriaController extends CoreController
{

    function indexAction()
    {
        $dados = [
          'qtd' => 127
        ];
        $this->loadTemplate('galeria', $dados);
    }

}