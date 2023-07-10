<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta property="og:site" content="index.html">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta name="theme-color" content="#5ea2ff">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.scss">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <title>VotyApp</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/line-icons.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="dashboard/assets/images/logo.ico" />
    </head>


        <body>
            <div class="preloader">
            <div class="preloader-inner">
            <div class="preloader-icon">
            <span></span>
            <span></span>
            </div>
            </div>
            </div>
            <header class="header navbar-area">
            <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-12">
            <div class="nav-inner">
            <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
            <p>V O T Y A P P</p>
            </a>
            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
            <ul id="nav" class="navbar-nav ms-auto">
            <li class="nav-item">
            <a href="http://votyapp.atwebpages.com/" class="page-scroll active" aria-label="Toggle navigation">Início</a>
            </li>
            <li class="nav-item">
            <a href="#resultados" class="page-scroll" aria-label="Toggle navigation">Ver Resultados</a>
            </li>
            </ul>
            </div>
            <div class="button add-list-button">
            <a href="avaliacoes.php" class="btn">Ver Avaliações</a>
            </div>
            </nav>
            </div>
            </div>
            </div>
            </div>
            </header>
            <section id="home" class="hero-area">
            <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-12">
            <div class="hero-content">
            <h1 class="wow fadeInLeft" data-wow-delay=".4s">VER RESULTADOS</h1>
            <p class="wow fadeInLeft" data-wow-delay=".6s">Clique no botão abaixo para ver os resultados de nossa votação.</p>
            <div class="button wow fadeInLeft" data-wow-delay=".8s">
            <a href="#resultados" class="btn">Resultados</a>
            </div>
            </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12">
            <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
            <img src="assets/images/graph.svg" alt="#" style="transform: scale(0.9) perspective(500px) rotateY(-10deg) rotateX(-0.5deg) rotateZ(1.5deg);
                filter: drop-shadow(10px 10px 10px rgba(0,0,0,0.3));">
            </div>
            </div>
            </div>
            </div>
            </section>
            <section id="resultados" class="features section">
            <div class="container">
            <div class="row">
            <div class="col-12">
            <div class="section-title">
            <h3 class="wow zoomIn">Resultados</h3>
            <h2 class="wow fadeInUp">MÉDIA DOS RESULTADOS</h2>
            </div>
            </div>
            </div>
            
<?php
include('conex.php');
            
echo "<center>";
            
//SQL - QUERY
$pergunta1 = "SELECT  AVG(pergunta1) FROM Notas";
$result1 = $connect->query($pergunta1);

$pergunta2 = "SELECT  AVG(pergunta2) FROM Notas";
$result2 = $connect->query($pergunta2);

$pergunta3 = "SELECT  AVG(pergunta3) FROM Notas";
$result3 = $connect->query($pergunta3);

$pergunta4 = "SELECT  AVG(pergunta4) FROM Notas";
$result4 = $connect->query($pergunta4);

$pergunta5 = "SELECT  AVG(pergunta5) FROM Notas";
$result5 = $connect->query($pergunta5);

//APARECER NA TELA
while($row = mysqli_fetch_array($result1)){
        $numero1 = $row['AVG(pergunta1)'];
        echo "Média 1° Pergunta: " . number_format($numero1, 1, '.', '.');
        echo "<br>";
}

while($row = mysqli_fetch_array($result2)){
    $numero2 = $row['AVG(pergunta2)'];
        echo "Média 2° Pergunta: " . number_format($numero2, 1, '.', '.');
        echo "<br>";
}

while($row = mysqli_fetch_array($result3)){
    $numero3 = $row['AVG(pergunta3)'];
        echo "Média 3° Pergunta: " . number_format($numero3, 1, '.', '.');
        echo "<br>";
}

while($row = mysqli_fetch_array($result4)){
    $numero4 = $row['AVG(pergunta4)'];
        echo "Média 4° Pergunta: " . number_format($numero4, 1, '.', '.');
        echo "<br>";
}

while($row = mysqli_fetch_array($result5)){
    $numero5 = $row['AVG(pergunta5)'];
        echo "Média 5° Pergunta: " . number_format($numero5, 1, '.', '.');
        echo "<br>";
}

mysqli_close($connect);

?>
<br><br><br>


<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn">Banco de Dados</h3>
<h2 class="wow fadeInUp">TODAS VOTAÇÕES NO BANCO DE DADOS</h2>
</div>
</div>
</div>
<br>

<?php
include('conex.php');
            
echo "<center>";
            
$sql = "Select * from Notas";
            
$retorno = mysqli_query($connect, $sql) or die ("Erro de Consulta");
            
while ($registro = mysqli_fetch_array($retorno)){
         
echo "1° Nota: ";
echo $registro['pergunta1'];
echo " - ";
echo "2° Nota: ";
echo $registro['pergunta2'];
echo " - ";
echo "3° Nota: ";
echo $registro['pergunta3'];
echo " - ";
echo "4° Nota: ";
echo $registro['pergunta4'];
echo " - ";
echo "5° Nota: ";
echo $registro['pergunta5'];
echo " <br> ";
}

mysqli_close($connect);
          
?>

<br> 

</body>
</section>
<footer class="footer">
<div class="footer-top">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-12 horizontal-center" style="text-align: center;">
<div class="single-footer f-about">
&copy VotyApp Software 2022 <br>
by: Vinicius
</div>
</div>
</div>
</div>
</div>
</footer>


</html>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/main.js"></script>