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
    <div class="titulopost">DIVERTIDAMENTE</div> 
    <div class="capafilme">
        <img src="https://wp.ufpel.edu.br/empauta/files/2015/06/divertida-mente-poster-1.jpg" alt="" class="filmes">
    </div>
    <div class =textopost>Riley é uma garota divertida de 11 anos de idade, que deve enfrentar mudanças importantes em sua vida quando seus pais decidem deixar a sua cidade natal, 
        no estado de Minnesota, para viver em San Francisco. Dentro do cérebro de Riley, convivem várias emoções diferentes, como a Alegria, o Medo, a Raiva, o Nojinho e a Tristeza. 
        A líder deles é Alegria, que se esforça bastante para fazer com que a vida de Riley seja sempre feliz. Entretanto, uma confusão na sala de controle faz com que ela e Tristeza
         sejam expelidas para fora do local. Agora, elas precisam percorrer as várias ilhas existentes nos pensamentos
         de Riley para que possam retornar à sala de controle - e, enquanto isto não acontece, a vida da garota muda radicalmente.
    </div>
    <div class="clear"></div>
        </div>

 <!---botão do filme--> 
 <div class="botoes">
 <button id="botaofilme" onclick="alternarIframe()">ASSISTIR ONLINE</button>
    
 <div id="iframeContainer" class="playfilme">
        <iframe src="https://streamtape.com/e/JJvJWDgpvVU9vK/" width="800" height="600" frameborder="0" allowfullscreen></iframe>
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


