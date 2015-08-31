<?php
	function print_errors($session, $array) {
		echo '<p style="color:red;">' . $_SESSION[$session][$array] . "</p>";	
	}
?>