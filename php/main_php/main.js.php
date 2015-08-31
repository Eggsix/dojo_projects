<?php
header('Content-type: text/javascript');
?>

$(document).ready(function(){
  alert("<?php 
  						$num = rand(1, 99);
  						$num1 = rand(1, 99);
  						$sum = $num * $num1; 
  						echo strval($num) . ' x ' . strval($num1) . ' = ' . strval($sum);
  						?>");
});