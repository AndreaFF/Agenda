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
                        <tr>
                            <td><img src="<?= URLIMAGENES ?>/tux01.jpg" alt="Foto Fernando" /></td>
                            <td>Fernando</td>
                            <td><a href="#"><img class="accion" src="<?= URLIMAGENES ?>/view.png" alt="Ver" /></a></td>
                            <td><a href="#"><img class="accion" src="<?= URLIMAGENES ?>/edit.png" alt="Editar" /></a></td>
                            <td><a href="#"><img class="accion" src="<?= URLIMAGENES ?>/delete.png" alt="Borrar" /></a></td>
                        </tr>
                        <tr>
                            <td><img src="<?= URLIMAGENES ?>/tux02.jpg" alt="Foto Luis" /></td>
                            <td>Luis</td>
                            <td><a href="#"><img class="accion" src="<?= URLIMAGENES ?>g/view.png" alt="Ver" /></a></td>
                            <td><a href="#"><img class="accion" src="<?= URLIMAGENES ?>/edit.png" alt="Editar" /></a></td>
                            <td><a href="#"><img class="accion" src="<?= URLIMAGENES ?>/delete.png" alt="Borrar" /></a></td>
                        </tr>
                        <tr>
                            <td><img src="<?= URLIMAGENES ?>/tux03.jpg" alt="Foto Andres" /></td>
                            <td>Andres</td>
                            <td><a href="#"><img class="accion" src="<?= URLIMAGENES ?>/view.png" alt="Ver" /></a></td>
                            <td><a href="#"><img class="accion" src="<?= URLIMAGENES ?>/edit.png" alt="Editar" /></a></td>
                            <td><a href="#"><img class="accion" src="<?= URLIMAGENES ?>/delete.png" alt="Borrar" /></a></td>
                        </tr>

                    </tbody>
                </table>
            </article>

        </section>

<?php
require_once LAYOUTS.'/pie.php';
?>
