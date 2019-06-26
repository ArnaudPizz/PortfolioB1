window.addEventListener("DOMContentLoaded", function(){
    setTimeout(()=>{
        var imageOver = document.querySelector("#over");
        imageOver.style.top = "100vh"; //a pour valeur 0vh, set a 100vh (bottom screen)
        imageOver.style.width = "99vw";

        setTimeout(()=>{
            imageOver.style.display = "none";
        }, 2100); //2100ms = 2.1s => temps écrit dans transition de l'élément dans le css
    }, 1000) //1000ms = 1s
});