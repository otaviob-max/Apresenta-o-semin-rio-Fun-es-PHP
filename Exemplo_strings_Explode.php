<?php

$pizza = "queijo,molho,frango,massa";
$ingredientes = explode(",", $pizza);

echo $ingredientes[2]; // Esse é o frango
echo "<br>";
echo $ingredientes[0]; // Conta o zero, ent esse é o queijo

?>