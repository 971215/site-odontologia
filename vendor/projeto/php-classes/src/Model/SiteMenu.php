<?php

namespace Projeto\Model;

use Projeto\Model;
use Projeto\DB\Sql;

class SiteMenu extends Model {

    public static function atualizarArquivo() {

        $menus = SiteMenu::listarMenus();
       // var_dump($menus);

        $html = [];

        foreach ($menus as $row) {
            array_push($html, '<li><a href="' . $row['LinkMenu'] . '">' . utf8_encode($row['DescMenu']) . '</a></li>');
        }

        file_put_contents($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "ProjetoSite" . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "site" . DIRECTORY_SEPARATOR . "site-menu.html", implode('', $html));


        $desc = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "ProjetoSite" . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "site" . DIRECTORY_SEPARATOR . "site-menu.html";
//        var_dump($desc);
    }

    public static function listarmenus() {
        $sql = new Sql();

        return $sql->select("SELECT * FROM menuss");
    }

    public function adicionaMenu() {

        $sql = new Sql();

        $results = $sql->select("CALL sp_salva_menu(:link, :descricao)", array(
            ":link" => $this->getlink(),
            ":descricao" => $this->getdescricao()
        ));
//        var_dump($results);
//$this->setData($results[0]);
    }

}
