<!DOCTYPE html>
<html>
<head>
<title> Pagina Web </title>
</head>
<body style="background-color:pink;">
 <?php
	$precio1=27.86;
	$precio2=25.66;
	$precio3=19.40;
	$precio4=18.25;
   echo '<h1 style="color:purple;" align="center">Bienvenido a Dulces momentos </h1>';
	echo'<h3 align="center"> Conoce nuestros platillos</h3>';
	echo '<img src= "705.jpg" align="right" hspace="5" vspace="5"/>';
	echo'<table class="table table-striped" border="1" bordercolor="blue" align="left">';
	echo'<thead>';
    echo'<tr>';
	echo'<th> Pastel </th>';
	echo'</tr>';
	 echo'<tr>';
	echo'<th> Sabor </th><th> Precio </th>';
	echo'</tr>';
	echo'</thead>';
	echo'<tbody>';

	$pasteles = array(
	"Chocolate" => "$precio1",
    "Vainilla" => "$precio2",
	"Marmoleado"=>"$precio3",
	"Tres leches"=>"$precio4");
	while (list($clave, $valor) = each($pasteles)) {
    echo '<tr> <td>';
	echo"$clave";
	echo'</td><td>';
	echo"$valor";
	echo'</td></tr>';
	}
	echo'</tbody>';
	echo'</table>';
    echo '<img src= "selva-negra.png"  width="150" height="150" align="center" />';
	echo '<br> </br>';
	echo'<table class="table table-striped" border="1" bordercolor="green" align="left">';
	echo'<thead>';
    echo'<tr>';
	echo'<th> Pays </th>';
	echo'</tr>';
	 echo'<tr>';
	echo'<th> Sabor </th><th> Precio </th>';
	echo'</tr>';
	echo'</thead>';
	echo'<tbody>';

	$pays = array(
	"Limon" => "precio2",
    "Queso" => "precio3",
	"Zarzamora"=>"precio4",
	"Platano"=>"precio1");
	
	while (list($clave, $valor) = each($pays)) {
    echo '<tr> <td>';
	echo"$clave";
	echo'</td><td>';
	echo"$valor";
	echo'</td></tr>';
	}
	echo'</tbody>';
	echo'</table>';
	echo '<img src= "limon.png" width="150" height="150" align="center"/>';
	
	
	
 ?>
</body>
</html>
