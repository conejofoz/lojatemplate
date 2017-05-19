<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of homeController
 *
 * @author geral
 */
class homeController extends controller {

    public function index() {
        $fotos = new fotos();
        $dados['fotos'] = $fotos->getFotos();
        $this->loadTemplate('home', $dados);
    }
    
    public function sobre(){
        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }

}
