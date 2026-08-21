<?php
// Exemplo de uso da função str_replace

$frase = "O gato subiu no telhado.";
$novaFrase = str_replace("gato", "cachorro", $frase);

echo "<h2>Função str_replace</h2>";
echo "Frase original: " . $frase . "<br>";
echo "Frase modificada: <strong>" . $novaFrase . "</strong>";
?>