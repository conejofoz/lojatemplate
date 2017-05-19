<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of fotos
 *
 * @author conejo
 */
class fotos extends model {
    public function getFotos(){
        $array = array();
        $sql = "SELECT * FROM fotos";
        $sql = $this->db->query($sql);
        if($sql->rowCount()> 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
}
