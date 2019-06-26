<?php

$competences = [
    [
        'name' => "Parcours",
        'desc' => "Lycée Germaine Tillion, 2015 - 2018, Baccalauréat ES\nYnov Campus Lyon, 2018 - 2024, Ingésup Informatique (Spécialisation Réseaux et Cybersécurité à partir de la troisième année).",
    ],
    [
        'name' =>"Diplômes",
        'desc' =>"Formation BAFA en cours.",
    ],
    [
        'name' =>"Certification",
        'desc' =>"CCNA1 en cours.",
    ],
    [
        'name' =>"Projet Professionnel",
        'desc' =>"Je désire me spécialiser dans le domaine des réseaux, et notamment de la cybersécurité au cours de ma formation, ce domaine m'intéressant beaucoup de par son développement extrêmement important, ainsi que des nouvelles technologies qui s'y développent.",
    ],
    [
        'name' =>"Langues",
        'desc' =>"Anglais niveau lycée, TOEIC (en cours, les notes sont celles des examens blancs) Listening : 445,00/495,00 Reading : 401,00/495,00.",
    ],
    [
        'name' =>"Logiciels maîtrisés",
        'desc' =>"Suite Office, Packet Tracer, GNS3, Visual Studio Code",
    ],
];
?>



<div class="desc">
    <?php


    	rand ( int $i , int 6) : int;

        for ($i = 0; $i < 6; $i++) {?>
		    <h3><?= $competences[$i]['name']?></h3>
		    <p><?= $competences[$i]['desc']?></p>
	<?php }  ?>