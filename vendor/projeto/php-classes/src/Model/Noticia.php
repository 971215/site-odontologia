<?php

namespace Projeto\Model;

use Projeto\DB\Sql;
use Projeto\Model;

class Noticia extends Model {
    
    private $nomeImagem;
    
    function getNomeImagem() {
        return $this->nomeImagem;
    }

    function setNomeImagem($nomeImagem) {
        $this->nomeImagem = $nomeImagem;
    }

    
    public static function buscaDestaqueSlide() {

        $sql = new Sql();

        return $sql->select("select * from teste  limit 3");
    }

    public static function listarDestaqueGaleria() {

        $sql = new Sql();

        return $sql->select("select * from teste  order by id desc limit 3,4");
    }

    public static function listarGaleriaCompleta() {

        $sql = new Sql();

        return $sql->select("SELECT * FROM teste");
        
    }

    public static function get(int $id) {
        $sql = new Sql();
//        $results = $sql->select("SELECT * FROM teste WHERE id = :id", [
//            ':id' => $id
//        ]);

        return $sql->select("SELECT * FROM teste WHERE id = :id", [
                    ':id' => $id
        ]);
    }

    public function adicionarNoticia() {

        $sql = new Sql();

        $this->salvaImagem();

        $results = $sql->select("CALL sp_salva_noticia (:titulo, :texto, :url)", array(
            ":titulo" => $this->gettitulo(),
            ":texto" => $this->getcorpo(),
            ":url" => $this->getNomeImagem()
        ));
        var_dump($results);
//$this->setData($results[0]);
    }

    private function salvaImagem() {
//        Diretório onde o arquivo vai ser salvo
        $diretorio = $_SERVER['DOCUMENT_ROOT']
                . DIRECTORY_SEPARATOR
                . "ProjetoSite"
                . DIRECTORY_SEPARATOR
                . "imagens"
                . DIRECTORY_SEPARATOR
                . "noticias"
                . DIRECTORY_SEPARATOR;

        //Criar a pasta de foto 
//        mkdir($diretorio, 0755);
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $this->setNomeImagem($novo_nome);
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome);
    }

}
