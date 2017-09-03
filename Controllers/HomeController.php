<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 03/09/17
 * Time: 13:28
 */
namespace Controllers;

use Core\CoreController;
use Models\Anuncios;

class HomeController extends CoreController
{

    function indexAction()
    {
        $anuncios = new Anuncios();

        $dados = array(
            'qtd' => $anuncios->getQuantidade()
        );

        $this->loadTemplate('home', $dados);
    }

}