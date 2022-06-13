<?php

namespace System\Materials\Display;

defined('__PROJECT_DIR__') or define('__PROJECT_DIR__', $_SERVER['DOCUMENT_ROOT']);

require_once(__PROJECT_DIR__."/System/Core/DefaultController.php");
use System\Core\DefaultController;


class MainController extends DefaultController{

    public static function Setup(){
        $instance = new MainController();
    }

    public function __construct(){
        $this->OnPageLoad();
    }

    private function OnPageLoad(){
        $view = $this->parseView(__PROJECT_DIR__."/System/Materials/Display/View/Main.html",
            [
                "ProdutoID"=>"100002",
                "ProdutoNome"=>"Arroz",
                "ProdutoValidade"=>"2022-08-14",
                "ProdutoReposicaoData"=>"2022-06-02",
                "ProdutoUltimoRepositor"=>"Thaís Freitas"
            ]);

        print_r($view);
    }
}

MainController::Setup();