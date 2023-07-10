<?php
    //Conexão ao banco de Dados
    $servername = "fdb30.awardspace.net";
    $username = "4185947_votyapp";
    $password = "pirulito100";
    $db_name = "4185947_votyapp";

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    mysqli_set_charset($connect, "utf8");

    if (mysqli_connect_error()):
        echo "Conexão falhou". mysqli_connect_error();
    endif;
