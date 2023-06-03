window.onload = function() {
    var iframeContainer = document.getElementById('iframeContainer');
    iframeContainer.classList.add('playfilme');
};

function alternarIframe() {
    var iframeContainer = document.getElementById('iframeContainer');
    
    if (iframeContainer.classList.contains('playfilme')) {
        iframeContainer.classList.remove('playfilme');
    } else {
        iframeContainer.classList.add('playfilme');
    }
}

let ul = document.querySelector('nav .ul');
function abrirMenu(){
    ul.classList.add('open');

}
function fecharMenu(){
    ul.classList.remove('open');

}