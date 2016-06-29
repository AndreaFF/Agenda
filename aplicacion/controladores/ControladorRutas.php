<?php

require_once CONTROLADORES.'/ControladorContactos.php';
/**
 * Description of ControladorRutas
 *
 * @author Intergrupo_porta_11
 */
class ControladorRutas {
    
    private $ControladorContactos;
    
    public function __construct (){
        $this->ControladorContactos = new ControladorContactos();
    }
    
    public function gestionarRuta(){
        if (isset($_REQUEST['accion'])){
            switch ($_REQUEST['accion']) {
                
                case 'insertar':
                    $this->ControladorContactos->insertar_contacto();
                    break;
                
                case 'vistainsertar':
                    $this->ControladorContactos->formulario_insertar_contacto();
                    break;
                
                case 'editar':
                    $this->ControladorContactos->editar_contacto();
                    break;
                
                case 'vistaeditar':
                    $this->ControladorContactos->formulario_editar_contacto();
                    break;
                
                case 'borrar':
                    $this->ControladorContactos->borrar_contacto();
                    break;
                
                case 'listar':
                    $this->ControladorContactos->listar_contactos();
                    break;
                
                case 'mostrar':
                    $this->ControladorContactos->mostrar_contacto();
                    break;
            }
        } else {
            $this->ControladorContactos->pagina_principal();
        }
    }
}
