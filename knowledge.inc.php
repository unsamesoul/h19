

<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">  
x:<input type="text" name="x">
y:<input type="text" name="y">
<input type="submit">
</form>

<?php

  echo "Задайте границы интервала <br>";

  $x=isset($_GET['x']) ? $_GET['x'] : 15;
  $y=isset($_GET['y']) ? $_GET['y'] : 20;
  
  $z = 15;

  if($z >= $x && $z <= $y)
      $d = 'Число '.$z.' находится между '.$x.' и '.$y;
  else $d = 'Число '.$z.' не находится между '.$x.' и '.$y;
?>
