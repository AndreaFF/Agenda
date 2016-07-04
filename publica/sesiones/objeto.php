<?php

class Objeto implements Serializable
{
    private $nombre;

    function __construct($nombre)
    {
        $this->setNombre($nombre);
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function serialize()
    {
        return serialize($this->nombre);
    }

    function unserialize($datos)
    {
        $this->nombre = unserialize($datos);
    }
}
?>
