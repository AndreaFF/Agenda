<?php
require_once LAYOUTS.'/cabecera.php';
?>

        <section>
            <header>
                <h2>
                    Mensaje:
                </h2>
            </header>

            <article>
                <?php if (isset($mensaje)): ?>
                <p id="mensaje"><?= $mensaje ?></p>
              <?php endif; ?>
            </article>
        </section>

<?php
require_once LAYOUTS.'/pie.php';
?>
