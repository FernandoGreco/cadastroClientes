<?php

include 'conecta.php';

$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);


$sql_dividas = "SELECT id,nome,valor FROM cliente t1 inner join divida t2 on t1.id = t2.fk_cliente";
$resultadoDividas = $conn->query($sql_dividas);


//se for enviado só o nome então só cadastra 
if (@$_POST['name'] && @$_POST['divida']) {
	$nome = $_POST['name'];
	$divida = $_POST['divida'];
	echo "Nome".$nome."Divida:".$divida;
}

else if (@$_POST['name']) {
 $nome = mysql_escape_string($_POST['name']);
echo $nome;
"INSERT INTO cliente (nome) VALUES ('$nome')";
}


?>