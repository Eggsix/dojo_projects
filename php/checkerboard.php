<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checker Board</title>
		<style>
			#wrap {
				font-size: 0;
			}
		
			div.cols {
				display: inline-block;
				height: 50px;
				width: 50px;
				border: 1px solid black;
			}
			.red {
				background-color: red;
			}
			.black {
				background-color: black;
			}
		</style>
</head>
<body>
		<div id='wrap'>
			<?php 
			for($rows = 0; $rows < 8; $rows++) { 
				echo '<div class="rows">';
				if($rows%2!=0){ 
					for($cols = 0; $cols < 8; $cols++){ 
							if($cols%2!=0) { 
								echo '<div class="cols red"></div>';
							} else { 
								echo '<div class="cols black"></div>';
							} 
					} 
				echo '</div>';
				} else {
				for($cols = 0; $cols < 8; $cols++){ 
						if($cols%2==0) { 
							echo '<div class="cols red"></div>';
						} else { 
							echo	'<div class="cols black"></div>';
						} 
					} 
				}
			} 
			?>
		</div>
	
</body>
</html>