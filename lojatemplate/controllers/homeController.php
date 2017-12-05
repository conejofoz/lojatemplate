<?php
class homeController extends controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        
        $produtos = new produtos();
        $dados['produtos'] = $produtos->listar(12);
        
        $this->loadTemplate('home', $dados);
    }
    
    public function sobre(){
        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }

}
