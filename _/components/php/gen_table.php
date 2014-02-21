<?php
function bs_col($fields){
	echo "<ul class='list_group'>";
	foreach ($fields as $key=>$value) {
		echo "<li class='list-group-item'>$value</li>";
	}
	echo "</ul>";
}


?>