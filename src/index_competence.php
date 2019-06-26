<?php

$competences = [
    [
        'titre' => "Ce que je fais",
        'desc' => "Dans le cadre de mes deux premières années en Ingésup, je suis formé à la fois sur la partie réseau et sur la partie développement.",
    ],
    [
        'titre' =>"HTML / CSS",
        'desc' =>"Formé aux bases du HTML et CSS je suis capable de crééer un site web responsive avec des animations.",
    ],
    [
        'titre' =>"Javascript",
        'desc' =>"Dans le cadre de ma formation HTML / CSS j'ai appris a effectuer quelques scripts comme un caroussel et certaines animations pour mes sites web.",
    ],
    [
        'titre' =>"CCNA1",
        'desc' =>"Je suis en train de passer la certification CCNA1 que j'obtiendrais la fin de l'année ou l'année prochaine. Je suis capable d'effectuer un plan d'adressage, configurer des routeurs et des ordinateurs pour un petit réseau.",
    ],
];
?>



<?php
        for ($i = 0; $i < 4; $i++) {?>
		    <h2><?= $competences[$i]['titre']?></h2>
		    <p><?= $competences[$i]['desc']?></p>
	<?php }  ?>