<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generando tabla</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="../css/miestilo.css">
    <!-- Delgado Manzano Carmen Catalina -->
</head>
<body>
<div class="text">Generando Tabla</div>
<p></p> 
	<form action="" method="GET">
		<label><h1>COLUMNA</h1></label>
		<input type="number" name="Columnas" class="C1">
		<label><h1>FILA</h1></label>
		<input type="number" name="Filas" class="F1">
		<input type="submit" name="Boton" value="Calcular">
		<p></p><p></p><p></p>
	</form>
	

<?php 
if ($_GET) {
	
$columna=$_GET['Columnas'];
$fila=$_GET['Filas'];

if($fila && $columna && isset($_GET['Columnas'])){
	echo "<center>";

	echo "<table aling='center'>";

	for($tab=1; $tab<=$_GET['Filas'];$tab++){
		echo "<tr>";//renglon 
		for ($tabla=1; $tabla <=$_GET['Columnas'] ; $tabla++) 
		{
			echo "<td>";
		echo "$tab$tabla";
		echo "</td>";  
	}
		echo "</tr>";
	}
	echo "</table>"; 
	echo "</center>";
}
}

?>	

</body>
</html>