<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Kalam:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/miestilo.css">
</head>
<body  style="background-color:rgb(211, 198, 201);">
    <div class="fecha">
<?php
/*Asignamos valor a las variables*/
$Var1="Carmen Catalina Delgado Manzano";/*Autor*/
$Var3="Desarrolla aplicaciones web con conexión a base de datos";/*Materia*/
$Var2="Programación 5°PM"; /*Epecialidad y grado*/
/*Usamos la funcion printf("") para imprimir una cadena de elementos*/
printf("<h5><b>Alumna: %s <p> <b>Carrera y grado: %s <p> <b>Materia: %s <br></h5>",$Var1,$Var2,$Var3);
echo "<br>";
echo "El día de hoy es: ";
echo "<center>", "<h1>";
/*Muestra la fecha del día que se ejecuta*/
/*Devuelve una cadena formateada segun el formato que se usa, el de nosotros el día y mes  utilizamos 2 digitos con ceros iniciales, por ultimo representación numérica completa de un año, 4 dígitos*/
echo date  ("d-m-Y");
echo "</center>", "<h1>";
/*Imprimimos un mensaje ralacionado a php*/
print("Este es el mundo de php <b> ¡¡BIENVENIDO!!");

?>
<div>
</body>
</html>