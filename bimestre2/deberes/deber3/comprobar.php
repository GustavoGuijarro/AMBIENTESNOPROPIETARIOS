<?php



	$usu = $_GET['usuario'];
	$conn = new Mysqli($host, $usuario,$cont,$bdd);
	mysql_select_db("registro");
	$query = "SELECT id FROM registrar WHERE usuario ='$usu'";
	$resp = mysql_query($query, $conn);

	if(mysql_fetch_assoc($resp)){
		echo "false";
	}else{
		echo "true";
	}

?>