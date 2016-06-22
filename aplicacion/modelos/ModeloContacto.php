<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once CLASES.'/Contacto.php';
/**
 * Description of ModeloContacto
 *
 * @author Intergrupo_porta_11
 */
class ModeloContacto {
    private $servidor;
    private $usuario;
    private $clave;
    private $basedatos;
    
    public function __construct() {
        $this->setBasedatos(BASEDATOS);
        $this->setClave(CLAVE);
        $this->setServidor(SERVIDOR);
        $this->setUsuario(USUARIO);
    }

    public function getServidor() {
        return $this->servidor;
    }
    public function setServidor($servidor) {
        $this->servidor = $servidor;
    }
    public function getUsuario() {
        return $this->usuario;
    }
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    public function getClave() {
        return $this->clave;
    }
    public function setClave($clave) {
        $this->clave = $clave;
    }
    public function getBasedatos() {
        return $this->basedatos;
    }
    public function setBasedatos($basedatos) {
        $this->basedatos = $basedatos;
    }

    public function insertarContacto ($contacto){
        $conexion = mysql_connect(SERVIDOR, USUARIO, CLAVE)
        or die ("No se pudo conectar a la base de datos");
        
        $base_datos = mysql_select_db(BASEDATOS, $conexion)
        or die ("No se pudo seleccionar la base de datos");

        $consulta = "INSERT INTO contacto (nombre, apellidos, direccion, telefono, email, imagen, "
                . "contador_visitas) VALUES ('".$contacto->getNombre()."', '"
                .$contacto->getApellido()."', '".$contacto->getDireccion()."', '"
                .$contacto->getTelefono()."', '".$contacto->getEmail()."', '"
                .$contacto->getImagen()."', '".$contacto->getContador_visitas()."')";

        mysql_close($conexion);
    }
    
    public function borrarContacto ($contacto){
        $conexion = mysql_connect(SERVIDOR, USUARIO, CLAVE)
        or die ("No se pudo conectar a la base de datos");
        
        $base_datos = mysql_select_db(BASEDATOS, $conexion)
        or die ("No se pudo seleccionar la base de datos");

        $consulta = "DELETE FROM contacto WHERE id=".$contacto->getID();

        mysql_close($conexion);
    }
    
    public function actualizarContacto ($contacto){
        $conexion = mysql_connect(SERVIDOR, USUARIO, CLAVE)
        or die ("No se pudo conectar a la base de datos");
        
        $base_datos = mysql_select_db(BASEDATOS, $conexion)
        or die ("No se pudo seleccionar la base de datos");

        $consulta = "UPDATE contacto SET nombre='".$contacto->getNombre()."', apellidos='"
                .$contacto->getApellido()."', direccion='".$contacto->getDireccion()."', telefono='"
                .$contacto->getTelefono()."', email='".$contacto->getEmail()."', imagen='"
                .$contacto->getImagen()."', contador_visitas='".$contacto->getContador_visitas()."' 
                    WHERE id=".$contacto->getID();

        mysql_close($conexion);
    }
    
    public function getContactos (){
        $conexion = mysql_connect(SERVIDOR, USUARIO, CLAVE)
        or die ("No se pudo conectar a la base de datos");
        
        $base_datos = mysql_select_db(BASEDATOS, $conexion)
        or die ("No se pudo seleccionar la base de datos");

        $consulta = "SELECT * FROM contacto ORDER BY contador_vsitas DESC";

        $resultado = mysql_query($consulta)
        or die ("Consulta fallida: " . mysql_error());

        while ($fila = mysql_fetch_array($resultado)) {
        $oContacto = new Contacto($fila['nombre'], $fila['apellidos'], 
                $fila['direccion'], $fila['telefono'], $fila['email'], $fila['imagen'],
                $fila['id'], $fila['contador_visitas']);
        $aContactos[]=$oContacto;
        unset($oContacto);
        }

        mysql_close($conexion);
        
        return (isset($aContactos) ? $aContactos : null);

    }
    
    public function buscarContacto ($contacto){
      $conexion = mysql_connect(SERVIDOR, USUARIO, CLAVE)
      or die ("No se pudo conectar a la base de datos");

      $base_datos = mysql_select_db(BASEDATOS, $conexion)
      or die ("No se pudo seleccionar la base de datos");

      $consulta = "SELECT * FROM contacto WHERE id=".$contacto->getId();

      $resultado = mysql_query($consulta)
      or die ("Consulta fallida: " . mysql_error());

      $fila = mysql_fetch_array($resultado);
      if (($fila = mysql_fetch_array($resultado))) {
      $oContacto = new Contacto($fila['nombre'], $fila['apellidos'],
              $fila['direccion'], $fila['telefono'], $fila['email'], $fila['imagen'],
              $fila['id'], $fila['contador_visitas']);
      }
        return (isset($oContacto) ? $oContacto : null);
    }
}
