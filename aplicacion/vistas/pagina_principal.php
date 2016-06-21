
        <?php
        require_once LAYOUTS.'/cabecera.php';
        ?>

        <section>
            <header>
                <h2>
                    Ultimos contactos consultados:
                </h2>
            </header>

            <article>
                <ul>
                    <li><img src="<?= URLIMAGENES ?>/tux01.jpg" alt="Insertar Contacto" /><p>Fernando</p></li>
                    <li><img src="<?= URLIMAGENES ?>/tux02.jpg" alt="Insertar Contacto" /><p>Luis</p></li>
                    <li><img src="<?= URLIMAGENES ?>/tux03.jpg" alt="Insertar Contacto" /><p>Andres</p></li>
                </ul>
            </article>
            <article>
                <ul>
                    <li><img src="<?= URLIMAGENES ?>/tux04.jpg" alt="Insertar Contacto" /><p>Pedro</p></li>
                    <li><img src="<?= URLIMAGENES ?>/tux05.jpg" alt="Insertar Contacto" /><p>Ana</p></li>
                    <li><img src="<?= URLIMAGENES ?>/tux06.jpg" alt="Insertar Contacto" /><p>Teodoro</p></li>
                </ul>
            </article>
        </section>

<?php
require_once LAYOUTS.'/pie.php';
?>
