<?php


include('../con_db.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Les Pibis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../select2/select2.min.css">
	<script
		src="../jquery-3.6.0.js"
		></script>
	<script src="../select2/select2.min.js"></script>
	

</head>

<body>

  

  
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="../index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
      </ul>
    </nav>

  </header>

  

    

      <?php 




?>
<br><br>
<h2>ESTADISTICAS TURBIAS</h2>
<br>
<div style="display: flex;">
    <div style="
   padding: 30px;
    border-radius: 20px;
    background: white;
    margin-left: 50px;
    margin-right: 25px; 
    width: 400px;">
        <?php include('dona.html'); ?>
    </div>

    <div style="
    padding: 30px;
    border-radius: 20px;
    background: white;
    margin-left: 50px;
    margin-right: 25px;
    width: 600px;">
        <?php include('barra.html'); ?>
    </div>
</div>

    <div style="
   padding: 30px;
    border-radius: 20px;
    background: white;
    margin-left: 50px;
    margin-right: 25px;">
<?php

include('tiempo.html');

?>
</div>                  

<a href="../juego/index.php" class="btn btn-success">HACER UNA MARCHA</a>

  <main id="main">

   <style>
    .componeFoto2:hover {
    transform: scale(1.5);
    transition: transform .2s;
}

#divA{
	margin: 10px;
	display:inline-block;
	cursor:pointer;
}
   </style>





  
  <footer id="footer">
    <div class="container">
      <h3>ABORTO LEGAL PARA LES PIBIS</h3>
      <p>---</p>
      
      <div class="credits">
       
        Diseño de <a href="">Alejandro Stacul</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

 
  <script src="../assets/js/main.js"></script>

</body>

</html>


