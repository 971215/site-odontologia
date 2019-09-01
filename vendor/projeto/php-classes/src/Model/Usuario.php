<?php

/**
 * Created by PhpStorm.
 * User: ANDRE
 * Date: 05/05/2019
 * Time: 20:56
 */

namespace Projeto\Model;

use Projeto\DB\Sql;
use Projeto\Model;

class Usuario extends Model {

    const SESSION = "Usuario";

    public static function login($login, $senha) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM usuario WHERE LoginUsuario = :LOGIN", array(
            ":LOGIN" => $login
        ));

        if (count($results) === 0) {
            throw new \Exception("Usuário inexistente ou senha inválida.");
        }
        var_dump($results);
        
        $data = $results[0];
        
        /**
         * obs a linha abaixo está comentada por está ocorrendo um erro na 
         * autenticação durante a comparação entre a senha digitada no formulário
         * e o hash no banco de dados 
         */
        //if (password_verify($senha, $data["SenhaUsuario"]) === TRUE) {
            
        if ($senha === $data["SenhaUsuario"]) {
            $usuario = new Usuario();

            $data['NomeUsuario'] = utf8_encode($data['NomeUsuario']);

            $usuario->setData($data);

            $_SESSION[Usuario::SESSION] = $usuario->getValues();
            
            var_dump($usuario);
            
            return $usuario;
            
        } else {
            throw new \Exception("Usuário inexistente ou senha inválida.");
        }
    }

    public static function verificarLogin()
    {
        if (
            !isset($_SESSION[Usuario::SESSION])
            ||
            !$_SESSION[Usuario::SESSION]
            ||
            !(int)$_SESSION[Usuario::SESSION]["idUsuario"] > 0

        ){
            header("Location: admin/login");
            exit;
        }
    }
    
    public static function logout()
    {
        $_SESSION[Usuario::SESSION] = NULL;
    }

    public function adicionarUsuario() {
        $sql = new Sql();
        $results = $sql->select("CALL sp_salva_usuario (:nome, :login, :senha)", array(
            ":nome" => $this->getnome(),
            ":login" => $this->getlogin(),
            //a linha comentada abaixo chama o método que cria um hash para a senha
            //-----":senha" => Usuario::getPasswordHash($this->getsenha())----
            ":senha" => $this->getsenha()
        ));



       // $this->setData($results[0]);
    }
    public static function getPasswordHash($senha)
    {

        return password_hash($senha, PASSWORD_DEFAULT, [
            'cost'=>12
        ]);

    }

    public static function listarUsuarios() {

        $sql = new Sql();

        return $sql->select("SELECT * FROM usuario");
    }
    
    //OBS: O método abaixo está imcompleto
    public function get($idUsuario)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM usuario where idUsuario = :idUsuario", array(
			":idUsuario"=>$idUsuario
		));

		$data = $results[0];

		$data['NomeUsuario'] = utf8_encode($data['NomeUsuario']);


		$this->setData($data);

	}

}
