<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Prueba 1 junio</title>
  </head>
  <body>
  <div class="container">
  <form action="respuestaPOST.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="email" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
    <div class="form-group">
    <label for="nombres">Nombres</label>
    <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="emailHelp"></div>
    <div class="form-group">
    <label for="apellidos">apellidos</label>
    <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="emailHelp"></div>
    <div class="form-group">
    <label for="identificacion">identificacion</label>
    <input type="number" class="form-control" name="identificacion" id="identificacion" aria-describedby="emailHelp"></div>
  <div class="form-group">
    <label for="exampleInputPassword1">contraseña</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>