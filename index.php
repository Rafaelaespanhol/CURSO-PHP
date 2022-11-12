<?php
echo 'Olá mundo<br>';
echo 'Rafaela Espanhol';
/* comentario de varias linhas
http://localhost/curso-php/index.php
*/

// comentario de uma linha
print('<h1>escrevendo</h1>');

print_r('<h2>escrevendo de novo</h2>');

$nome = 'Rafaela';
$idade = 24;
$altura = 1.55;
$fumante = false;

echo'<br>';
echo $nome . '<br>';
echo $idade . '<br>';
echo $altura .'<br>';
echo $fumante . '<br>';
echo 'Olá' . $nome . ' você tem ' . $idade .'anos';

echo '<hr>';
echo gettype ($nome) . '<br>';
echo gettype ($idade) . '<br>';
echo gettype ($altura) . '<br>';
echo gettype ($fumante) . '<br>';
$altura = '1.75';
echo gettype($altura) . '<br>';
?> 
