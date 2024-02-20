<?php
// 1) Substitua todas as vogais em uma string por asteriscos (*)

function substituirVogais($str) {
    $vogais = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    
    $str = str_replace($vogais, '*', $str);
    
    return $str;
    
}

// Exemplo
$texto = "Substituir vogais por asteriscos";
$resultado = substituirVogais($texto);

echo $resultado;
echo "</br>";

// 2) // Verifique se um numero é primo ou n.

function Primo($numero) {
    
    if ($numero < 2) {
        return false;
    }

    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // N é primo se for divisível por algum numero
        }
    }

    return true; // É primo se n foi divisível por nenhum numero
}

// Exemplo
$numero = 17;
if (Primo($numero)) {
    echo $numero . " é primo.";
} else {
    echo $numero . " não é primo.";
}
echo "</br>";



// 3) Inverta uma string sem usar a função strrev().

function inverterString($str) {
    $tamanho = strlen($str);
    $stringInvertida = '';

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $stringInvertida .= $str[$i];
    }

    return $stringInvertida;
}

// Exemplo
$stringOriginal = "Hello, World!";
$stringInvertida = inverterString($stringOriginal);

echo $stringInvertida;
echo "</br>";

// 4) Crie uma função que receba um numero e retorne se é positivo, negativo ou zero.
function verificarNumero($numero) {
    if ($numero > 0) {
        return "Positivo";
    } elseif ($numero < 0) {
        return "Negativo";
    } else {
        return "Zero";
    }
}

// Exemplo de uso
$numero1 = 5;
$numero2 = -2;
$numero3 = 0;

echo $numero1 . " é " . verificarNumero($numero1) . "<br>";
echo $numero2 . " é " . verificarNumero($numero2) . "<br>";
echo $numero3 . " é " . verificarNumero($numero3) . "<br>";
echo "</br>";

// 5) Conte o numero de palavras em uma frase e imprima cada palavra em uma nova linha.
function contarPalavrasEImprimir($frase) {
    // Contar o numero de palavras
    $numPalavras = str_word_count($frase);

    echo "Número de palavras na frase: $numPalavras<br>";

    // Dividir a frase em palavras e imprimir cada palavra em uma nova linha
    $palavras = str_word_count($frase, 1);
    foreach ($palavras as $palavra) {
        echo $palavra . "<br>";
    }
}

// Exemplo de uso
$frase = "Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha.";
contarPalavrasEImprimir($frase);
echo "</br>";

// 6) Crie uma função que verifique se uma palavra é um palíndromo.

function ehPalindromo($palavra) {  
    $palavra = strtolower(str_replace(' ', '', $palavra));

    return $palavra === strrev($palavra);
}

// Exemplo de uso
$palavra1 = "radar";
$palavra2 = "php";
$palavra3 = "Kaiak";
$palavra4 = "level";
$palavra5 = "azul";

echo $palavra1 . " é um palíndromo? " . (ehPalindromo($palavra1) ? 'Sim' : 'Não') . "<br>";
echo $palavra2 . " é um palíndromo? " . (ehPalindromo($palavra2) ? 'Sim' : 'Não') . "<br>";
echo $palavra3 . " é um palíndromo? " . (ehPalindromo($palavra3) ? 'Sim' : 'Não') . "<br>";
echo $palavra4 . " é um palíndromo? " . (ehPalindromo($palavra4) ? 'Sim' : 'Não') . "<br>";
echo $palavra5 . " é um palíndromo? " . (ehPalindromo($palavra5) ? 'Sim' : 'Não') . "<br>";
echo "</br>";

// 7) Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3

for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        echo "Substituído<br>";
    } else {
        echo $i . "<br>";
    }
    echo "</br>";
}

// 8) Crie uma função que remova os espaços em branco de uma string.

function removerEspacos($str) {
    return preg_replace('/\s+/', '', $str);
}

// Exemplo de uso
$stringComEspacos = "Remova os espaços em branco";
$stringSemEspacos = removerEspacos($stringComEspacos);

echo $stringSemEspacos;
echo "</br>";

// 9) Crie um programa que calcule e imprima os números Fibonacci até o décimo termo.
function calcularFibonacci($n) {
    $fibonacci = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Exemplo de uso para imprimir os 10 primeiros termos da sequência de Fibonacci
$decimoTermo = 10;
$resultado = calcularFibonacci($decimoTermo);

echo "Os 10 primeiros termos da sequência de Fibonacci são: ";
echo implode(', ', $resultado);
echo "</br>";

// Crie uma função que receba um texto e retorne se é um pangrama (contém todas as letras do alfabeto pelo menos uma vez).
function ehPangrama($texto) {
    $alfabeto = 'abcdefghijklmnopqrstuvwxyz';

    // Converte o texto para letras minúsculas
    $texto = strtolower($texto);

    // Remove caracteres não-alfabéticos
    $texto = preg_replace('/[^a-z]/', '', $texto);

    // Converte a string para um array de caracteres únicos
    $caracteresUnicos = array_unique(str_split($texto));

    // Ordena os caracteres para comparar com o alfabeto
    sort($caracteresUnicos);

    return implode('', $caracteresUnicos) === $alfabeto;
}

// Exemplo de uso
$texto1 = "Um pequeno jabuti xereta viu dez cegonhas felizes.";
$texto2 = "Isso não é um pangrama.";

echo "O texto 1 é um pangrama? " . (ehPangrama($texto1) ? 'Sim' : 'Não') . "<br>";
echo "O texto 2 é um pangrama? " . (ehPangrama($texto2) ? 'Sim' : 'Não') . "<br>";

echo "</br>";

?>;