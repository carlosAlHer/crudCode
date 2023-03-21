<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>CRUD codeigniter</title>
</head>

<body>
  <div class="container">
    <h1>CRUD con Codeigniter</h1>
    <div class="row">
      <div class="col-sm-12">
        <form method="POST" action="<?php echo base_url().'/crear' ?>">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre">
          <label for="nombre">Apellido paterno</label>
          <input type="text" class="form-control" name="paterno" id="paterno">
          <label for="nombre">Apellido materno</label>
          <input type="text" class="form-control" name="materno" id="materno">
          <br>
          <button class="btn btn-primary">Guardar</button>
        </form>
      </div>
      <hr>
      <h2>Listado personas</h2>

      <div class="row">
        <div class="col-sm-12">
          <div class="table table-responsive">
            <table class="table table-hover table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
              <?php foreach ($datos as $key) : ?>
                <tr>
                  <td><?php echo $key->nombre ?></td>
                  <td><?php echo $key->paterno ?></td>
                  <td><?php echo $key->materno ?></td>
                  <td>
                    <a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-warning btn-sm">Editar</a>
                  </td>
                  <td>
                    <a href="<?php echo base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger btn-sm">Eliminar</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <script type="text/javascript">
  let mensaje = <?php echo $mensaje ?>;
/*   swal es usado con la lib sweet*/
  if (mensaje == '1') {
    swal('D:','Agregado con exito','success');
    
  } else if(mensaje == '0'){
    swal(':(','Fallo al agregar','error');
  }else if(mensaje == '2'){
    swal(':D','Actualizado con exito','success');
  }
  else if(mensaje == '3'){
    swal(':(','Fallo al actualizar','error');
  }
  else if(mensaje == '4'){
    swal(':D','Eliminado con exito','success');
  }
  else if(mensaje == '3'){
    swal(':(','Fallo al eliminar','error');
  }
  
  </script>

</body>

</html>