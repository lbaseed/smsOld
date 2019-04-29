<?php

$dt = "21/04/2019";

$date = DateTime::createFromFormat("d/m/Y" , $dt);
echo $date->format('Y-m-d');
?>