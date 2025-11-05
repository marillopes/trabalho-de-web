<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .carrossel-container {
    width: 80%;
    margin: auto;
    overflow: hidden; /* Esconde as imagens que saem da tela */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

.carrossel-track {
    display: flex;
    width: calc(200%); /* porque repetimos as imagens */
    animation: scroll 15s linear infinite;
}

.carrossel-track img {
    width: 25%; /* 4 imagens visíveis ao mesmo tempo */
    flex-shrink: 0;
    transition: transform 0.5s;
}

@keyframes scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); } /* metade do track para repetir */
}
.carrossel-container:hover .carrossel-track {
    animation-play-state: paused;
}



    </style>
</head>
<body>
    <div class="carrossel-container">
    <div class="carrossel-track">
        <img src="1201300-taylor-swift-son-album-the-life-of-a-showgirl-devient-le-plus-streame-en-une-journee.jpg" alt="Artista 1">
        <img src="Sabrina-Carpenter-libera-seu-novo-album-‘Mans-Best-Friend.jpg" alt="Artista 2">
        <img src="header-portfolio-1920x1080px.jpg" alt="Artista 3">
        <!-- repetimos as imagens para o loop infinito -->
       <img src="1201300-taylor-swift-son-album-the-life-of-a-showgirl-devient-le-plus-streame-en-une-journee.jpg" alt="Artista 1">
        <img src="Sabrina-Carpenter-libera-seu-novo-album-‘Mans-Best-Friend.jpg" alt="Artista 2">
    </div>
</div>
</body>
</html>
