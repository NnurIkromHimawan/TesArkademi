<?php 
function triangle($angka){
	for($i = 0; $i <= $angka; $i++){  
		for($j = 1; $j <= $i; $j++){  
			echo "* ";  
		}  
		echo "<br>";  
	}	
}
triangle(8);

?>