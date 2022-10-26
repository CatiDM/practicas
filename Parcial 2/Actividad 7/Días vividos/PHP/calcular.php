<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días que has vivido</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/estilo.css">
    <!-- Delgado Manzano Carmen Catalina -->
</head>

<body>
   
   <center color> <h1>Calcula los días que has vivido</h1> </center>
   <div class="formulario">
    <form action="" method="GET">
        <label><h3>INGRESA LA EDAD QUE TIENES</h3></label>
        <input type="number" name="edad" class="form-edad" min="0" max="110">
        <input type="submit" class="Boton-submit" name="button" value="Calcular">
<br></br><br></br><br></br><br></br>
    </form>
</div>
    <?php
    
    if (isset($_GET['edad'])) {
        $Edad=$_GET['edad'];
        $Calcular = $Edad * 365;
        echo "<h2 style='textt-aling:center;'>Los días vividos son $Calcular</h3>";
    }
    ?>
</body>

</html>