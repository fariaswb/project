<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../img/logopreta.png">
    <title>CineTime</title>
</head>
<body>
<?php
include 'topo2.php';
?>
 <!---conteudo post-->
 <section class = postfilmes>
    <div class="titulopost"> Vingadores: Guerra Infinita</div> 
    <div class="capafilme">
        <img src="https://2.bp.blogspot.com/-ocyRhf7eju0/WsYYpTvNyKI/AAAAAAABRfk/eB7jcNild30uN8PkqQ8xRC06Iz1gNBYkgCKgBGAs/s1600/IMG_9230.JPG" alt="" class="filmes">
    </div>
    <div class =textopost>Homem de Ferro, Thor, Hulk e os Vingadores se unem para combater seu inimigo mais poderoso, o maligno Thanos. Em uma missão para coletar todas as seis pedras infinitas, Thanos planeja usá-las para infligir sua vontade maléfica sobre a realidade.</div>
    <div class="clear"></div>
        </div>

 <!---botão do filme--> 
 <div class="botoes">
 <button id="botaofilme" onclick="alternarIframe()">ASSISTIR ONLINE</button>
    
 <div id="iframeContainer" class="playfilme">
        <iframe src="https://streamtape.com/e/opyD2wzdOBfJoMG" width="800" height="600" frameborder="0" allowfullscreen></iframe>

 </div>
<br> <br><br> <br><br> <br>
</div>  



<!--avaliação-->

<h1 class="texto1">Avalie o filme</h1>
    
<div id="rating-container">
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star5"></label>
    <input type="radio" id="star4" name="rating" value="4" />
    <label for="star4"></label>
    <input type="radio" id="star3" name="rating" value="3" />
    <label for="star3"></label>
    <input type="radio" id="star2" name="rating" value="2" />
    <label for="star2"></label>
    <input type="radio" id="star1" name="rating" value="1" />
    <label for="star1"></label>
</div>

<div class="mensagem"></div>

<script>
    var ratingRadios = document.querySelectorAll('input[name="rating"]');
    var mensagemElement = document.querySelector('.mensagem');

    ratingRadios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            var rating = this.value;
            mensagemElement.innerText = 'Você avaliou o filme com ' + rating + ' estrelas!';
        });
    });
</script>


<!--avaliação-->





<!---comentario-->

<h1 class="texto1" id="textcoment">Comentários</h1>

<form id="comment-form" action="processar_comentario.php" method="POST">
    <label for="nickname">Nome:</label>
    <input type="text" id="nickname" name="nickname" required><br>
    <textarea id="comment-input" name="comment" placeholder="Digite seu comentário"></textarea>
    <button type="submit">Enviar</button>
</form>

<div id="localcomentario">
</div>

<script>
    document.getElementById("comment-form").addEventListener("submit", function(event) {
        event.preventDefault(); 
        var form = event.target;
        var formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            body: formData
        })
        .then(response => response.text())
        .then(data => {
          
            form.reset();
            atualizarComentarios();
        })
        .catch(error => console.error(error));
    });

    function atualizarComentarios() {
        fetch("carregar_comentarios.php") 
            .then(response => response.text())
            .then(data => {
                
                document.getElementById("localcomentario").innerHTML = data;
            })
            .catch(error => console.error(error));
    }

    window.addEventListener("load", atualizarComentarios);
</script>


<!---comentario-->

 </section>

<?php
include '../carregar_comentarios.php';
include '../processar_comentario.php';
?>


 <?php
include '../rodape.php';
?>
<script src="../script.js"></script>
</body>
</html>

