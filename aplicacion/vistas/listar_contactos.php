<?php
require_once LAYOUTS.'/cabecera.php';
?>
        <section>
            <header>
                <h2>
                    Contactos:
                </h2>
            </header>

            <article>
                <table>
                    <thead>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                      <?php if (isset($contactos)): ?>
                            <?php for ($i=0; $i<count($contactos); $i++): ?>
                              <tr>
                              <?php if (isset($contactos[$i])): ?>
                                  <td>
                                    <img src="<?= URLIMAGENESDATOS ?>/<?= $contactos[$i]->getImagen() ?>" alt="Contacto <?= $contactos[$i]->getNombre() ?>" />
                                  </td>
                                  <td>
                                    <?= $contactos[$i]->getNombre() ?>
                                  </td>
                                  <td>
                                    <a href="<?= URLAPLICACION ?>/index.php?accion=mostrar&id=<?= $contactos[$i]->getId() ?>"><img class="accion" src="<?= URLIMAGENES ?>/view.png" alt="Ver" /></a>
                                  </td>
                                  <td>
                                    <a href="<?= URLAPLICACION ?>/index.php?accion=vistaeditar&id=<?= $contactos[$i]->getId() ?>"><img class="accion" src="<?= URLIMAGENES ?>/edit.png" alt="Editar" /></a>
                                  </td>
                                  <td>
                                    <a href="<?= URLAPLICACION ?>/index.php?accion=borrar&id=<?= $contactos[$i]->getId() ?>"><img class="accion" src="<?= URLIMAGENES ?>/delete.png" alt="Borrar" /></a>
                                  </td>
                              <?php endif; ?>
                              </tr>
                            <?php endfor; ?>
                      <?php endif; ?>
                    </tbody>
                </table>
            </article>

        </section>

<?php
require_once LAYOUTS.'/pie.php';
?>
