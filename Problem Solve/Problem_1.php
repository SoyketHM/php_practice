
	<h3>Input n th Number , Output Addition all Input.</h3>
	
	<?php
		
		// function sumnum(){
		// 	$total = 0;
		// 	for ($i=1; $i <= 5; $i++) { 
		// 		$total += $i;
		// 	}
		// 	return $total;
		// }
		// echo "Total Sum: ". sumnum()."<br>";
	?>

<!-- //================================ -->
	<?php
		// function sumdata($x,$y){
		// 	$res = $x + $y;
		// 	return $res;
			
		// }
		// echo "Total: ". sumdata(10,20);

	?>

<!-- //================================ -->

	<?php
		function sumdata(){
			$num = func_num_args();
			echo $num;
			$res = 0;

			$data = func_get_args();
			for ($i=0; $i < $num; $i++) { 
				$res += $data[$i];
			}
			return $res;
			
		}
		echo "<br>"."Total Sum: ". sumdata(10,20,30,80);

	?>
