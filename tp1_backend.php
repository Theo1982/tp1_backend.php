<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Ejercicios</h1>
    
     <?php 
       echo "Hola Mundo";
     ?>
     <br>
     <hr>
     <?php  
       $mensaje = "Hola Mundo";
       echo $mensaje;
     ?> 
     <br>
     <hr>
     <?php 
       $enteroA = 3;
       $enteroB = 2;
       
       echo "Suma: ";
       echo $enteroA +  $enteroB;
       echo "<br>";
       echo "Resta: ";
       echo $enteroA -  $enteroB;
       echo "<br>";
       echo "Multiplicacion: ";
       echo $enteroA *  $enteroB;
       echo "<br>";
       echo "Division: ";
       echo $enteroA /  $enteroB;
       echo "<br>";
       echo "Resto: ";
       echo $enteroA %  $enteroB;
     ?> 
     <br>
     <hr>
     <?php
       $celsius = 20;
       $farenheit = ($celsius * 9/5) + 32;
       
       echo $farenheit;
     ?>
     <br>
     <hr>
     <?php
      $base = 18;
      $altura = 12;
      $perimetroR = (2 * $base) + (2 * $altura);
      $areaR = $base * $altura;

      echo "El Perimetro del Rectangulo es: ";
      echo $perimetroR;
      echo " centimetros";
      echo "<br>";
      echo "<br>";
      echo "El Area del Rectangulo es: ";
      echo $areaR;
      echo " centimetros";
     ?>
     <br>
     <hr>
     <?php
      $radio = 30;
      $perimetroC = 2 * 3.14 * $radio;
      $areaC = 3.14 * ($radio ** 2);

      echo "El Perimetro del Circulo es: ";
      echo $perimetroC;
      echo " centimetros";
      echo "<br>";
      echo "<br>";
      echo "El Area del Circulo es: ";
      echo $areaC;
      echo " centimetros";
     ?>

</body>
</html>