<?php

require_once MODELOS.'/ModeloContacto.php';
require_once CLASES.'/Contacto.php';

/**
 * Description of ControladorContactos
 *
 * @author Intergrupo_porta_11
 */
class ControladorContactos {
    
    private $modelo;
    
    public function __construct() {
        $this->modelo = new ModeloContacto();
    }
    
    private function llamarVista($vista,$datos){
        ob_start(); 
        
        if (!empty($datos)){
            extract($datos);
        }
        
        require VISTAS.'/'.$vista.'.php';
        ob_end_flush();
    }
    
    public function pagina_principal (){
        $datos ['contactos'] = $this->modelo->getContactos();
        $this->llamarVista('pagina_principal', $datos);
    }
    
    public function listar_contactos (){
        $datos ['contactos'] = $this->modelo->getContactos();
        $this->llamarVista('listar_contactos', $datos);
    }
    
    public function mostrar_contacto (){
        $id = $_REQUEST['id'];
        $oContacto = new Contacto();
        $oContacto->setId($id);
        $contacto_resultado = $this->modelo->buscarContacto($oContacto);
        $datos ['contacto'] = $contacto_resultado;
        $this->llamarVista('mostrar_contacto', $datos);
        $contacto_resultado->incrementarContadorVisitas();
        $this->modelo->actualizarContacto ($contacto_resultado);
    }
    
    public function borrar_contacto() {
        $id = $_REQUEST['id'];
        $oContacto = new Contacto();
        $oContacto->setId($id);
        $contacto_resultado = $this->modelo->buscarContacto($oContacto);
        //borrar foto de la carpeta
        if(strcmp($contacto_resultado->getImagen(),"foto.png")!=0){
                unlink(IMAGENESDATOS."/".$contacto_resultado->getImagen());
        }
        $this->modelo->borrarContacto ($contacto_resultado);
        $datos ['mensaje'] = "El contacto ha sido borrado correctamente";
        $this->llamarVista('mostrar_mensajes', $datos);
    }

    private function upload_foto() {
        // Subir fichero
        if($_FILES['fichero']['name']) {
            if(!$_FILES['fichero']['error']) {
                $nuevo_nombre = md5_file($_FILES['fichero']['tmp_name']);
                move_uploaded_file($_FILES['fichero']['tmp_name'], IMAGENESDATOS."/".$nuevo_nombre);
            }
        }
        else {
            $nuevo_nombre = 'foto.png';
        }

        return $nuevo_nombre;
    }
    
    public function formulario_editar_contacto(){
        $id = $_REQUEST['id'];
        $oContacto = new Contacto();
        $oContacto->setId($id);
        $contacto_resultado = $this->modelo->buscarContacto($oContacto);
        $datos ['contacto'] = $contacto_resultado;
        $this->llamarVista('editar_contacto', $datos);
    }
    
    public function editar_contacto (){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellidos'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $imagen = $_POST['imagen'];
        $contador_visitas = $_POST['contador_visitas'];
        $oContacto = new Contacto($nombre, $apellido, $direccion, $telefono, $email, "", $id, $contador_visitas);
        if(!empty($_FILES['fichero']['name'])) {
            //Borrar la imagen que tenía anteriormente en la carpeta
            if(strcmp($imagen,"foto.png")!=0){
                unlink(IMAGENESDATOS."/".$imagen);
            }
            $oContacto->setImagen($this->upload_foto());
        } else {
            $oContacto->setImagen($imagen);
        }
        $this->modelo->actualizarContacto ($oContacto);
        $datos ['mensaje'] = "El contacto ha sido actualizado correctamente";
        $this->llamarVista('mostrar_mensajes', $datos);

    }
    
    public function formulario_insertar_contacto(){
        $this->llamarVista('insertar_contacto', null);
    }
    
    public function insertar_contacto(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellidos'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $oContacto = new Contacto($nombre, $apellido, $direccion, $telefono, $email, "", 0, 0);
        $oContacto->setImagen($this->upload_foto());
        $this->modelo->insertarContacto ($oContacto);
        $datos ['mensaje'] = "El contacto ha sido insertado correctamente";
        $this->llamarVista('mostrar_mensajes', $datos);
    }
}
