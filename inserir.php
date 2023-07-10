<?php
session_start();
include('conex.php');

if(empty($_POST['fieldset-1']) or empty($_POST['fieldset-2'])) {
    header('Location: index.html');
    exit();
}

$pergunta1 = mysqli_escape_string($connect, $_POST['fieldset-1']);
$pergunta2 = mysqli_escape_string($connect, $_POST['fieldset-2']);
$pergunta3 = mysqli_escape_string($connect, $_POST['fieldset-3']);
$pergunta4 = mysqli_escape_string($connect, $_POST['fieldset-4']);
$pergunta5 = mysqli_escape_string($connect, $_POST['fieldset-5']);

$query = "insert into Notas(pergunta1, pergunta2, pergunta3, pergunta4, pergunta5) values('$pergunta1','$pergunta2','$pergunta3','$pergunta4','$pergunta5')";

$mensagem = "Enviado com sucesso!";

if (mysqli_query($connect, $query)){
        header('Location: index.html');
        exit();
} else {
    header('Location: index.html');
    exit();
}

?>