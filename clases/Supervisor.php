<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Supervisor
 *
 * @author Alberto Damelles
 */

include_once 'Anuncio.php';



class Supervisor extends Funcionario {
    private $anuncios;//lista de anuncios a aprobar
    private $email;

    public function Email($mail)
    {
        $this->email = $mail;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function aceptarAnuncio($idAnuncio) {

        //saca el anuncio de la lista del supervisor
        $i = 0;
        while($idAnuncio != $anuncios[$i].getId()){
             //revisar memoria
            unset($anuncios[$i]);
            $i++;
        }
       
    }

    public function agregarAnuncio($a){
        $this->anuncios[$this->anuncios->count()]=$a;
    }

   
   
}
