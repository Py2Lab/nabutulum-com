<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bakal Tulum</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic%7COpen+Sans:400,600,700,400italic' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/magnific-popup.css" />
  <link rel="stylesheet" href="../css/font-icons.css" />
  <link rel="stylesheet" href="../revolution/css/settings.css" />
  <link rel="stylesheet" href="../css/rev-slider.css" />
  <link rel="stylesheet" href="../css/sliders.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/responsive.css" />
  <link rel="stylesheet" href="../css/spacings.css" />
  <link rel="stylesheet" href="../css/animate.css" />
  <link rel="stylesheet" href="../css/color.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="../img/favicon.png">

</head>

<body >

 <?php include("../cls/header.php");?>


  <div class="main-wrapper-mp oh">

    <!-- Page Title -->
    <section class="page-title text-center" id="units" style="background: url(../img/recorte.jpg);">
      <div class="container relative clearfix">
        <div class="title-holder">
          <div class="title-text">
              <h2 class="text-center bottom-line color-white">UNITS TIPOLOGY</h2>
          </div>
        </div>
      </div>
    </section> <!-- end page title -->


    <!-- About us / Progress Bars -->
    <section class="section-wrap-mp">
      <div class="row heading">
          <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6">
            
            <p class=" text-center">Suites 1BR from 32.00 sq mts. <br> Condos 2-3 BR. From 65 to 170sq mts.</p>
          </div>
        </div>
      <div class="container">
        <div class="row mt-minus-30">

          <?php 
            for($x=1; $x<=13; $x++){
              if($x!=6){
              echo '
                  <div class="col-md-4">
                    <div class="black">
                        <div class="mask"><a href="/cls/landing.php?tipo='.$x.'" class="linkPop"><i class="fa fa-search-plus"></i></a></div>
                        <img src="/img/tipografias/TP'.$x.'.png" />
                        <div class="tituloTipo"> <h2> TIPOLOGY '.$x.'</h2></div>
                      </div>
                  </div>
              ';
            }
            }
          ?>


        </div>
      </div>
    </section> <!-- end progress bars -->


   


   <?php include("../cls/footer.php"); ?>

  </div> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/plugins.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script type="text/javascript">
      
      $('.linkPop').magnificPopup({
        type: 'ajax',
        tLoading: 'Loading image #%curr%...',
      });
    </script>

</body>
</html>