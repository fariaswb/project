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
    <div class="titulopost">A BALEIA</div> 
    <div class="capafilme">
        <img src="https://m.media-amazon.com/images/M/MV5BZDQ4Njg4YTctNGZkYi00NWU1LWI4OTYtNmNjOWMyMjI1NWYzXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_SX300.jpghttps://m.media-amazon.com/images/M/MV5BZDQ4Njg4YTctNGZkYi00NWU1LWI4OTYtNmNjOWMyMjI1NWYzXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_SX300.jpg" alt="" class="filmes">
    </div>
    <div class =textopost>Em A Baleia, seguimos um professor de inglês e seu relacionamento fragilizado com sua filha, Ellie. Charlie (Brendan Fraser) é um professor de inglês recluso, que vive com obesidade severa e luta contra um transtorno de compulsão alimentar. Ele dá aulas online, mas sempre deixa a webcam desligada, com medo de sua aparência. Apesar de viver sozinho, ele é cuidado pela sua amiga e enfermeira, Liz (Hong Chau). Mesmo assim, ele é sozinho, convivendo diariamente apenas com a culpa, por ter abandonado Ellie (Sadie Sink), sua filha hoje adolescente que ele deixou junto com a mãe Mary (Samantha Morton), ao se apaixonar por um homem. Agora, ele irá buscar se reconectar com a filha adolescente e reparar seus erros do passado. Para isso, ele pede para que Ellie vá visitá-lo 
        sem avisar sua mãe e ela aceita, com o única condição de que ele a ajuda a reescrever uma redação para a escola. <br><br>
        </div>

 <!---botão do filme--> 
 <div class="botoes">
 <button id="botaofilme" onclick="alternarIframe()">ASSISTIR ONLINE</button>
    
 <div id="iframeContainer" class="playfilme">
        <iframe src="https://streamtape.com/e/J2mVDaJV6QHjvpM/" width="800" height="600" frameborder="0" allowfullscreen></iframe>
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


