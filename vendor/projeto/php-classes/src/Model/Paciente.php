<?php

/**
 * Created by PhpStorm.
 * User: ANDRE
 * Date: 05/05/2019
 * Time: 20:44
 */

namespace Projeto\Model;

use Projeto\DB\Sql;
use Projeto\Model;

class Paciente extends Model {

//    private $nome;
//    private $rg;
//    private $cpf;
//    private $endereco;
//    private $telefone;
//    private $dtNascimento;

    public function adicionarPaciente() {

        $sql = new Sql();
        $results = $sql->select("CALL sp_salva_paciente (:nome,  :rg, :cpf,  :endereco, :telefone, :dtnascimento)", array(
            ":nome" => $this->getnome(),
            ":rg" => $this->getrg(),
            ":cpf" => $this->getcpf(),
            ":endereco" => $this->getendereco(),
            ":telefone" => $this->gettelefone(),
            ":dtnascimento" => $this->getdtnascimento()
        ));
        var_dump($results);
        //$this->setData($results[0]);
    }

    public static function listarPacientes() {
        $sql = new Sql();

        
        //a linha abaixo deverá ser descomentada
        //return $sql->select("SELECT * FROM paciente");
        return $sql->select("select * from paciente where DtNascPaciente LIMIT 3");
    }
    
    public function get($idPaciente)
    {
        $sql = new Sql();

		$results = $sql->select("SELECT * FROM paciente where NomePaciente = :NomePaciente", array(
			":NomePaciente"=>$nomePaciente
		));
    }

}
