<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contacto
 *
 * @author Intergrupo_porta_11
 */
class Contacto {
    private $id;
    private $nombre;
    private $apellido;
    private $direccion;
    private $telefono;
    private $email;
    private $imagen;
    private $contador_visitas;
    
    public function __construct($nombre="",$apellido="",$direccion="",$telefono="",$email="",$imagen="",$id=0,$contador_visitas=0) {
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setDireccion($direccion);
        $this->setTelefono($telefono);
        $this->setEmail($email);
        $this->setImagen($imagen);
        $this->setContador_visitas($contador_visitas);
    }
    
    public function setId ($id){
        $this->id =$id;
    }
    public function getId() {
        return $this->id;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function getApellido() {
        return $this->apellido;
    } 
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
    public function getDireccion() {
        return $this->direccion;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    public function getTelefono() {
        return $this->telefono;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }
    public function getImagen() {
        return $this->imagen;
    }
    public function incrementarContadorVisitas (){
        $this->contador_visitas = $this->contador_visitas + 1;
    }
    public function setContador_visitas($contador_visitas) {
        $this->contador_visitas = $contador_visitas;
    }
    public function getContador_visitas() {
        return $this->contador_visitas;
    }







}
