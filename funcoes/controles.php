<?php

class controles{

	public function retornaClientes(){
			include 'bd/sql.php';

			if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<li class='list-group-item'>"."Id: " . $row["id"]. " - Nome: " . $row["nome"]."</li>";
		    }
		} else {
		    echo "0 results";
		} 
		return "teste";

			}


			public function retornaClientesDividas(){
			include 'bd/sql.php';

			if ($resultadoDividas->num_rows > 0) {
		    // output data of each row
		    while($row = $resultadoDividas->fetch_assoc()) {
		        echo "<li class='list-group-item'>"."Id: " . $row["id"]. " - Nome: " . $row["nome"]. " - Divida de: " . $row["valor"]."</li>";
		    }
		} else {
		    echo "0 results";
		} 


			}
}

?>