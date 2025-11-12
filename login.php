<?php include ('conexao.php')?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
        <button type="submit" name="entrar">Entrar</button>
        <br><br><a href="cadastro.php">Não é cadastrado ainda?</a>
    </form>

    <?php
    if(isset($_POST['entrar'])){
        $email=$_POST['email'];
        $senha=$_POST['senha'];

        $sql="SELECT*FROM usuarios where email='$email'";
        $resultado = $conexao->query($sql);

        if($resultado->num_rows>0){
            $usuario = $resultado->fetch_assoc();

            if(password_verify($senha,$usuario['senha'])){
                session_start();
                $_SESSION['usuario'] = $usuario['nome'];
                header("Location: carrossel.php");}
                else{
                    echo "Senha incorreta!";
                }}
                else{
                    echo "Usuário não encontrado!";
                }
            }

    ?>
</body>
</html>
