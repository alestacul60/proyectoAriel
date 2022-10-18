<?php




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>El Tajamar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <!--<li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Aca nose aun</span></a></li>
--><li><a href="cerrarSession.php" class="nav-link scrollto active"><i class="bx bx-stats"></i> <span>Estadisticas</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">

      <h1>PANEL ADMINISTRADOR</h1><br>
    

      <?php 

$conex = mysqli_connect("localhost","root","1234","basegenero");


?>

<h2>REGISTRO DE LES PIBIS</h2>
<br>
<table class="table">
                                <thead>
                        <tr>  
                            
                                <th>FECHA</h4></th>
                                <th>HORA</h4></th>
                                <th>LLAMADO REGION</h4></th>
                                <th>LLAMANTE EDAD</h4></th>
                                
                                <th>LLAMANTE VINCULO</h4></th>
                                <th>VICTIMA GENERO</h4></th>
                                <th>VICTIMA EDAD</h4></th>
                                <th>VICTIMA NACIONALIDAD</h4></th>

                                
                                
                        </tr>
                        </thead>
                        <tbody style="background-color: #002c5000;">
                        


<?php

  $consultaHistorial = "SELECT llamadoHora,desc_region,llamante_edad,victima_edad, victima_convive_agresor, 
                        DATE_FORMAT(llamado_fecha,'%d-%m-%Y') as fecha, descripGen,
                        descrip_nacionalidad,
                        descripVinculo FROM datos
                        LEFT JOIN llamante_region ON idRegion = llamado_region
                        LEFT JOIN nacionalidad on idNacion = victima_nacionalidad
                        LEFT JOIN genero ON idGenero = victima_genero
                        LEFT JOIN llamante_vinculo ON idVinculo = llamante_vinculo
                        ORDER BY llamado_fecha DESC";

$resconsultaHist = $conex->query($consultaHistorial);
                                
                                
                                while($resconsultaHistRow = $resconsultaHist->fetch_assoc()) {
                                        ?> 
                    
                        <tr>     
                                <td style="font-size:70%;"><?php  echo $resconsultaHistRow['fecha']; ?></h5></td>
                                <td style="font-size:70%;"><?php echo $resconsultaHistRow['llamadoHora']; ?></h5></td>
                                <td style="font-size:70%;"><?php echo $resconsultaHistRow['desc_region']; ?></h5></td>
                                <td style="font-size:70%;"><?php echo $resconsultaHistRow['llamante_edad']; ?></h5></td>
                                <td style="font-size:70%;"><?php echo $resconsultaHistRow['descripVinculo']; ?></h5></td>
                                <td style="font-size:70%;"><?php echo $resconsultaHistRow['descripGen']; ?></h5></td>
                                <td style="font-size:70%;"><?php echo $resconsultaHistRow['victima_edad']; ?></h5></td>
                                <td style="font-size:70%;"><?php echo $resconsultaHistRow['descrip_nacionalidad']; ?></h5></td>
                                
                                
                                
                                 
                                 <?php  } ?>
                                 </tr>
                        </tbody>
                              
                        </table>  
                        
                        </div>
 </section>
      

  <main id="main">

   <style>
    .componeFoto2:hover {
    transform: scale(1.5);
    transition: transform .2s;
}
   </style>





  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>ABORTO LEGAL PARA LES PIBIS</h3>
      <p>---</p>
      
      <div class="credits">
       
        Diseño de <a href="">Alejandro Stacul</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


