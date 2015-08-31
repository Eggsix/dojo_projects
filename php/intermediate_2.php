

<table style="border-collapse: collapse;">

		<tr>
			<?php
			for($h = 0; $h <= 9; $h++) {
			echo '<th style="height: 40px; width:40px; border: 1px solid black;">' . $h . '</th>';
			}
			?>
		<tr>
		</tr>
			<?php
			for($i = 1; $i <= 9; $i++) {
				if($i%2 != 0) {
				echo '<tr style="background-color:grey;">';
				} else {
				echo '<tr>';
				}
				echo '<td style="background-color: white;font-weight: bold; text-align: center; height: 40px; width:40px; border: 1px solid black;">'. $i . '</td>';
				for($j = 1; $j <= 9; $j++) {
				echo '<td style=" height: 40px; text-align: center; width:40px; border: 1px solid black;">' . ($i * $j) .'</td>';
				}
				echo '</tr>';
			}
			?>
</table>