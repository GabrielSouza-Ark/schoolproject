<?php
	$conecta = mysqli_connect("35.199.72.214","root","010822gs7","escolatcc");

	if (!$conecta) {
		echo "Error: Falha ao conectar-se com o banco de dados MYSQL";
		echo mysqli_connect_error();
	}
?>