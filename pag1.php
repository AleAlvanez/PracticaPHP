<!DOCTYPE html>
<html>
<head>
<title> Pagina Web </title>
</head>
<body style="background-color:pink;">
 <?php 
	$precio1=27.80;
   echo '<h1 style="color:purple;" align="center">Bienvenido a Dulces momentos </h1>'; 
	echo'<p align="center"> Conoce nuestros platillos</p>';
	
	echo'<table class="table table-striped" border="1" bordercolor="blue">';
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
    "Vainilla" => "25.60",
	"Marmoleado"=>"19.40",
	"Tres leches"=>"18.00");
	
	while (list($clave, $valor) = each($pasteles)) {
    echo '<tr> <td>';
	echo"$clave";
	echo'</td><td>';
	echo"$valor";
	echo'</td></tr>';
	}
	echo'</tbody>';
	echo'</table>';
    echo '<img src= "selva-negra.png"  width="150" height="150"/>';	
	
	echo'<table class="table table-striped" border="1" bordercolor="green">';
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
	"Limon" => "28.80",
    "Queso" => "25.60",
	"Zarzamora"=>"19.40",
	"Platano"=>"18.00");
	
	while (list($clave, $valor) = each($pays)) {
    echo '<tr> <td>';
	echo"$clave";
	echo'</td><td>';
	echo"$valor";
	echo'</td></tr>';
	}
	echo'</tbody>';
	echo'</table>';
	echo '<img src= "limon.png" width="150" height="150"/>';
	
	
	
 ?>
</body>
</html>
