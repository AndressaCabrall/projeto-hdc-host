<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "projeto_hdc_host";

$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

// Verificar conexão

if ($conn-> connect_error) {
 die ("conexão falhou:" . $conn->connect_error);

}


?>
