<?php 
function biodata($nama,$usia){
	$ceknama = is_string($nama);
	if ($ceknama==true) {
		$hasilnama=$nama;
	}
	else{
		$hasilnama="Nama harus diisi Text";
	}

	$cekusia = is_int($usia);
	if ($cekusia==true) {
		$hasilusia=$usia;
	}
	else{
		$hasilusia="Age harus diisi angka";
	}
	$address="Kota Tangerang Selatan";
	$hobbies=array("Desain","Ngoding");
	$is_married="false";
	$list_school = array(
		'name' 		=> 'SMK Saung Balong Nusantara', 
		'year_in'	=> 2013,
		'year_out'	=> 2016,
		'major'		=> 'Teknik Komputer & Jaringan'
	);
	$skill = array('Web Deeloper' => "expert");
	$interest_in_coding = "true";
	$output['biodata'] = array(
		'name' 		=> $hasilnama, 
		'age'		=> $hasilusia,
		'address'	=> $address,
		'hobbies'	=> $hobbies,
		'is_married'=> false,
		'list_school'=> $list_school,
		'skill'		=> $skill
	);
	echo json_encode($output);
}
header("Content-type:application/json");
biodata("ikrom",44);
?>