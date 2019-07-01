# Projet Tech Web et BDD : Dossier Technique

## Sommaire :
* [1.0 Les différentes idées au niveau graphique](#1.0) 
* [2.0 Réalisation technique](#2.0) 
* [2.1 Ergonomie](#2.1) 
* [2.2 Javascript](#2.2) 
* [2.3 HTML / CSS](#2.3) 
* [2.4 BDD](#2.4) 
* [2.5 SEO](#2.5) 
* [3.0 Problèmes rencontrés](#3.0) 


### 1.0 Les différentes idées au niveau graphique <a id="1.0"></a> 

Au cours de ma première année nous avons via le module HTML / CSS nottament commencé une base de site web très simple afin d'apprendre comme il faut le language.

A l'issue de ce module j'ai donc eu une première version et idée du site-web :
![1st Website](https://zupimages.net/up/19/27/0n00.png "1st Website")

C'est la toute première ébauche de mon site qui ne plait pas du tout au niveau graphique comme au niveau du code HTML / CSS, tant par sa sémantique peu aboutie mais aussi par le cafouillis technique qu'il représentait.
J'ai donc eu l'idée de changer de site pour le rendre plus attractif grâce à du Javascript, en m'insipirant d'un modèle que j'avais vu sur internet, j'ai réalisé un mockup pour avoir un idée puis j'ai commencé le code.

![2nd Website](https://zupimages.net/up/19/27/2aju.png "2nd Website")

Mais j'ai très vite remarqué que je n'aurais jamais le temps de finir le site pour le rendu, le développement m'aurais pris beaucoup trop de temps et surtout il me manquait des connaissance en Javascript, j'ai donc opté pour une dernière idée de site qui sera l'idée finale; Un site plus "lambda" avec un menu, qui sera plus facilement réalisable et que je pourrais designer a ma guise maintenant que je suis plus à l'aise en CSS.

![3rd Website](https://zupimages.net/up/19/27/94t8.png "3rd Website")

### 2.0 Réalisation Technique <a id="2.0"></a> 
Pour réaliser ce portfolio j'ai mis en ^place mes connaissance personelles ainsi que celle que j'ai acquéris tout au long de l'année, j'ai pris le parti de m'aider en plus de certaines vidéos et tutoriels sur internet.

### 2.1 Ergonomie <a id="2.1"></a> 
Page d'acceuil pas trop chargée, avec image et grand textes, des sous-titre pour faciliter le prise d'informations par l'utilisateur afin qu'il sache ou aller.
Affichage rapide et intuitif avec un menu voyant, ainsi que des effets renforcant le visuel.
Choix d'une palette de 5 couleurs, pour ne pas surcharger le site en couleurs et utiliser une hierarchier au niveau du style :
* rouge : E63946 
* blanc : F1FAEE
* bleu clair : A8DADC
* bleu moyen : 457B9D
* bleu foncé : 1D3557


### 2.2 Javascript <a id="2.2"></a> 
Ajout d'un petit effet de type transition sur chaque changement de page, grâce a un petit bout de code en Javascript :
```
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
```
### 2.3 HTML / CSS <a id="2.3"></a> 
Concernant le code HTML / CSS j'ai procédé avec 4 pages différentes : Home, Work, About, Contact, chacune d'elle dispose du même mlenu avec des animations CSS.

La page "Work" : les animations on été faites en CSS grâce à de la perspetive et une transformation 3D :
```
.box{
    perspective: 1000px;
}

.box_position {
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.box:hover .box_position {
    transform: rotateY(180deg);
}
```
La page About : la timeline a été réalisée en mettant en relation la BDD avec le PHP :
```
for ($i = 0; $i < count($competences); $i++) {
            if ($i % 2 == 0) {
                echo("<div class='left'>");
            }
            else {
                echo("<div class='right'>");
            }
            echo("
                <h2 class='title'>" . $competences[$i]['nom']  . "</h2>
                <p class='desc'> " . $competences[$i]['desc'] . "</p>

                </div>
            ");
```
La page Contact : le formulaire de contact est en PHP, lié à une base de donnée et connecté grâce a Swift Mailer.
### 2.4 BDD <a id="2.4"></a> 
Pour la BDD j'ai utilisé l'interface en ligne de PHPMyAdmin pour exporter mon fichier Mysql. Ainsi j'ai donc afficher les éléments de chaque ligne dans la Timeline sur mon parcour et mes compétences acquises.
### 2.5 SEO <a id="2.5"></a> 

### 3.0 Problèmes rencontrés <a id="3.0"></a> 
Le developpement n'étant pas mon domaine de prédilection j'ai vraiment eu du mal à intégrer les notions de certains languages comme en Javascript ou en PHP, mais au fil de l'année et avec l'aide des mes camarades j'ai réussi à pouvoir faire naître un projet qui me plaisait au niveau visuel mais aussi au niveau du code.




