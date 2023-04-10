<!DOCTYPE html>
<html>
<body>

<?php

$fib = array(1, 1);
for ($i = 2; $i <= 5; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
}

echo "1 1 1<br>";
echo "2 1 2<br>";
echo "3 2 1.5<br>";
echo "4 3 ".round($fib[4]/$fib[3], 6)."<br>";
echo "5 5 ".round($fib[5]/$fib[4], 6)."<br>";
echo "6 8<br><br>";
?>

</body>
</html>