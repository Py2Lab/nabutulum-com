
<?php 
	$datos= array(
			1=> array(
				"nombre" => "Tipology 1",
				"Medida" => "INTERIOR SURFACE 87.66 m2 <br> EXTERIOR SURFACE 29.53 m2 <br>TOTAL SURFACE 117.90 m2
2",
				"image" => "/img/tipografias/TP1.png"
 			),
 			2=> array(
				"nombre" => "Tipology 2",
				"Medida" => "INTERIOR SURFACE 80.75 m2 <br>EXTERIOR SURFACE 29.37 m2 <br> TOTAL SURFACE 110.12 m2
",
				"image" => "/img/tipografias/TP2.png"
 			),
 			3=> array(
				"nombre" => "Tipology 3",
				"Medida" => "INTERIOR SURFACE 27.39 m2 <br>EXTERIOR SURFACE 5.01m2 <br> TOTAL SURFACE 32.40 m2
",
				"image" => "/img/tipografias/TP3.png"
 			),
 			4=> array(
				"nombre" => "Tipology 4",
				"Medida" => "INTERIOR SURFACE  97.54 m2 <br>EXTERIOR SURFACE 34.52 m2 <br>TOTAL SURFACE 132.06 m2
",
				"image" => "/img/tipografias/TP4.png"
 			),
 			5=> array(
				"nombre" => "Tipology 5",
				"Medida" => "INTERIOR SURFACE  66.59 m2 <br>
							EXTERIOR SURFACE 11.32 m2 <br>
							TOTAL SURFACE 77.91 m2
							",
				"image" => "/img/tipografias/TP5.png"
 			),
 			6=> array(
				"nombre" => "Tipology 6",
				"Medida" => "SURFACE 147.21 m2",
				"image" => "/img/tipografias/TP6.png"
 			),
 			7=> array(
				"nombre" => "Tipology 7",
				"Medida" => "INTERIOR SURFACE  94.20 m2 <br>
							EXTERIOR SURFACE 27.16 m2 <br>
							TOTAL SURFACE 147.21 m2
							",
				"image" => "/img/tipografias/TP7.png"
 			),
 			8=> array(
				"nombre" => "Tipology 8",
				"Medida" => "INTERIOR SURFACE  82.37 m2 <br>
							EXTERIOR SURFACE 24.25 m2 <br>
							TOTAL SURFACE 106.62 m2
							",
				"image" => "/img/tipografias/TP8.png"
 			),
 			9=> array(
				"nombre" => "Tipology 9",
				"Medida" => "<strong>ROOF TOOP</strong> <br>
							INTERIOR SURFACE  19.01m2<br>
							EXTERIOR SURFACE 26.05m2 <br>
							<strong>MAIN FLOOR</strong><br><br>
							INTERIOR SURFACE  66.59 m2<br>
							EXTERIOR SURFACE 11.32 m2 <br>
							TOTAL SURFACE 122.97m2


							",
				"image" => "/img/tipografias/TP9.png"
 			),
 			10=> array(
				"nombre" => "Tipology 10",
				"Medida" => "<strong>ROOF TOOP</strong><br>
							INTERIOR SURFACE  28.57 m2<br>
							EXTERIOR SURFACE  29.94 m2 <br><br>
							<strong>MAIN FLOOR</strong><br>
							INTERIOR SURFACE  87.37 m2<br>
							EXTERIOR SURFACE  16.19 m2 <br>
							TOTAL SURFACE 162.07 m2


							",
				"image" => "/img/tipografias/TP10.png"
 			),
 			11=> array(
				"nombre" => "Tipology 11",
				"Medida" => "INTERIOR SURFACE  31.04 m2  <br>
								EXTERIOR SURFACE  56.23 m2 <br><br>
								MAIN FLOOR
								INTERIOR SURFACE  87.66 m2 <br>

								EXTERIOR SURFACE  24.61 m2 <br>

								TOTAL SURFACE 199.54m2

																",
				"image" => "/img/tipografias/TP11.png"
 			),
 			12=> array(
				"nombre" => "Tipology 12",
				"Medida" => "<strong>ROOF TOOP</strong><br>
							INTERIOR SURFACE  28.57  m2<br>
							EXTERIOR SURFACE  29.94 m2 <br><br>
							<strong>MAIN FLOOR<//strong>
							INTERIOR SURFACE  80.75 m2<br>
							EXTERIOR SURFACE  25.57m2 <br>
							TOTAL SURFACE 164.83m2

							",
				"image" => "/img/tipografias/TP12.png"
 			),
 			13=> array(
				"nombre" => "Tipology 13",
				"Medida" => "<strong>ROOF TOOP</strong><br>
							INTERIOR SURFACE  22.51 m2<br>
							EXTERIOR SURFACE  35.33m2 <br><br>
							<strong>MAIN FLOOR</strong><br>
							INTERIOR SURFACE  88.03 m2<br>
							EXTERIOR SURFACE  16.02 m2 <br>
							TOTAL SURFACE 161.89m2

							",
				"image" => "/img/tipografias/TP13.png"
 			)
	);
?>
<style type="text/css">
	
	#contentPop .row{
		display: flex;
		justify-content: center;
		align-items: center;
	}
</style>
<div  id="contentPop">
        <div class="row mt-minus-30">

          <div class="col-sm-7">
            <div class="about-description mt-30">
              <img src="<?php echo $datos[$_GET["tipo"]]["image"]?>" width="100%" />
            </div>
          </div> <!-- end col -->

          <div class="col-sm-5">
            <div class="skills-progress" id="skills">

              <h6>Tipologia <?php echo $datos[$_GET["tipo"]]["nombre"]; ?></h6>
               <p><?php echo $datos[$_GET["tipo"]]["Medida"]; ?></p>

            </div>
          </div> <!-- end col -->   

        </div>
      </div>