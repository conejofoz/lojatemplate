<?php
class empresaController extends controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $dados = array();
        
        
        
        $this->loadTemplate('empresa', $dados);
    }
}
