<?php
include('conex.php');

echo "<center>";

$sql = "Select * from Notas";

$retorno = mysqli_query($connect, $sql) or die ("Erro de Consulta");

while ($registro = mysqli_fetch_array($retorno)){

        echo $registro['pergunta1'];
        echo " / ";
        echo $registro['pergunta2'];
        echo " / ";
        echo $registro['pergunta3'];
        echo " / ";
        echo $registro['pergunta4'];
        echo " / ";
        echo $registro['pergunta5'];
        echo " <br> ";
}
mysqli_close($connect);

?>