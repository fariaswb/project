<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/bebaa3aead.js" crossorigin="anonymous"></script>

    
    <title>CineTime</title>
</head>
<body>
     <!-- topo fixo não alterar -->
     <header> 
        <div class="container">
            
        <nav class="menu">
            <div class="logo">
                <img src="../img/logo-no-background.png" alt="">
            </div>
            <ul class= "ul">
                <a href="../index.php">HOME</a> 
                <a href="acao.php">Ação</a>
                <a href="comedia.php">Comédia</a>
                <a href="drama.php">Drama</a>
                <div class ="close" onclick = "fecharMenu()">
                <i class="fa-sharp fa-solid fa-circle-xmark"></i>

                </div>
             </ul>
                
                 <div class="mobile-menu" onclick="abrirMenu()">
                 <i class="fa-solid fa-bars"></i>
                </div>
         </nav>
        
        <section class="banner">
            <div class = "banner-text">
                <h1>Lançamentos do Cinema</h1>
                <p>Confira os últimos lançamentos do cinema com um clique</p>

        
            </div>
        </section>
        </div>
        
 </header>
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
        { nome: "Vingadores", pagina: "../pages/a1.php" },
        { nome: "Duro de Matar", pagina: "../pages/a2.php" },
        { nome: "Esquema de Risco", pagina: "../pages/a3.php" },
        { nome: "John Wick", pagina: "../pages/a4.php" },
        { nome: "Agente Infiltrado", pagina: "../pages/a5.php" },
        { nome: "Avatar", pagina: "../pages/a6.php" },
        { nome: "Tudo em Todo Lugar", pagina: "../pages/a7.php" },

        { nome: "DIVERTIDAMENTE", pagina: "../pages/c1.php" },
        { nome: "10 Coisas", pagina: "../pages/c2.php" },
        { nome: "O AUTO DA COMPADECIDA", pagina: "../pages/c3.php" },
        { nome: "AS BRANQUELAS", pagina: "../pages/c4.php" },
        { nome: "O DIABO VESTE PRADA", pagina: "../pages/c5.php" },
        { nome: "GENTE GRANDE", pagina: "../pages/c6.php" },
        { nome: "Shrek", pagina: "../pages/c7.php" },

        { nome: "A BALEIA", pagina: "../pages/d1.php" },
        { nome: "A PELE QUE HABITO", pagina: "../pages/d2.php" },
        { nome: "Histórias Cruzadas", pagina: "../pages/d3.php" },
        { nome: "JOBS", pagina: "../pages/d4.php" },
        { nome: "Encontro Marcado", pagina: "../pages/d5.php" },
        { nome: "Palmer", pagina: "../pages/d6.php" },
        { nome: "Extraordinário", pagina: "../pages/d7.php" },
       
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

<script src="script.js"></script>
</body>
</html>



