<?php
/**
 * Created by PhpStorm.
 * User: ANDRE
 * Date: 01/05/2019
 * Time: 17:48
 */
namespace Projeto;
use Projeto\Page;
class PageAdmin extends Page
{
    public function __construct(array $opts = array(), $tpl_dir = "/projetosite/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }
}