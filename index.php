<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
123 <br>
wutipong <br>
wimonput <br>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi non quaerat expedita sequi natus porro numquam facilis explicabo repudiandae voluptates eveniet culpa, iure error eum officiis aspernatur ut delectus repellat?</p>

<?php
  echo"123<br>";
  echo"wutipong<br>";
  print"wimonput<br>";
  echo'warinchaprab<br>';
  echo"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi non quaerat expedita sequi natus porro numquam facilis explicabo repudiandae voluptates eveniet culpa, iure error eum officiis aspernatur ut delectus repellat?</p>";

  $name = 'naiin';
  $lastname = 'wincha';

  echo $name.'<br>';
  echo $lastname.'<br>';
  echo $name.' '.$lastname.'<br>'; 

  echo 10+10+10,'<br>';

  $a = 10;
  $b = 20;
  $c = 30;
  $d = 40;

  echo $a, $b, $c, $d.'<br>'; 

  echo $a + $b .'<br>';

  $sum = $a + $b + $c + $d;
  
  echo '<p>'.$sum.'</p>';

  $isString = 'warin';
  $isInt = 2222;
  $isfloat = 11.11;
  $isBoolean = true; 

  echo gettype($isString).'<br>';
  echo gettype($isInt).'<br>';
  echo gettype($isfloat).'<br>';
  echo gettype($isBoolean).'<br>';

  define("pi1",3.14159265358979323846);
  echo pi1.'<br>';

  $a = 10;
  $b = 20;

  $a++;
  echo $a."<br>";
  $b--;
  echo $b."<br>";

  $a = 10;
  $b = 20;

  $x=0;
  // $x = $x + $a;
  $x+=$a;
  
  echo $x ;

  // ลำดับความสำคัญ จากมากไปน้อย 
  // ()
  // *, / , %
  // + , - 
  // ถ้าลำดับความสำคัญเท่ากันจะดูจากซ้ายไปขวา

  $sum = 10+20-30*40/50;

  echo $sum;

















?>

</body>
</html>