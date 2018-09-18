<?php

include 'conecta.php';

$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);


$sql_dividas = "SELECT id,nome,valor FROM cliente t1 inner join divida t2 on t1.id = t2.fk_cliente";
$resultadoDividas = $conn->query($sql_dividas);


//cadastra nome e divida
if (@$_POST['name'] && @$_POST['divida']) {
	$nome = mysql_escape_string($_POST['name']);
	$divida = mysql_escape_string($_POST['divida']);
	$insert_nome = "INSERT INTO cliente (nome) VALUES ('$nome')";
	$insert_divida = "INSERT INTO divida (valor) VALUES ('$divida')";
	$conn->	query ($insert_nome);
	$conn->	query ($insert_divida);
}

//cadastra só nome
else if (@$_POST['name']) {
 $nome = mysql_escape_string($_POST['name']);
$insert_nome = "INSERT INTO cliente (nome) VALUES ('$nome')";
$conn->	query ($insert_nome);
}


?>