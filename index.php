<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nabu, Tulum</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="revolution/css/settings.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <!-- Favicons --> 
  <link rel="shortcut icon" href="img/favicon.png">

</head>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">
  <div class="blackk"></div>
  <div class="white">
    <div class="content">
      <span id="close"><i class="fa fa-times"></i></span>
        <form id="pdfDesc">
          <div>
            <label>Name</label>
            <input type="text" name="nombre" required="">
            <input type="hidden" name="" id="pdfInput">
          </div>
           <div>
            <label>Email</label>
            <input type="text" name="email" required="">
          </div>
          <button>Donwload brochure <i class="fa fa-spinner imgr" ></i></button>
          <p class="data" id="dataRepsone"></p>
        </form>

    </div>
  </div>
  <?php include("cls/header.php");?>


  <div class="main-wrapper-onepage main oh" id="home">

    <!-- Revolution Slider -->
    <section> 
      <div class="rev_slider_wrapper">
        <div class="rev_slider" id="slider1" data-version="5.0">
          <ul>
            <!-- SLIDE 1 -->
            <li data-fstransition="fade"
              data-transition="zoomout"
              data-easein="default" 
              data-easeout="default"
              data-slotamount="1"
              data-masterspeed="1200"
              data-delay="8000"
              data-title=""
              >
              <!-- MAIN IMAGE -->
              <img src="img/home.jpg"
                alt=""
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                data-bgparallax="7"
                class="rev-slidebg"
                >
                <!-- LAYER NR. 1 -->
              <div class="tp-caption hero-text huge_white rs-parallaxlevel-8"
                data-x="center"
                data-y="center"
                data-fontsize="[50,60,50,40]"
                data-textAlign="center"
                data-width="[none, none, none, 400]"
                data-whitespace="[nowrap, nowrap, nowrap, normal]"
                data-lineheight="[76,60,50,40]"
                data-transform_idle="o:1;s:800"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1000"
                data-splitout="none">LUXURY JUNGLE VILLAS EN TULUM
              </div>
              <div class="tp-caption tp-resizeme"
                data-x="center"
                data-y="center"
                data-voffset="80"
                data-fontsize="[16,16,16,16]"
                data-textAlign="center"
                data-width="[none, none, none, 400]"
                data-whitespace="[nowrap, nowrap, nowrap, normal]"
                data-lineheight="[16,16,16,18]"
                data-transform_idle="o:1;s:800"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1400"><a href='#contact' class='btn btn-lg btn-dorado'>AGENDA TU CITA</a>
              </div>

              <!-- LAYER NR. 1 -->
              <div class="tp-caption huge_white rs-parallaxlevel-8"
                data-x="center"
                data-y="center"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:500;e:Power3.easeOut;" 
                data-transform_out="opacity:0;sX:0;sY:0;s:1200;e:Power3.easeInOut;"
                data-start="1200"
                data-splitout="none"
                ><!-- <img src="img/revolution/hero_img_1.png" alt="" width="504" height="504" data-ww="['504px','400px','360px','320px']" data-hh="['504px','400px','360px','320px']"
                  data-no-retina> -->
              </div>
        
            </li> <!-- end slide 1 -->
            
            <!-- SLIDE 2 -->
            <li data-fstransition="fade"
              data-transition="zoomout"
              data-easein="default" 
              data-easeout="default"
              data-slotamount="1"
              data-masterspeed="1200"
              data-delay="8000"
              data-title=""
              >
              <!-- MAIN IMAGE -->
              <img src="img/banner2.jpg"
                alt=""
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                data-bgparallax="7"
                class="rev-slidebg"
                >
                <!-- LAYER NR. 1 -->
              <div class="tp-caption hero-text huge_white rs-parallaxlevel-8"
                data-x="center"
                data-y="center"
                data-fontsize="[50,60,50,40]"
                data-textAlign="center"
                data-width="[none, none, none, 400]"
                data-whitespace="[nowrap, nowrap, nowrap, normal]"
                data-lineheight="[76,60,50,40]"
                data-transform_idle="o:1;s:800"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1000"
                data-splitout="none">TULUM, EL LUGAR PARA INVERTIR
              </div>
              <div class="tp-caption tp-resizeme"
                data-x="center"
                data-y="center"
                data-voffset="80"
                data-fontsize="[16,16,16,16]"
                data-textAlign="center"
                data-width="[none, none, none, 400]"
                data-whitespace="[nowrap, nowrap, nowrap, normal]"
                data-lineheight="[16,16,16,18]"
                data-transform_idle="o:1;s:800"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1400"><a href='#contact' class='btn btn-lg btn-dorado'>AGENDA TU CITA</a>
              </div>

              <!-- LAYER NR. 1 -->
              <div class="tp-caption huge_white rs-parallaxlevel-8"
                data-x="center"
                data-y="center"
                data-transform_idle="o:1;"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:500;e:Power3.easeOut;" 
                data-transform_out="opacity:0;sX:0;sY:0;s:1200;e:Power3.easeInOut;"
                data-start="1200"
                data-splitout="none"
                ><!-- <img src="img/revolution/hero_img_1.png" alt="" width="504" height="504" data-ww="['504px','400px','360px','320px']" data-hh="['504px','400px','360px','320px']"
                  data-no-retina> -->
              </div>
        
            </li> <!-- end slide 2 -->
           
              <!-- SLIDE 3 -->
            <li data-transition="zoomout"
              data-easein="default" 
              data-easeout="default"
              data-slotamount="1"
              data-masterspeed="1200"
              data-delay="8000"
              data-title=""
              >
              <!-- MAIN IMAGE -->
              <img alt="Bakal Tulum" src="img/banner3.jpg" 
               
                data-bgrepeat="no-repeat"
                data-bgfit="cover"
                data-bgparallax="7"
                class="rev-slidebg"
                >

              <!-- LAYER NR. 2 -->
              <div class="tp-caption hero-text large_white"
                data-x="center"
                data-y="center"
                data-fontsize="[60,50,40,36]"
                data-textAlign="center"
                data-width="[none, none, none, 400]"
                data-whitespace="[nowrap, nowrap, nowrap, normal]"
                data-lineheight="[60,50,40,36]"
                data-transform_idle="o:1;s:900"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1200">RESIDENCIAS LLAVE EN MANO
              </div>


              <!-- LAYER NR. 2 -->
              <div class="tp-caption medium_text rs-parallaxlevel-8"
                data-x="center"
                data-y="center"
                data-voffset="62"
                data-fontsize="[30,30,15,15]"
                data-textAlign="center"
                data-width="[none, none, none, 400]"
                data-whitespace="[nowrap, nowrap, nowrap, normal]"
                data-lineheight="[15,15,15,18]"
                data-transform_idle="o:1;s:900"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1200">TOTALMENTE AMUEBLADAS
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme"
                data-x="center"
                data-y="center"
                data-hoffset="0"
                data-voffset="134"
                data-transform_idle="o:1;s:800"
                data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:500;"
                data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                data-start="1400"
                style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#contact' class='btn btn-lg btn-dorado'>AGENDA TU CITA</a>
              </div>  
        
            </li> <!-- end slide 3 -->
          </ul>

          <div class="local-scroll">
            <a href="#intro" class="scroll-down">
              <i class="fa fa-angle-down"></i>
            </a>
          </div>

        </div>
      </div>
    </section>


    <!-- Intro -->
    <section class="section-wrap intro" id="intro">
      <div class="container">
        <h2>INSPIRADO EN LA NATURALEZA</h2>
        <p class="text-center marginBottom">Buscando la armonía entre la selva maya y la arquitectura ecológicamente responsable utilizando materiales y acabados de la mejor calidad, disfruta de las hermosas vistas y el estilo de vida que solo encontrarás en <strong>NABU<sup>®</sup> Tulum by OH Hotels</strong>.</p>
         <div class="row">
         <a href="img/zoom1.jpg" class="lightbox-gallery"><img src="img/1.jpg" class="col-md-12" /></a>
         </div>
         <div class="row">
         <a href="img/zoom2.jpg" class="lightbox-gallery "><img src="img/2.jpg" class="col-md-6 marginBmobil" /></a>
            <a href="img/zoom3.jpg" class="lightbox-gallery"><img src="img/3.jpg" class="col-md-6" /></a>
         </div>

         <h2>ROOFTOP Y ALBERCA PRIVADA</h2>
        <p class="text-center marginBottom">Con una puesta de sol mexicana única, date un capricho en tu exclusivo rooftop y admira Tulum desde otra perspectiva. Para aquellos que necesitan un soplo de aire fresco y vista de las estrellas.</p>
          
         <div class="row">
         <a href="img/zoom4.jpg" class="lightbox-gallery"><img src="img/4.jpg" class="col-md-6 marginBmobil" /></a>
         <a href="img/zoom7.jpg" class="lightbox-gallery"><img src="img/7.jpg" class="col-md-6" /></a>
         </div>
         <h2>TERMINADAS Y AMUEBLADAS</h2>
        <p class="text-center marginBottom">Las residencias de diseñador completamente terminadas y amuebladas en Tulum, con amplia vista a la imponente selva maya, son el epítome del lujo tropical y urbano, curado por la prestigiosa firma internacional de diseño de interiores <strong>“The Design Group NYC”.</strong></p>
          
         <div class="row marginBottom">
         <a href="img/zoom5.jpg" class="lightbox-gallery"><img src="img/5.jpg" class="col-md-6 marginBmobil" /></a>
         <a href="img/zoom6.jpg" class="lightbox-gallery"><img src="img/6.jpg" class="col-md-6" /></a>
         </div>
        <!--<div class="carousel">
            <a href="#one" class="carousel-item">
              <img src="img/galeria/1.jpg" />
            </a> 
            <a href="#one" class="carousel-item">
              <img src="img/galeria/2.jpg" />
            </a> 
            <a href="#one" class="carousel-item">
              <img src="img/galeria/3.jpg" />
            </a> 
            <a href="#one" class="carousel-item">
              <img src="img/galeria/4.jpg" />
            </a> 
            <a href="#one" class="carousel-item">
              <img src="img/galeria/5.jpg" />
            </a> 
            <a href="#one" class="carousel-item">
              <img src="img/galeria/6.jpg" />
            </a> 
            <a href="#one" class="carousel-item">
              <img src="img/galeria/7.jpg" />
            </a> 
            <a href="#one" class="carousel-item">
              <img src="img/galeria/8.jpg" />
            </a> 
        </div>
        
        <p class="text-center textoIntro">• FITNESS CENTER • ROOFTOP • ALBERCA PRIVADA • SALÓN DE USOS MULTIPLES ( SPA, YOGA, EVENTOS)<br>
          • LOUNGE • JARDINES CON ÁREAS PARA RELAJAR LA MENTE Y CUERPO • CLUB DE PLAYA: ORCHID BEACH HOUSE
          </p>
          -->
          <div class="text-center cta-button descargar ">
            <a href="descargas/Nabu-Tulum.pdf" target="_blank" class="btn btn-lg btn-dorado">DESCARGAR BROCHURE</a>
          </div>
          
      </div>
    </section> <!-- end intro -->
    
    <section id="nature">
        <div class="container">
            <div class="row">
                <h2 class="text-center">DONDE LA NATURALEZA ES ABSOLUTA</h2>
                <div class="col-md-6">
                    <img src="img/isla.png" width="100%" />
                </div>
                <div class="col-md-6">
                    <p class="tprincipal"><strong>Nabu<sup>®</sup> Tulum by OH Hotels, consta de 9 lujosas villas de 3 y 4 habitaciones, cada una con rooftop y alberca privada.</strong></p>
                    <p class="tsecundario">Se construye en  un terreno único que asemeja una Isla,  en la exclusiva privada <strong>“Aldea
                      Maya”</strong> de los únicos proyectos con seguridad 24 hrs, dentro del proyecto maestro <strong>Aldea
                      Zamá:</strong> el desarrollo más prestigioso y sustentable en medio de la selva el cual cuenta con una infraestructura de primer nivel. Estratégicamente situado entre el pueblo y el mar azul, es el lugar perfecto para vivir una vida cómoda rodeado de naturaleza. Tiene un aspecto moderno que combina la antigüedad y misticismo de Tulum con el estilo contemporáneo de hoy en día.
                      </p>
                </div>
                <hr style="border-top: 1px solid #fff" class="col-md-12">
                
            </div>
            <div class="row">
              <h2 class="text-center col-md-12 text-center">AMENIDAES</h2>
              <div class="col-md-4 amenidad text-center marginBottom">
                  <img src="img/amenidades/1.svg" />
              </div>
              <div class="col-md-4 amenidad text-center marginBottom">
                  <img src="img/amenidades/2.svg" />
              </div>
              <div class="col-md-4 amenidad text-center marginBottom">
                  <img src="img/amenidades/3.svg" />
              </div>
              <div class="col-md-4 amenidad text-center ">
                  <img src="img/amenidades/4.svg" />
              </div>
              <div class="col-md-4 amenidad text-center">
                  <img src="img/amenidades/5.svg" />
              </div>
              <div class="col-md-4 amenidad text-center">
                  <img src="img/amenidades/6.svg" />
              </div>
            </div>
        </div>
    </section>
    <section id="mapa">
        <img src="img/mapa.jpg" width="100%" />
    </section>
    
 
 
   
    <!-- Contact -->
    <section class="section-wrap contact" id="contact">
      <div class="container">

        <div class="row heading">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="text-center bottom-line contacTitle">Contáctanos</h2>
            <p class="subheading">Déjanos un mensaje y un representante se comunicará contigo en menos de 4 horas.</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-4">
            <h5>PONTE EN CONTACTO</h5>
            <p>Lunes a Sabado: 8:00 – 20:00</p>

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Pointer"></i>
              </div>
              <h6>Dirección</h6>
              <p>Quinta avenida esq calle 40 <br>
Playa del Carmen Qr. 77720</p>
            </div> <!-- end address -->

            <!-- <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Phone"></i>
              </div>
              <h6>Call Us</h6>
              <span>01 (983) 8372411</span>
            </div>   end phone number -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Mail"></i>
              </div>
              <h6>E-mail</h6>
              <a href="mailto:Info@coregre.com" style="color:#857870">Info@coregre.com</a>
            </div> <!-- end email -->

          </div>

          <div class="col-md-8">
            <form id="contact-form" action="#">

              <div class="row contact-row">
                <div class="col-md-6 contact-name">
                  <input name="name" id="name" type="text" placeholder="Nombre*">
                </div>
                <div class="col-md-6 contact-email">
                  <input name="mail" id="mail" type="email" placeholder="E-mail*">
                </div>
              </div>
              <div class="row contact-row">
                <div class="col-md-6 contact-name">
                  <input name="phone" id="phone" type="text" placeholder="Teléfono*">
                </div>
                <div class="col-md-6 contact-email">
                  <input name="country" id="country" type="email" placeholder="País*">
                </div>
              </div>

              <input name="subject" id="subject" type="text" placeholder="Asunto"> 
              <textarea name="comment" id="comment" placeholder="Mensaje"></textarea>
              <input type="submit" class="btn btn-lg btn-dorado btn-submit" value="ENVIAR MENSAJE" id="submit-message">
              <div id="msg" class="message"></div>
            </form>
          </div> <!-- end col -->

        </div>
      </div>
    </section> <!-- end contact -->



   <?php include("cls/footer.php"); ?>

  </div> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="js/rev-slider.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>



  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

  <script type="text/javascript">
    $(".bochure").click(function(){
      $(".blackk, .white").fadeIn();
      let pdf = $(this).attr("href");
      $("#pdfInput").val(pdf);

      return false;
    });
     $("#close, .blackk").click(function(){
        $(".blackk, .white").fadeOut();
     });
     $(".carousel").carousel({
        indicators: true
     });
     $("#pdfDesc").submit(function(){
        let pdf = $("#pdfInput").val();
        
        let form_data =  new FormData(document.getElementById("pdfDesc"));
        $.ajax({
                  url: '/cls/send.php',
                  method: 'POST',
                  data: form_data,
                  contentType: false,
                  processData: false,
                  beforeSend: function() 
                    {
                      $(".imgr").fadeIn();
                    },
                    success: function(response)
                      {
                        $("#dataRepsone").empty().append("Thanks.Wait a moment").fadeIn();
                        $(".imgr").fadeOut();
                        $(".blackk, .white").fadeOut();
                        
                                     
                      },


      });
                        
       window.open(pdf, '_blank');
      return false;
     });
  </script>
</body>
</html>