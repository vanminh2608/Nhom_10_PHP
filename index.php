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
	echo $num, " va ", $string , "\n";
	$num1 = 6;
	echo $sum = $num + $num1, "\n";
	?>

	<?php

	$arr = array(1, 2, 3);
	foreach ($arr as $value) {
		echo $value, "\n";
	}
	?>
</body>

</html>