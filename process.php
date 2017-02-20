<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
	<div class="contenner02" align="center">
		<h2>Calculate</h2>
		<?php
			$money=$_POST['money'];
			$coin=$_POST['coin'];
			switch($coin) {
				case 1:
					$coin_m=0.03;
					$sum=$money*$coin_m;
					// echo "1 บาท (THB) =".$coin_m."ยูโร(EUR)"."<br><br>";
					echo "amount ".number_format($money,2)." " ."baht = ".number_format($sum,2)." "."euro(EUR)";
					break;
				case 2:
					$coin_m=0.03;
					$sum=$money*$coin_m;
					// echo "1 บาท (THB) =".$coin_m."ดอลลาร์สหรัฐอเมริกา(USD)"."<br><br>";
					echo "amount ".number_format($money,2)." " ."baht = ".number_format($sum,2)." "."US Dollar(USD)";
					break;
				case 3:
					$coin_m=3.58757333;
					$sum=$money*$coin_m;
					// echo "1 บาท (THB) =".$coin_m."เงินเยน(JPY)"."<br><br>";
					echo "amount ".number_format($money,2)." " ."baht = ".number_format($sum,2)." "."yen(JPY)";
					break;
			}
		?>
	</div>
</body>
</html>