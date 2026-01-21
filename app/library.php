<?php

function sentencia_sql($taula){
	$sql = "select * from ".$taula;
	return($sql);
}

function consulta($sql,$host,$bd,$user,$passwd){
	$connexio = new mysqli($host,$user,$passwd,$bd);
	if ($connexio->connect_errno){
		printf("Problema de connexió a la BD: %s\n", $connexio->connect_error);
		exit();
	}
	else {
		echo "<b>Connexió a la BD  $bd realitzada amb èxit</b><br><br>";
	}
	$resultat = $connexio->query($sql) or die("Consulta fallida - Codi: ".$connexio->errno." -- Missatge d'error: ".$connexio->error);
	$connexio->close();
    return $resultat;
}

function mostra($dades){
	foreach ($dades as $usuari) {
		foreach ($usuari as $clau => $dada) {
			echo $clau." : ".$dada."<br>";
		}
		echo "<br>";
	}	
	return 0;
}

?>
