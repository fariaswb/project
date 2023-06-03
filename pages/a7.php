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
    <div class="titulopost"> TUDO EM TODO O LUGAR AO MESMO TEMPO </div> 
    <div class="capafilme">
        <img src="https://br.web.img3.acsta.net/c_310_420/pictures/22/05/16/17/59/5165498.jpg" alt="" class="filmes">
    </div>
    <div class =textopost>Em Tudo em Todo o Lugar ao Mesmo Tempo, acompanhamos uma sobrecarregada imigrante chinesa, Evelyn Wang (Michelle Yeoh) que com sua lavanderia à 
        beira do fracasso e seu casamento com o marido covarde em ruínas, ela luta para lidar com tudo, incluindo um relacionamento ruim com seu pai crítico e sua filha 
        (Stephanie Hsu). E, como se não bastasse enfrentar a crise pessoal, Evelyn precisa se preparar para uma reunião desagradável com uma burocrata impessoal: Deirdre 
        (Jamie Lee Curtis), a auditora da Receita Federal. No entanto, à medida que a agente severa perde a paciência, uma inexplicável fenda no multiverso se abre, 
        e se torna uma possibilidade para a exploração reveladora de realidades paralelas. Evelyn parte rumo a uma aventura onde, sozinha, precisará salvar o mundo e impedir que uma entidade maligna
         destrua as finas e incontáveis ​​camadas do mundo invisível. Explorando outros universos e outras vidas que poderia ter vivido, 
        as coisas se complicam ainda mais, quando ela fica presa nessa infinidade de possibilidades sem conseguir retornar para casa.
    </div>
    <div class="clear"></div>
        </div>

 <!---botão do filme--> 
 <div class="botoes">
 <button id="botaofilme" onclick="alternarIframe()">ASSISTIR ONLINE</button>
    
 <div id="iframeContainer" class="playfilme">
        <iframe src="https://streamtape.com/e/16OW6eV60Vu1A3" width="800" height="600" frameborder="0" allowfullscreen></iframe>
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