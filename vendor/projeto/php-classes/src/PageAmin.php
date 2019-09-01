<?php
/**
 * Created by PhpStorm.
 * User: ANDRE
 * Date: 01/05/2019
 * Time: 17:48
 */
namespace Hcode;
class PageAmin extends \Hcode\Page
{
    public function __construct(array $opts = array(), $tpl_dir = "/prototipo/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }
}