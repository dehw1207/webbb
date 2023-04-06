<!DOCTYPE html>
<html>
<body>

<?php
echo "1번 문제 <br><br>";

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

echo "2번 문제 <br><br>";

$n = 30;

$random_numbers = array();
for ($i = 0; $i < $n; $i++) {
  $random_numbers[] = rand(10, 100);
}

sort($random_numbers);

echo "정렬: ";
foreach ($random_numbers as $num) {
  echo $num . " ";
}
echo "<br><br>";

echo "3번 문제 <br><br>";

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

echo "4번 문제 <br><br>";

$width = 3;
$height = 3;
$redius = 3;
$length = 3;
$pi = pi();

$triangle = 0.5 * $width * $height; 
echo "삼각형의 면적 : $triangle <br>"; 

$rectangle = $width * $height; 
echo "직사각형의 면적 : $rectangle <br>"; 

$circle = $redius * $redius * $pi; 
echo "원의 면적 : $circle <br>"; 

$cuboid = $length * $height * $width; 
echo "정육면체의 면적 : $cuboid <br>"; 

$cylinder = $redius * $redius * $pi * $height; 
echo "원통의 면적 : $cylinder <br>"; 

$sphere = 3/4 * $pi * $redius * $redius * $redius; 
echo "구의 면적 : $sphere <br><br>"; 

echo "5번 문제 <br><br>";
?>
<?php 
	// GET으로 넘겨 받은 year값이 있다면 넘겨 받은걸 year변수에 적용하고 없다면 현재 년도
	$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
	// GET으로 넘겨 받은 month값이 있다면 넘겨 받은걸 month변수에 적용하고 없다면 현재 월
	$month = isset($_GET['month']) ? $_GET['month'] : date('m');

	$date = "$year-$month-01"; // 현재 날짜
	$time = strtotime($date); // 현재 날짜의 타임스탬프
	$start_week = date('w', $time); // 1. 시작 요일
	$total_day = date('t', $time); // 2. 현재 달의 총 날짜
	$total_week = ceil(($total_day + $start_week) / 7);  // 3. 현재 달의 총 주차
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calendar</title>
	<style type="text/css">
		table {
			border-spacing: 0;
		}
		table td {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php echo "$year 년 $month 월" ?>
	<!-- 현재가 1월이라 이전 달이 작년 12월인경우 -->
	<?php if ($month == 1): ?>
		<!-- 작년 12월 -->
		<a href="/?year=<?php echo $year-1 ?>&month=12">이전 달</a>
	<?php else: ?>
		<!-- 이번 년 이전 월 -->
		<a href="/?year=<?php echo $year ?>&month=<?php echo $month-1 ?>">이전 달</a>
	<?php endif ?>

	<!-- 현재가 12월이라 다음 달이 내년 1월인경우 -->
	<?php if ($month == 12): ?>
		<!-- 내년 1월 -->
		<a href="/?year=<?php echo $year+1 ?>&month=1">다음 달</a>
	<?php else: ?>
		<!-- 이번 년 다음 월 -->
		<a href="/?year=<?php echo $year ?>&month=<?php echo $month+1 ?>">다음 달</a>
	<?php endif ?>


	<table border="1">
		<tr> 
			<th>일</th> 
			<th>월</th> 
			<th>화</th> 
			<th>수</th> 
			<th>목</th> 
			<th>금</th> 
			<th>토</th> 
		</tr> 

		<!-- 총 주차를 반복합니다. -->
		<?php for ($n = 1, $i = 0; $i < $total_week; $i++): ?> 
			<tr> 
				<!-- 1일부터 7일 (한 주) -->
				<?php for ($k = 0; $k < 7; $k++): ?> 
					<td> 
						<!-- 시작 요일부터 마지막 날짜까지만 날짜를 보여주도록 -->
						<?php if ( ($n > 1 || $k >= $start_week) && ($total_day >= $n) ): ?>
							<!-- 현재 날짜를 보여주고 1씩 더해줌 -->
							<?php echo $n++ ?>
						<?php endif ?>
					</td> 
				<?php endfor; ?> 
			</tr> 
		<?php endfor; ?> 
	</table>
</body>
</html>