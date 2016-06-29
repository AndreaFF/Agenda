<?php
require_once LAYOUTS.'/cabecera.php';
?>


        <section>
            <header>
                <h2>
                    Mostrar Contacto
                </h2>
            </header>

            <article id="contacto">
              <?php if (isset($contacto)): ?>
                <header>
                    <img src="<?= URLIMAGENESDATOS ?>/<?= $contacto->getImagen() ?>" alt="Contacto <?= $contacto->getNombre() ?>" />
                </header>
                <ul>
                    <li><span>Nombre:</span><?= $contacto->getNombre() ?></li>
                    <li><span>Apellidos:</span><?= $contacto->getApellido() ?></li>
                    <li><span>Dirección:</span><?= $contacto->getDireccion() ?></li>
                    <li><span>Teléfono:</span><?= $contacto->getTelefono() ?></li>
                    <li><span>Email:</span><?= $contacto->getEmail() ?></li>
                </ul>
                <img src="<?= URLIMAGENES ?>/mapa.jpg" src="mapa" />
              <?php endif; ?>
            </article>
        </section>


<?php
require_once LAYOUTS.'/pie.php';
?>
