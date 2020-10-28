<?php include 'layout.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>Antes de nada, necesitamos verificar el estado de la APP</h3>
      <p>Realice las siguientes acciones</p>
      <ol>

        <?php if( ! $data['baseDatos']) : ?>
        <li>Ya ha generado la BD</li>
        <li><?php echo ($data['user'])
              ?  "Su usuario es: <b> {$data['user']->nombre}</b>"
              :  "Crea tu usuario <a href='http://localhost/home/crearUsuario'>Aquí</a>"
            ?>
        </li>
        <li><?php echo ($data['equipo'])
              ?  "Genial, ya tiene equipo: <b> {$data['equipo']->nombre}</b>"
              :  "Crea tu equipo <a href='http://localhost/home/crearEquipo'>Aquí</a>"
            ?>
        </li>
        <li><?php echo ($data['presupuesto'])
              ?  "Genial, ya tiene un presupuesto de : <b> {$data['presupuesto']->presupuesto}</b>"
              :  "Primero hay que asignarle un presupuesto <a href='http://localhost/home/crearPresupuesto'>Aquí</a>"
            ?>
        </li>
        <?php else :?>
        <li>Iniciar la BD haciendo click <a href="http://localhost/bd/cargar">Aquí</a></li>
        <?php endif  ;?>

      </ol>
      <p>Una vez completado los pasos, puede navegar por el menú</p>
    </div>

</div>
