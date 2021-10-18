<!DOCTYPE html>
<?php
$usernumero = isset($_POST['usernumero']) ? $_POST['usernumero'] : 0;
$userparimpar = isset($_POST['userparimpar']) ? $_POST['userparimpar'] : 0;
$computador = " ";
$numerosmaos = rand(0, 10);
$parimpar = 0;
$soma = $usernumero + $numerosmaos;
$pi = 0;
$vencedor = " ";
$usuario = " ";

if ($usernumero == 0)
    $parimpar = 1;
else if ($usernumero == 1)
    $parimpar = 0;
if ($parimpar == 1) {
    $computador = "Ímpar.";
} else if ($parimpar == 0) {
    $computador = "Par.";
}
if ($userparimpar == 1) {
    $usuario = "Ímpar.";
} else if ($userparimpar == 0) {
    $usuario = "Par.";
}
if ($soma % 2 == 0) {
    $pi = 0;
} else if ($soma % 2 != 0) {
    $pi = 1;
}
if ($userparimpar == $pi) {
    $vencedor = "Usuário venceu.";
} else if ($userparimpar != $pi) {
    $vencedor = "Computador venceu.";
}
?>
<html lang="pt-BR">

<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <title>indexparimpar.php</title>
</head>

<body>
<?php  include  "menu.php" ; ?>
    <h1>Jogo do Par ou Ímpar</h1>
    <form action="" method="POST">
        <h2>Usuário, escolha o número desejado:</h2><br>
        <select action="usernumero" name="usernumero">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select> <br>
        <br>
        <input type="radio" name="userparimpar" id="userparimpar" value="0">Par<br>
        <input type="radio" name="userparimpar" id="userparimpar" value="1">Ímpar<br>
        <input type="submit" value="Jogar"><br>
    </form>
    <br>
    <h2>O computador escolheu:</h2>
    <h3><?php echo $computador; ?></h3>
    <br>
    <h2>O computador escolheu o número:</h2>
    <br>
    <?php echo "<img src='img/parimpar/$numerosmaos.png' alt=''>"; ?>
    <br>
    Número escolhido pelo usuário:
    <br>
    <?php echo "<img src='img/parimpar/$usernumero.png' alt=''>"; ?>
    <br>
    <?php echo "Soma dos números " . $soma; ?> <br>
    <?php echo $vencedor; ?>
</body>

</html>