<!DOCTYPE html>
<?php
 $dadosjogador1 = rand(1, 6);
 $dadosjogador2 = rand(1, 6);
 $dadoscomputador1 = rand(1, 6);
 $dadoscomputador2 = rand(1, 6);
 $somajogador = ($dadosjogador1 + $dadosjogador2);
 $somacomputador = ($dadoscomputador1 + $dadoscomputador2);

     if ($somajogador > $somacomputador)
        $win ="O Jogador1 venceu!";

    else if ($somajogador < $somacomputador)
        $win = " O computador venceu!";

    else if ($somajogador == $somacomputador)
        $win = "Houve um empate!";

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
     <title><h1>Jogo de dados<h1> </title>
</head>
<body>
<?php  include  "menu.php" ; ?>
    <h1>Jogo de Dados <h1>
<form action= " " method="post">
    <input type="submit"  value="Lançar Dado">
</form> 
Dados Jogador1:
<br>
<?php
     echo "<img src= 'img/$dadosjogador1.png' alt = ' '>";
     echo "<img src= 'img/$dadosjogador2.png' alt = ' '>";
   
?>
<br>
<br>
Dados Computador:
<br>
<?php 
    echo "<img src= 'img/$dadoscomputador1.png' alt = ' '>";
    echo "<img src= 'img/$dadoscomputador2.png' alt = ' '>";
?>
<br>
A soma do Jogador1 foi:
<?php echo $somajogador;
?>
<br>
A soma do computador foi:
<?php echo $somacomputador;
?>
<br>
O resultado final:
<br>
<?php 
    echo $win;
?>
</body>
</html>