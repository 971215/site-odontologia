<?php

namespace Projeto\Model;

use Projeto\DB\Sql;
use Projeto\Model;
use Projeto\Model\Paciente;

//use Projeto\Model\Dentista;
class Servico extends Model {

    public function adicionarServico() {
        $sql = new Sql();
        $results = $sql->select("CALL sp_salva_servico (:descricao, :preco, :idPaciente, :idDentista)", array(
            ":descricao" => $this->getdescricao(),
            ":preco" => $this->getpreco(),
            ":idPaciente" => $this->getIdPaciente(),
            ":idDentista" => $this->getlogin(),
            //a linha comentada abaixo chama o método que cria um hash para a senha
            //-----":senha" => Usuario::getPasswordHash($this->getsenha())----
            ":senha" => $this->getsenha()
        ));
    }

    public function getIdPaciente() {
        $paciente = new Paciente();
        $sql = new Sql();
    }
    
    public static function listarServicos(){
         $sql = new Sql();

        return $sql->select("SELECT * FROM servico");
    }

}
