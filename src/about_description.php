<?php

$db = "mysql:host=localhost;dbname=portfolio;charset=utf8mb4";
$username = "root";
$password = "";
$connection = new PDO($db, $username, $password);

$request = $connection->prepare("
    SELECT * FROM competence
");
$request->execute();

$competences = $request->fetchAll(PDO::FETCH_ASSOC);
// echo("<pre>");
// echo(var_dump($competences));
// echo("</pre>");
?>

<div class="desc alignH">

    <div class="top_line"></div>

    <div id="skills_container">

    <?php
    
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
        }  
        
    ?>

    </div>

    <div id="line"></div>
    <div class="bot_line"></div>
</div>

