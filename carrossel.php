<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página Inicial</title>
<style>
  body {
    margin: 0;
    padding: 0;
    background-color: #111;
    color: #fff;
    font-family: Arial, sans-serif;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: flex-end; 
    align-items: center;
  }

  .btn-proximo {
    text-decoration: none;
    background: linear-gradient(45deg, #ff0066, #ffcc00);
    color: white;
    padding: 15px 35px;
    border-radius: 30px;
    font-size: 1.1rem;
    font-weight: bold;
    transition: 0.3s ease;
    margin-bottom: 40px;
    box-shadow: 0 0 15px rgba(255, 0, 100, 0.6);
  }

  .btn-proximo:hover {
    transform: scale(1.08);
    box-shadow: 0 0 25px rgba(255, 204, 0, 0.9);
  }
.carrossel-container {
    width: 80%;
    margin: auto;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}
 
.carrossel-track {
    display: flex;
    width: calc(200%); 
    animation: scroll 15s linear infinite;
}
 
.carrossel-track img {
    width: 25%;
    flex-shrink: 0;
    transition: transform 0.5s;
}
 
@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); } 
}
.carrossel-container:hover .carrossel-track {
    animation-play-state: paused;
}
</style>
</head>
<body>
    <br><br>
<a href="logout.php" style="color: aliceblue;">Sair</a>
  <div class="carrossel-container">
<div class="carrossel-track">
<img src="1201300-taylor-swift-son-album-the-life-of-a-showgirl-devient-le-plus-streame-en-une-journee.jpg" alt="Artista 1">
<img src="Sabrina-Carpenter-libera-seu-novo-album-‘Mans-Best-Friend.jpg" alt="Artista 2">
<img src="header-portfolio-1920x1080px.jpg" alt="Artista 3">
<img src="1201300-taylor-swift-son-album-the-life-of-a-showgirl-devient-le-plus-streame-en-une-journee.jpg" alt="Artista 1">
<img src="Sabrina-Carpenter-libera-seu-novo-album-‘Mans-Best-Friend.jpg" alt="Artista 2">
</div>
</div>
  <a href="artistas.php" class="btn-proximo">Ver Artistas 🎵</a>

</body>
</html> 
