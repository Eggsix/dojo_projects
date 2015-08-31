
<?php
$users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel') 
);
$users[] = array('first_name' => 'Preston', 'last_name' => 'Phan');
$users[] = array('first_name' => 'James', 'last_name' => 'Phan');
$users[] = array('first_name' => 'Charlie', 'last_name' => 'Brown');
$users[] = array('first_name' => 'Michael', 'last_name' => 'Jordan');
$users[] = array('first_name' => 'Tiger', 'last_name' => 'Woods');
$users[] = array('first_name' => 'Samus', 'last_name' => 'Arayan');
$users[] = array('first_name' => 'Jerry', 'last_name' => 'Springer');
$users[] = array('first_name' => 'Carry', 'last_name' => 'Underwood');
$users[] = array('first_name' => 'Happy', 'last_name' => 'Gilmore');
$users[] = array('first_name' => 'Bruce', 'last_name' => 'Wayne');

?>
<!doctype html>
<html>
	<head>
		<style>
			.table {
				border-collapse: collapse;
			}
			th, td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<table class='<?php echo 'table '?>'>
		<tr>
			<th>users #</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name in upper case</th>
			<th>Length of full name</th>
		</tr>
		<?php 
			$count = 0;
			foreach ($users as $user) {
				if ($count%5!=0) {
				 echo '<tr>';
				} else {
				echo '<tr style="background-color: black; color: white;">';
				}
				echo '<td>' . $count . '</td>';
				echo '<td>' . $user['first_name'] . '</td>';
				echo '<td>' . $user['last_name'] . '</td>';	
				echo '<td>' . strtoupper($user['first_name'] . ' ' . $user['last_name']) . '</td>';
				echo '<td>' . strlen($user['first_name'] . $user['last_name']);
				echo '</tr>';
				$count++;
			}
		?>
		</table>

<br>


<table class='<?php echo 'table '?>'>
		<tr>
			<th>users #</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name in upper case</th>
			<th>Length of full name</th>
		</tr>
			<?php 
			for($rows = 0; $rows < count($users); $rows++) {
				if($rows%5 == 0 && $rows != 0) {
					echo '<tr style="background-color: black; color: white;">';
				} else {
				echo '<tr>';
			}
					for($col = 0; $col < count($rows); $col++) {
						echo '<td>' . $rows . '</td>';
						echo '<td>' . $users[$rows]['first_name'] . '</td>';
						echo '<td>' . $users[$rows]['last_name'] . '</td>';
						echo '<td>' . strtoupper($users[$rows]['first_name'] . ' ' . $users[$rows]['last_name']) . '</td>';
						echo '<td>' . strlen($users[$rows]['first_name'] . $users[$rows]['last_name']) . '</td>';
					}
				echo '</tr>';
			}
		?>
		</table>
	</body>
</html>


