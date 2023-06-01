<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>CineTime</title>
</head>
<body>
 

<?php
include 'topo.php';
?>


<!-- conteudo-->
    <main>


 <!-- barra de pesquisa-->     
<form>
    <input type="text" name="pesquisa" placeholder="Digite o nome do filme">
    <button onclick="buscarFilme()">Pesquisar</button>
</form>

<script>
   const frmPesquisa = document.querySelector("form");
frmPesquisa.onsubmit = function(ev) {
    ev.preventDefault();

    const pesquisa = ev.target.pesquisa.value;
    if (pesquisa.trim() === "") {
        alert("Campo Vazio!");
        return;
    }

    const filmes = [
        { nome: "Vingadores", pagina: "pages/a1.php" },
        { nome: "Duro de Matar", pagina: "pages/a2.php" },
        { nome: "Esquema de Risco", pagina: "pages/a3.php" },
        { nome: "John Wick", pagina: "pages/a4.php" },
        { nome: "Agente Infiltrado", pagina: "pages/a5.php" },
        { nome: "Avatar", pagina: "pages/a6.php" },
        { nome: "Tudo em Todo Lugar", pagina: "pages/a7.php" },

        { nome: "DIVERTIDAMENTE", pagina: "pages/c1.php" },
        { nome: "10 Coisas", pagina: "pages/c2.php" },
        { nome: "O AUTO DA COMPADECIDA", pagina: "pages/c3.php" },
        { nome: "AS BRANQUELAS", pagina: "pages/c4.php" },
        { nome: "O DIABO VESTE PRADA", pagina: "pages/c5.php" },
        { nome: "GENTE GRANDE", pagina: "pages/c6.php" },
        { nome: "Shrek", pagina: "pages/c7.php" },

        { nome: "A BALEIA", pagina: "pages/d1.php" },
        { nome: "A PELE QUE HABITO", pagina: "pages/d2.php" },
        { nome: "Histórias Cruzadas", pagina: "pages/d3.php" },
        { nome: "JOBS", pagina: "pages/d4.php" },
        { nome: "Encontro Marcado", pagina: "pages/d5.php" },
        { nome: "Palmer", pagina: "pages/d6.php" },
        { nome: "Extraordinário", pagina: "pages/d7.php" },
       
    ];
    
    const filmeEncontrado = filmes.find(filme => filme.nome.toLowerCase() === pesquisa.trim().toLowerCase());
    if (filmeEncontrado) {
        
        window.location.href = filmeEncontrado.pagina;
    } else {
        alert("Filme não encontrado!");
    }
}

</script>
    
<!-- barra de pesquisa-->   


<!-- filmes em destaque-->
<div class="titulo">Confira as novidades</div>    
        <section class="filmesd">
            <div class="filmes"> <a href="pages/drama.php">
                <img src="https://m.media-amazon.com/images/M/MV5BZDQ4Njg4YTctNGZkYi00NWU1LWI4OTYtNmNjOWMyMjI1NWYzXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_SX300.jpghttps://m.media-amazon.com/images/M/MV5BZDQ4Njg4YTctNGZkYi00NWU1LWI4OTYtNmNjOWMyMjI1NWYzXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_SX300.jpg" alt="">
                <h1>The Whale</h1>
                    </a>
                    </div>
                    <div class="filmes"><a href="/pages/comedia.php">
                        <img src="https://br.web.img3.acsta.net/medias/nmedia/18/97/52/82/20534159.jpg" alt="">
                        <h1>AS BRANQUELAS</h1></a>
                    </div>
                    <div class="filmes"><a href="pages/acao.php">
                        <img src="https://m.media-amazon.com/images/M/MV5BNjcxOTJhZTEtMWFiYi00NTkwLTlkMzktZDQwMGQ0ZjM3YWU2XkEyXkFqcGdeQXVyMTAxNzQ1NzI@._V1_SX300.jpg" alt="">
                        <h1>ESQUEMA DE RISCO: OPERAÇÃO FORTUNE</h1></a>
                    </div>
                    <div class="filmes"><a href="pages/drama.php">
                        <img src="https://br.web.img3.acsta.net/medias/nmedia/18/91/88/38/20167659.jpg" alt="">
                        <h1>ENCONTRO MARCADO</h1></a>
                    </div>
                    <div class="filmes"><a href="pages/acao.php">
                        <img src="https://m.media-amazon.com/images/M/MV5BMDExZGMyOTMtMDgyYi00NGIwLWJhMTEtOTdkZGFjNmZiMTEwXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_SX300.jpg" alt="">
                        <h1>JOHN WICK 4: BABA YAGA</h1></a>
                    </div>
                    <div class="filmes"><a href="pages/comedia.php">
                        <img src="https://images.filmesnocinema.com.br/covers/gente-grande.jpg" alt="">
                        <h1>Gente Grande</h1></a>
                    </div>
                    <div class="filmes"><a href="pages/drama.php">
                        <img src="https://br.web.img3.acsta.net/c_310_420/pictures/22/05/16/17/59/5165498.jpg" alt="">
                        <h1>TUDO EM TODO O LUGAR AO MESMO TEMPO</h1></a>
                    </div>
        </section>

<!-- filmes em destaque-->   



<!-- hover de noticias e criticas-->   
<section class="secdestaques">
    <div class="titulo"> Fique por dentro do mundo do cinema</div>
       <section class= noticias> 
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLTguwW0MwhTPTiD4jLs9-b9wh1lSkklxT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL1DD10E84B9B08A35" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </section>


</section>
<!-- hover de noticias e criticas-->  
                    

    </main>

    <?php
include 'rodape.php';
?>




    
</body>
</html>
    


