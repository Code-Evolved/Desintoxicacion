<p hidden><?php $nombre1 = $_POST["nombre"];?></p>
<p hidden><?php  $apellido1 = $_POST["apellido"]; ?></p>
<p hidden><?php  $tiempode = $_POST["tiempo"]; ?></p>
<p hidden><?php  $_POST["cabeza1"]; ?></p>
 <p hidden><?php  $_POST["cabeza2"]; ?></p>
 <p hidden><?php  $_POST["cabeza3"]; ?></p>
 <p hidden><?php  $_POST["cabeza4"]; ?></p>

<p hidden><?php  $_POST["ojos1"]; ?></p>
 <p hidden><?php  $_POST["ojos2"]; ?></p>
 <p hidden><?php  $_POST["ojos3"]; ?></p>
 <p hidden><?php  $_POST["ojos4"]; ?></p>

<p hidden><?php  $_POST["oidos1"]; ?></p>
 <p hidden><?php  $_POST["oidos2"]; ?></p>
 <p hidden><?php  $_POST["oidos3"]; ?></p>
 <p hidden><?php  $_POST["oidos4"]; ?></p>

<p hidden><?php  $_POST["nariz1"]; ?></p>
 <p hidden><?php  $_POST["nariz2"]; ?></p>
 <p hidden><?php  $_POST["nariz3"]; ?></p>
 <p hidden><?php  $_POST["nariz4"]; ?></p>
<p hidden><?php  $_POST["nariz5"]; ?></p>


<p hidden><?php  $_POST["boga1"]; ?></p>
 <p hidden><?php  $_POST["boga2"]; ?></p>
 <p hidden><?php  $_POST["boga3"]; ?></p>
 <p hidden><?php  $_POST["boga4"]; ?></p>
<p hidden><?php  $_POST["boga5"]; ?></p>

<p hidden><?php  $_POST["piel1"]; ?></p>
 <p hidden><?php  $_POST["piel2"]; ?></p>
 <p hidden><?php  $_POST["piel3"]; ?></p>
 <p hidden><?php  $_POST["piel4"]; ?></p>
<p hidden><?php  $_POST["piel5"]; ?></p>

<p hidden><?php  $_POST["corazon1"]; ?></p>
 <p hidden><?php  $_POST["corazon2"]; ?></p>
 <p hidden><?php  $_POST["corazon3"]; ?></p>

<p hidden><?php  $_POST["pulmones1"]; ?></p>
 <p hidden><?php  $_POST["pulmones2"]; ?></p>
 <p hidden><?php  $_POST["pulmones3"]; ?></p>
 <p hidden><?php  $_POST["pulmones4"]; ?></p>

<p hidden><?php  $_POST["tracto1"]; ?></p>
 <p hidden><?php  $_POST["tracto2"]; ?></p>
 <p hidden><?php  $_POST["tracto3"]; ?></p>
 <p hidden><?php  $_POST["tracto4"]; ?></p>
<p hidden><?php  $_POST["tracto5"]; ?></p>
 <p hidden><?php  $_POST["tracto7"]; ?></p>
 <p hidden><?php  $_POST["tracto8"]; ?></p>

<p hidden><?php  $_POST["musculos1"]; ?></p>
 <p hidden><?php  $_POST["musculos2"]; ?></p>
 <p hidden><?php  $_POST["musculos3"]; ?></p>
 <p hidden><?php  $_POST["musculos4"]; ?></p>
<p hidden><?php  $_POST["musculos5"]; ?></p>

<p hidden><?php  $_POST["peso1"]; ?></p>
 <p hidden><?php  $_POST["peso2"]; ?></p>
 <p hidden><?php  $_POST["peso3"]; ?></p>
 <p hidden><?php  $_POST["peso4"]; ?></p>
<p hidden><?php  $_POST["peso5"]; ?></p>
<p hidden><?php  $_POST["peso6"]; ?></p>

<p hidden><?php  $_POST["energia1"]; ?></p>
 <p hidden><?php  $_POST["energia2"]; ?></p>
 <p hidden><?php  $_POST["energia3"]; ?></p>
 <p hidden><?php  $_POST["energia4"]; ?></p>

<p hidden><?php  $_POST["mente1"]; ?></p>
 <p hidden><?php  $_POST["mente2"]; ?></p>
 <p hidden><?php  $_POST["mente3"]; ?></p>
 <p hidden><?php  $_POST["mente4"]; ?></p>
<p hidden><?php  $_POST["mente5"]; ?></p>
 <p hidden><?php  $_POST["mente6"]; ?></p>
 <p hidden><?php  $_POST["mente7"]; ?></p>
 <p hidden><?php  $_POST["mente8"]; ?></p>

<p hidden><?php  $_POST["emociones1"]; ?></p>
 <p hidden><?php  $_POST["emociones2"]; ?></p>
 <p hidden><?php  $_POST["emociones3"]; ?></p>
 <p hidden><?php  $_POST["emociones4"]; ?></p>

<p hidden><?php  $_POST["otros1"]; ?></p>
 <p hidden><?php  $_POST["otros2"]; ?></p>
 <p hidden><?php  $_POST["otros3"]; ?></p>



<h2>Bienvenido  <?php echo $nombre1 ."  ".  $apellido1;?> </h2>
<h4>Hora --> <?php
setlocale(LC_ALL,"es_ES");
echo strftime("%A %d de %B del %Y %T");
?>    </h4>
<br>
<h4>Tiempo<h4>
<?php 
echo $tiempode;
 ?><br>




<H1> Cabeza</H1>
Tu puntaje es: <?php 
$totalcabeza = $_POST["cabeza1"] + $_POST["cabeza2"] + $_POST["cabeza3"] + $_POST["cabeza4"];
echo $totalcabeza;
 ?>

<H1> Ojos</H1>
Tu puntaje es: <?php 
$totalojos = $_POST["ojos1"] + $_POST["ojos2"] + $_POST["ojos3"] + $_POST["ojos4"];
echo $totalojos;
 ?>

<H1> Oidos</H1>
Tu puntaje es: <?php 
$totaloidos = $_POST["oidos1"] + $_POST["oidos2"] + $_POST["oidos3"] + $_POST["oidos4"];
echo $totaloidos;
 ?>

<H1> Nariz</H1>
Tu puntaje es: <?php 
$totalnariz = $_POST["nariz1"] + $_POST["nariz2"] + $_POST["nariz3"] + $_POST["nariz4"] + $_POST["nariz5"];
echo $totalnariz;
 ?>

<H1> Boca y Garganta</H1>
Tu puntaje es: <?php 
$totalboga = $_POST["boga1"] + $_POST["boga2"] + $_POST["boga3"] + $_POST["boga4"] + $_POST["boga5"];
echo $totalboga;
 ?>

<H1> Piel</H1>
Tu puntaje es: <?php 
$totalpiel = $_POST["piel1"] + $_POST["piel2"] + $_POST["piel3"] + $_POST["piel4"] + $_POST["piel5"];
echo $totalpiel;
 ?>

<H1> Corazon</H1>
Tu puntaje es: <?php 
$totalcorazon = $_POST["corazon1"] + $_POST["corazon2"] + $_POST["corazon3"];
echo $totalcorazon;
 ?>

<H1> Pulmones</H1>
Tu puntaje es: <?php 
$totalpulmones = $_POST["pulmones1"] + $_POST["pulmones2"] + $_POST["pulmones3"] + $_POST["pulmones4"];
echo $totalpulmones;
 ?>

<H1> Tracto Digestivo</H1>
Tu puntaje es: <?php 
$totaltracto = $_POST["tracto1"] + $_POST["tracto2"] + $_POST["tracto3"] + $_POST["tracto4"] + $_POST["tracto5"] + $_POST["tracto6"] + $_POST["tracto7"];
echo $totaltracto;
 ?>

<H1> Musculos y Articulaciones</H1>
Tu puntaje es: <?php 
$totalmusculos = $_POST["musculos1"] + $_POST["musculos2"] + $_POST["musculos3"] + $_POST["musculos4"] + $_POST["musculos5"];
echo $totalmusculos;
 ?>

<H1> Peso</H1>
Tu puntaje es: <?php 
$totalpeso = $_POST["peso1"] + $_POST["peso2"] + $_POST["peso3"] + $_POST["peso4"] + $_POST["peso5"] + $_POST["peso6"];
echo $totalpeso;
 ?>

<H1> Energia</H1>
Tu puntaje es: <?php 
$totalenergia = $_POST["energia1"] + $_POST["energia2"] + $_POST["energia3"] + $_POST["energia4"];
echo $totalenergia;
 ?>

<H1> Mente</H1>
Tu puntaje es: <?php 
$totaldemente = $_POST["mente1"] + $_POST["mente2"] + $_POST["mente3"] + $_POST["mente4"] + $_POST["mente5"] + $_POST["mente6"] + $_POST["mente7"] + $_POST["mente8"];
echo $totaldemente;
 ?>

<H1> Emociones</H1>
Tu puntaje es: <?php 
$totalemociones = $_POST["emociones1"] + $_POST["emociones2"] + $_POST["emociones3"] + $_POST["emociones4"];
echo $totalemociones;
 ?>

<H1> Otros</H1>
Tu puntaje es: <?php 
$totalotros = $_POST["otros1"] + $_POST["otros2"] + $_POST["otros3"]; 
echo $totalotros;
 ?>

<br><br>

<?php
	$generalfull = $totalcabeza + $totalojos + $totaloidos + $totalnariz + $totalboga + $totalpiel + $totalcorazon + $totalpulmones + $totaltracto + $totalmusculos + $totalpeso + $totalenergia + $totaldemente + $totalemociones + $totalotros;
?>
	<h1> GRAN TOTAL: <?php echo $generalfull;?></h1>
	


	<h1>En resumen usted :</h1> 

	<h1><?php

 
 if($generalfull >49)
		
 {
   echo ' Necesita Desintoxicacion de 28 DIAS';
 }
	
	
 else
 {
   echo ' Necesita Desintoxicacion de 10 DIAS';
 }

	?>
</h1>

