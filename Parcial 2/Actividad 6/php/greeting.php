<?php
/*
*Descripcion:Componente los datos de formulario. 
*AUTOR:Carmen Catalina Delgado Manzano
*FECHA: 12 de Octubre de 2022
*/
/*Definimos las variables con el método POST */
$Name=$_POST['Nombre'];
$edad=$_POST['Edad'];
$phone=$_POST['Telefono'];

printf("Hola %s <p> %s tienes una edad de %s <p> Y tu número de telefono es: %s",$Name,$Name,$edad,$phone);
echo "<br> <br> <br> <br>";
echo "<a href='../html/greetingForm.html'> Regresar </a>"

?>
