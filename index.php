<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name)
{
	echo "Hello $name!";
}

?>

<html>

<head>
	<title>Visual Studio Code Remote :: PHP</title>
</head>

<body>
	<?php
	printf("<p>I love you</p>")
	?>
	<?php
	$num = 5;
	$string = "Quan ngu";
	printf("num = %d va string = %s", $num, $string);
	echo $num, " va ", $string, "\n";
	$num1 = 6;
	echo $sum = $num + $num1, "\n";
	?>
	<?php
	printf("<p>--------------</p>")
	?>
	<?php

	$arr = array(1, 2, 3);
	foreach ($arr as $value) {
		echo $value, "\n";
	}
	?>
	<?php
	printf("<p>--------------</p>")
	?>

	<?php
	$soluong = 11;
	$gia = 200000;
	if ($soluong < 10)
		$thanh_tien = $soluong * $gia;
	elseif ($soluong >= 10 and $soluong <= 20)
		$thanh_tien = ($soluong * $gia) * 0.95;
	else
		$thanh_tien = $soluong * $gia;

	echo $thanh_tien;
	?>
	<?php
	printf("<p>--------------</p>")
	?>
	<?php
	for ($i = 1; $i <= 200; $i++) {
		if ($i % 2 == 0) {
			echo '<span style="color:red; font-weight:bold;">' . $i . '</span> ';
		} else {
			echo '<span style="color:blue; font-style:italic;">' . $i . '</span> ';
		}
	}
	?>

</body>

</html>