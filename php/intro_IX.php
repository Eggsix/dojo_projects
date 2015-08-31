<?php

	function print_list($items) {
		echo '<ul>';
		foreach($items as $item) {
		echo '<li>'. $item . '</li>' ;
		}
		echo '</ul>';
	}
  $A = array(1, 2, 'pie');
	print_list($A);
?>