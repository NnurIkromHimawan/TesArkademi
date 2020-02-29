<?php
for( $j = 2; $j <= 30; $j++ )
{
	for( $k = 2; $k < $j; $k++ )
	{
		if( $j % $k == 0 )
		{
			$o[]=$j;
			break;

		}

	}
}

$no=5;
for ($i=0; $i < $no; $i++) { 
	$r=mt_rand(0,19);
	$ar[]=$o[$r];


}
echo array_sum($ar);
?>