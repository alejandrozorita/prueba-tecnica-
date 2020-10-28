<?php include 'layout.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>Listado de mis jugadores</h3>

        <?php foreach ($data['jugadores'] as $jugador) {
            echo "<p><img src='$jugador->imagen' width='150px' alt='$jugador->nombre'></p>";
            echo "<ul>
                    <li>Nombre: $jugador->nombre</li>
                    <li>Precio: $jugador->precio</li>
                    <li>Agilidad: $jugador->agilidad</li>
                    <li>Fueza: $jugador->fuerza</li>
                    <li>Suerte: $jugador->suerte</li>
                    
                    <li><a href='http://localhost/mercado/despedir/?jugador_id=$jugador->id&equipo_id={$data['equipo']}'>Despedir</a></li>
                  </ul><hr><br>";


        } ?>

    </div>
  </div>

