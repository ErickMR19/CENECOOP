<?php

echo $header[0].",".$header[1].",".$header[2].",".$header[3]."\n";

foreach ($data as $value){
		echo $value["u"]["username"].",".$value["p"]["nombre"].",".$value["p"]["apellido1"].",".$value["u"]["username"]."\n";
}

?>
