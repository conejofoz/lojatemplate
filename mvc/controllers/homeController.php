<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of homeController
 *
 * @author conejo
 */
class homeController extends controller {
    public function index(){
        $usuario = new usuario();
        $usuario->setName('Silvio');
        $dados = array('name' => $usuario->getName());
        $this->loadTemplate('home', $dados);
    }
}
