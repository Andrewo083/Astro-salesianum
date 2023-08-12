<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=h, initial-scale=1.0" />
    <title>Document</title>
    <!--CSS ONLY-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />

    <script src="https://kit.fontawesome.com/9c11bd3b5a.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1 class="text-center p-3">Administracion de cuentas</h1>
    <?php 
        include "../PHP/Conexion.php";
        include "../PHP/Delet.php";
    ?>
    <div class="container-fluid row">
      <form class="col-3  p-3" method="post" >
        <h3 class="text-center text-secondary p-2" >Registro de periodista</h3>

          <?php 
        include "../PHP/RegisterJou.php";

        ?>
        <input type="hidden" name="rol" value="3" />
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Nombre de la persona</label
          >
          <input
            type="text"
            class="form-control"
            id="exampleInputEmail1"
            name="name"
            aria-describedby="emailHelp"
          />
    </div>

          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Apellido de la persona</label
          >
          <input
            type="text"
            class="form-control"
            id="exampleInputEmail1"
            name="last_name"
            aria-describedby="emailHelp"
          />
        </div>

      <div class="mb-3">
      <label for="disabledSelect" class="form-label">Seleccione uno de los 2 generos</label>
      <select id="disabledSelect" class="form-select" name="genero">
        <option>Masculino</option>
        <option>Femenino</option>

      </select>
    </div>

      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Ingrese el dui de la persona</label
          >

          <input
            type="text"
            class="form-control"
            id="exampleInputEmail1"
            name="dui"
            aria-describedby="emailHelp"
          />
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Ingrese la contraseña</label
          >
          <input
            type="password"
            class="form-control"
            id="exampleInputEmail1"
            name="password"
            aria-describedby="emailHelp"
          />
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Ingrese el corrreo electronico</label
          >
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            name="email"
            aria-describedby="emailHelp"
          />
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Ingrese el nunmero de telefono</label
          >
          <input
            type="text"
            class="form-control"
            id="exampleInputEmail1"
            name="phone"
            aria-describedby="emailHelp"
          />
    </div>

    <button type="submit" class="btn btn-primary" value="btnregistrar" name="btnregistrar">Enviar</button>
    </form>


<div class="col-8 p-4">

      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">Last</th>
      <th scope="col">Genero</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Dui</th>
      <th scope="col"></th>


    </tr>
  </thead>
  <tbody>
    <?php 
    include "../PHP/Conexion.php";
    $sql=$conexion->query(" select * from user");
    while($datos = $sql->fetch_object()) {?>
        <tr>
      <td><?= $datos->id ?></td>
      <td><?= $datos->name ?></td>
      <td><?= $datos->last_name ?></td>
      <td><?= $datos->genero ?></td>
      <td><?= $datos->email ?></td>
      <td><?= $datos->phone ?></td>
      <td><?= $datos->password ?></td>
      <td><?= $datos->dui ?></td>
      




      <td>
        <a href="../PHP/Edit.php?id=<?= $datos->id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="./Admin.php?id=<?= $datos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-square-minus"></i></a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

</div>

</div>

    <!--JavaScript Bundle with Popper-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
