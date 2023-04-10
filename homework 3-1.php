<!DOCTYPE html>
<html>
<body>
  
<?php

$sum = 0;
$prod = 1;
for ($n = 1; $n <= 30; $n++) 
{
  echo "$n <br>";
  $sum = $sum + $n;
  $prod = $prod * $n;
}
echo "<br>";
echo "합 : $sum <br><br>";

echo "곱 : $prod <br><br>";
?>

</body>
</html>