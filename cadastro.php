<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Clientes</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Cadastro Clientes</h1>


<a href="index.php">
<button type="button" class="btn btn-primary">Início</button>
</a>

<a href="clientesDividas.php">
<button type="button" class="btn btn-primary">Mostrar clientes com dividas</button>
</a>

<a href="cadastro.php">
<button type="button" class="btn btn-primary">Cadastrar cliente</button>
</a>
<br><br>

<?php

include 'funcoes/controles.php';

$ctrl = new controles();

?>

<form action="bd/sql.php" method="post">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="divida">Valor Dívida</label>
    <input type="text" class="form-control" name="divida">
  </div>
  <button type="submit">Cadastrar</button>
</form>
</div>
</body>
</html>