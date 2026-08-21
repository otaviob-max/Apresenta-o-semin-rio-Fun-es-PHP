<?php
function limitarTexto($texto, $limite) {
    // Se o texto já for menor que o limite, devolve ele inteiro
    if (strlen($texto) <= $limite) {
        return $texto;
    }
    // Corta o texto no tamanho exato do limite
    $textoCortado = substr($texto, 0, $limite);

    // Encontra a posição do último espaço no texto cortado
    $ultimoEspaco = strrpos($textoCortado, ' ');

    // Corta novamente até o último espaço para não quebrar uma palavra
    $textoFinal = substr($textoCortado, 0, $ultimoEspaco);

    return $textoFinal . '...';
}

// Teste do código:
$artigo = "Aprender PHP é fundamental para o desenvolvimento de sistemas web.";

echo limitarTexto($artigo, 25);
// Saída: Aprender PHP é... (Cortou no espaço antes de "fundamental")

echo limitarTexto($artigo, 40);
// Saída: Aprender PHP é fundamental para o... (Cortou no espaço antes de "desenvolvimento")
?>