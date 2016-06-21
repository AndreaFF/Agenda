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
                <header>
                    <img src="<?= URLIMAGENES ?>/tux01.jpg" alt="Foto" />
                </header>
                <ul>
                    <li><span>Nombre:</span>Fernando</li>
                    <li><span>Apellidos:</span>García García</li>
                    <li><span>Dirección:</span>C\ Valdes Pedrita 12 - 1º A</li>
                    <li><span>Teléfono:</span>985786543</li>
                    <li><span>Email:</span>fernando.garcia@gmail.com</li>
                </ul>
                <img src="<?= URLIMAGENES ?>/mapa.jpg" src="mapa" />
            </article>
        </section>


<?php
require_once LAYOUTS.'/pie.php';
?>
