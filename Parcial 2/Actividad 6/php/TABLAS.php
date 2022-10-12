<?php
/*
*Descripcion:Cálcular las tablas de multiplicar. 
*AUTOR:Carmen Catalina Delgado Manzano
*FECHA: 12 de Octubre de 2022
*/
/*Definimos las variables con el método POST */
$tabla=$_POST['Numero'];

echo "<h1> Tablas de Multiplicar </h1>"; 
for ($i=1; $i<=10;$i++){
    /*Creamos una variable donde nos dara el resultado de las multiplicaciones*/
     $resul=$i*$tabla;
   echo "$tabla x $i= ",$resul,"<br>";
}
echo "<br>";
echo "<a href='../html/TABLAS.html'> Regresar </a>"
/*El método POST envía datos al servidor, por lo que al incertan en el formualrio el número que deseas este toma valor en php cuando lo asignas con una variable*/ 
?>
