        <?php
        require_once LAYOUTS.'/cabecera.php';
        ?>

        <section>
            <header>
                <h2>
                    Contactos más visitados:
                </h2>
            </header>
            <?php if (isset($contactos)): ?>
            <article>
                <ul>
                  <?php for ($i=0; $i<=2; $i++): ?>
                    <?php if (isset($contactos[$i])): ?>
                      <li>
                        <a href="<?= URLAPLICACION ?>/index.php?accion=mostrar&id=<?= $contactos[$i]->getId() ?>">
                          <img src="<?= URLIMAGENESDATOS ?>/<?= $contactos[$i]->getImagen() ?>" alt="Contacto <?= $contactos[$i]->getNombre() ?>" />
                        </a>
                        <p><?= $contactos[$i]->getNombre() ?></p>
                      </li>
                  <?php endif; ?>
                  <?php endfor; ?>
                </ul>
            </article>
            <article>
                <ul>
                  <?php for ($i=3; $i<=5; $i++): ?>
                    <?php if (isset($contactos[$i])): ?>
                      <li>
                        <a href="<?= URLAPLICACION ?>/index.php?accion=mostrar&id=<?= $contactos[$i]->getId() ?>">
                          <img src="<?= URLIMAGENESDATOS ?>/<?= $contactos[$i]->getImagen() ?>" alt="Contacto <?= $contactos[$i]->getNombre() ?>" />
                        </a>
                        <p><?= $contactos[$i]->getNombre() ?></p>
                      </li>
                    <?php endif; ?>
                  <?php endfor; ?>
                </ul>
            </article>
          <?php endif; ?>
        </section>

        <?php
        require_once LAYOUTS.'/pie.php';
        ?>
