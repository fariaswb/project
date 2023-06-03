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
    <div class="titulopost">A PELE QUE HABITO</div> 
    <div class="capafilme">
        <img src="https://upload.wikimedia.org/wikipedia/pt/e/e4/La_piel_que_habito.png" alt="" class="filmes">
    </div>
    <div class =textopost>Roberto Ledgard (Antonio Banderas) é um conceituado cirurgião plástico, que vive com a filha Norma (Blanca Suárez). Ela possui problemas psicológicos causados pela morte da mãe, que teve o corpo inteiramente queimado após um acidente de carro e, ao ver sua imagem refletida na janela, se suicidou. O médico de Norma acredita que esteja na hora dela tentar a socialização com outras
         pessoas e, com isso, incentiva que Roberto a leve para sair.  O cirurgião pensa que a filha foi estuprada e elabora um plano para se vingar do suposto estuprador.
    </div>
    <div class="clear"></div>
        </div>

 <!---botão do filme--> 
 <div class="botoes">
 <button id="botaofilme" onclick="alternarIframe()">ASSISTIR ONLINE</button>
    
 <div id="iframeContainer" class="playfilme">
        <iframe src="https://streamtape.com/e/8za6leDY7BSjz9/" width="800" height="600" frameborder="0" allowfullscreen></iframe>
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