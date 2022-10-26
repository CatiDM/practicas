<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <title>Actividad 4</title>
    <!-- Autor:Delgado Manzano Carmen Catalina  -->
    <style>
        body
        {
            background: #E9967A;
        }
        .rosa,.militar,.lavanda
        {
            width:120px ;
            height: 60px;
            border-radius: 17px;
        }
        .Web
        {
            font-size: 387%;
            font-family: 'Indie Flower', cursive;

        }
        
    </style>
</head>
<body>
   <center> <h1 id="Beto"><div class=Web>Soy una simple página</h1></center></div><br></br>
 
    <button id="btrosa" class="rosa" style="background-color: pink;" onmouseover="pink()">Rosa</button>
    <button id="btmilitar" class="militar" style="background-color: DarkKhaki;" onmouseover="DarkKhaki()">Militar</button>
    <button id="btlavanda" class="lavanda"  style="background-color: Lavender;" onmouseover="Lavender()">Lavanda</button>
<br></br> <br></br> <br></br>



    <script>
        function pink(){
           //alert("Outchh Soy ROSA")
           document.getElementById("Beto").style.backgroundColor="pink";
        }

        function DarkKhaki(){
           //alert("Outchh Soy MILITAR")
           document.getElementById("Beto").style.backgroundColor="DarkKhaki";
        }
        function Lavender(){
            //alert("Outchh Soy LAVANDA")
            document.getElementById("Beto").style.backgroundColor="Lavender";
        }
    </script>
      AUTOR:Carmen Catalina Delgado Manzano
</body>
</html>