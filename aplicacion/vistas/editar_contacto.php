<?php
require_once LAYOUTS.'/cabecera.php';
?>

        <section>
            <header>
                <h2>
                    Formulario Contacto - Editar
                </h2>
            </header>

            <article>
                <form action="<?= URLAPLICACION ?>/index.php?accion=editar" enctype="multipart/form-data" method="post">
                    <fieldset>
                      <?php if (isset($contacto)): ?>

                        <img src="<?= URLIMAGENESDATOS ?>/<?= $contacto->getImagen() ?>" alt="Contacto <?= $contacto->getNombre() ?>" />

                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" value="<?= $contacto->getNombre() ?>" placeholder="<?= $contacto->getNombre() ?>" required/>
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" name="apellidos" value="<?= $contacto->getApellido() ?>" placeholder="<?= $contacto->getApellido() ?>" required/>
                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion" value="<?= $contacto->getDireccion() ?>" placeholder="<?= $contacto->getDireccion() ?>" required/>
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" name="telefono" value="<?= $contacto->getTelefono() ?>" placeholder="<?= $contacto->getTelefono() ?>" required/>
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="<?= $contacto->getEmail() ?>" placeholder="<?= $contacto->getEmail() ?>" required/>
                        <label for="imagen">Imagen:</label>
                        <input type="file" name="fichero" value="" />

                        <input class="boton" type="submit" name="enviar" value="Enviar" />
                        <input type="hidden" name="id" value="<?= $contacto->getId() ?>" />
                        <input type="hidden" name="imagen" value="<?= $contacto->getImagen() ?>" />
                        <input type="hidden" name="contador_visitas" value="<?= $contacto->getContador_visitas() ?>" />


                      <?php endif; ?>
                    </fieldset>
                </form>
            </article>
        </section>

        <?php
        require_once LAYOUTS.'/pie.php';
        ?>
