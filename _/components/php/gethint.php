<?php

$q=$_REQUEST["q"]; $hint="";

$link = mysqli_connect('localhost', 'yffu', '1989Oct.2319', 'hc');

if (mysqli_connect_errno($link)) {
	echo "failed to connect " . mysqli_connect_error();
}

$res=mysqli_query($link, "select distinct zipcode from hgi where hgi.zipcode like '$q%'");

while($obj=mysqli_fetch_array($res, MYSQLI_NUM)){
	// 	$tmp=json_encode($obj);
	// 	echo $tmp;
	// 	echo "</br>";
	// 	$tmp=json_decode($tmp, true);
// 		print_r($obj);
	// 	echo "</br>";
// 	echo $tmp["HospitalName"]."</br>";
	echo "<li><a tabindex='-1' href='zip=$obj[0]'>$obj[0]</a></li>";
}
?>