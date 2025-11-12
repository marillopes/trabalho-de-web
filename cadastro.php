<?php include ('conexao.php')?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de usuários</h2>
    <form action="cadastro.php" method="POST">
        <label for="nome">Nome:</label>
         <input type="text" name="nome" required><br><br>
         <label for="email">Email:</label>
         <input type="email" name="email" required><br><br>
        <label for="sexo">Sexo</label>
        <select name="sexo" required>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
            <option value="outros">Outros</option>
        </select><br><br>
        <label for="data_nascimento">Data de nascimento</label>
        <input type="date" name="data_nascimento" required><br><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" required><br><br>
        <button type="submit" name="cadastrar">Cadastrar</button>
        <br><br><a href="login.php">Já é cadastrado? Faça login!</a>
    </form>

    <?php
        if(isset($_POST['cadastrar'])){
            $nome=$_POST['nome'];
            $email=$_POST['email'];
            $sexo=$_POST['sexo'];
            $data_nasc=$_POST['data_nascimento'];
            $senha=password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $sql= "INSERT INTO usuarios (nome, email, sexo, data_nascimento, senha)
            VALUES ('$nome', '$email', '$sexo', '$data_nasc', '$senha')";

            if($conexao->query($sql) === TRUE){
                echo "Usuário cadastrado com sucesso";
                header("refresh=3; url=home.php");
                } else {
                echo "Erro: " . $conexao->error;
                }
        }
    ?>
</body>
</html>
