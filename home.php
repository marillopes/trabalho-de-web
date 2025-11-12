<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>INÍCIO</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
    <a href="logout.php">Sair</a>
</body>
</html>
