<?php
/**
 * Created by PhpStorm.
 * User: mallmann
 * Date: 03/09/17
 * Time: 16:51
 */

namespace Models;


use Core\CoreModel;

class Anuncios extends CoreModel
{

    public function getQuantidade()
    {
        $sql = "SELECT * FROM anuncios";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        return $sql->rowCount();
    }

}