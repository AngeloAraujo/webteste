<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $maosjogador = isset ($_POST['maosjogador']) ? $_POST['maosjogador']:0;
    $computador = rand(1, 3);
    $vencedor = " ";

        
    if ($computador == 1) 
        if ($maosjogador == 2)
            $vencedor="Usuário Ganhou!"; 
        else if ($computador == 1)
             $vencedor="Empate";
        else if ($maosjogador == 3)
            $vencedor="Computador ganhou"; 
    
    else if($computador==2)
        if($maosjogador==1)
           $vencedor="Computador ganhou!";
        else if ($computador == 2)
             $vencedor="Empate";
        else if ($maosjogador == 3)
                $vencedor="Usuário ganhou";
            
    else if ($computador == 3)
        if ($maosjogador == 1)
            $vencedor="Usuário ganhou";
        else if ($computador == 3)
            $vencedor="Empate";
        else if ($maosjogador == 2)
                $vencedor="Computador ganhou";
    
    ?>
    <meta charset="UTF-8">
    <title> Pedra, Papel e Tesoura </title>
</head>
<body>
    <?php  include  "menu.php" ; ?>
<h2><b>Pedra, papel e tesoura<h2> <form action="" method="POST">
       </h2> Qual a sua escolha?<h2><h4>
        <input type="radio" name="maosjogador" id="maosjogador" value="1">Tesoura
        <input type="radio" name="maosjogador" id="maosjogador" value="2">Pedra
        <input type="radio" name="maosjogador" id="maosjogador" value="3">Papel
        </h4>
        <input type="submit" value="JOGAR">    
    </form>
    <p><h3>Usuário:<h3><p>
    <?php echo "<img src='img/pedrapapeltesoura/$maosjogador.png' alt=''>";?><p>
    <p><h3>Computador:<h3><p> 
    <?php echo "<img src='img/pedrapapeltesoura/$computador.png' alt=''>";?>
    <br>
    <?php echo $vencedor; ?>
 </body>
</html>