<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .artista {
            margin: 20px;
            display: inline-block;
            text-align: center;
        }
        .artista img {
            width: 150px;
            height: auto;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        .artista img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1>Artistas</h1>
 
    <?php
    include('conexao.php');
 
    $sql = "SELECT id, imagem, nome, descricao FROM artistas";
    $resultado = $conexao->query($sql);
 
    while ($linha = $resultado->fetch_assoc()) {
        echo "<div class='artista'>";
        echo "<a href='detalhes.php?id=" . $linha['id'] . "'>";
        echo "<img src='" . $linha['imagem'] . "' alt='" . $linha['nome'] . "'>";
        echo "</a>";
        echo "<h3>" . $linha['nome'] . "</h3>";
        echo "<p>" . $linha['descricao'] . "</p>";
        echo "</div>";
    }
 
    $conexao->close();
    ?>
</body>
</html>

