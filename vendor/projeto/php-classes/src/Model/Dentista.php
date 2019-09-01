<?php


namespace Projeto\Model;

use Projeto\DB\Sql;
use Projeto\Model;

class Dentista extends Model{
public static function listarDentistas(){
         $sql = new Sql();

        return $sql->select("SELECT * FROM dentista");
    }
}