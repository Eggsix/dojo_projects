<?php
for($i = 0; $i < 100; $i++) {
	$score = rand(50, 100);

	switch($score) {
		case ($score < 70): 
			$grade = "D";
		break;
		case ($score < 80):
			$grade = "C";
		break;
		case ($score < 90):
			$grade = "B";
		break;
		case ($score <= 100):
			$grade = "A";
		break;
	}
	echo $i . '<br>';
	echo '<h1>Your Score:' . $score . '/100</h1><br>';
	echo '<h2>Your grade:' . $grade . '</h2>';
}
?>