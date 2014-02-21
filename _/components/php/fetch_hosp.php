<?php
include "gen_table.php";

$link = mysqli_connect('localhost', 'yffu', '1989Oct.2319', 'hc');

if (mysqli_connect_errno($link)) {
	echo "failed to connect " . mysqli_connect_error();
}

$res=mysqli_query($link, "select providernumber, hospitalname, city, state, zipcode from hgi where hgi.zipcode like '4810%'");

while($obj=mysqli_fetch_array($res, MYSQLI_ASSOC)){
// 	$tmp=json_encode($obj);
// 	echo $tmp;
// 	echo "</br>";
// 	$tmp=json_decode($tmp, true);
// 	print_r($tmp);
// 	echo "</br>";
	//echo $tmp["HospitalName"]."</br>";
	bs_col($obj);
}

?>