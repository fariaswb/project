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
    <div class="titulopost"> AVATAR: O CAMINHO DA ÁGUA </div> 
    <div class="capafilme">
        <img src="https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_SX300.jpg" alt="" class="filmes">
    </div>
    <div class =textopost>O Caminho da Água, sequência de Avatar (2009), após dez anos da primeira batalha de Pandora entre os Na'vi e os humanos, Jake Sully (Sam Worthington) vive pacificamente com sua família e sua tribo. Ele e Ney'tiri formaram uma família e estão fazendo de tudo para ficarem juntos, devido a problemas conjugais e papéis que cada um tem que exercer dentro da tribo. No entanto, eles devem sair de casa e explorar as regiões de Pandora, indo para o mar e fazendo pactos com outros Na'vi da região. Quando uma antiga ameaça ressurge, Jake deve travar uma 
        ]guerra difícil contra os humanos novamente. Mesmo com dificuldade, Jake acaba fazendo novos aliados - alguns dos quais já vivem entre os Na'vi e outros com novos avatares.
         Mesmo com uma guerra em curso, Jake e Ney'tiri terão que fazer de tudo para ficarem juntos e cuidar da família e de sua tribo.
    </div>
    <div class="clear"></div>
        </div>

 <!---botão do filme--> 
 <div class="botoes">
 <button id="botaofilme" onclick="alternarIframe()">ASSISTIR ONLINE</button>
    
 <div id="iframeContainer" class="playfilme">
        <iframe src="https://streamtape.com/e/e3qR2AGGvwtYG1l" width="800" height="600" frameborder="0" allowfullscreen></iframe>
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

<h1 class="texto1" id='textcoment'>Comentarios</h1>
    
<div id="localcomentario"></div>

<form id="comment-form">
    
      <label for="nickname">Nome:</label>
        <input type="text" id="nickname" name="nickname" required>
        <br>
    <textarea id="comment-input" placeholder="Digite seu comentário"></textarea>
    <button type="submit">Enviar</button>
</form>


<!---comentario-->

 </section>




 <?php
include '../rodape.php';
?>
<script src="../script.js"></script>

</body>
</html>
