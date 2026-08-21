<?php
$url = "/meu-link-do-site/";

// Remove apenas as barras "/" das pontas
$urlLimpa = trim($url, "/");

echo $urlLimpa; 
// Saída: meu-link-do-site
?>