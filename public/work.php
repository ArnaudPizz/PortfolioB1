<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" >
    <script src="./js/main.js"></script>
</head>

<!--Header -->
<body>
    <div id="over"></div>

    <div class="menu_container">
    <div id="logo"><a href="index.php">Arnaud PIZZETTA</a></div>
        <nav>
            <ul>
                <div class="menu_box">
                    <li><a href="index.php">Home</a></li>
                </div>
                <div class="menu_box">
                    <li><a href="./work.php">Work</a></li>
                </div>
                <div class="menu_box">
                    <li><a href="./about.php">About</a></li>
                </div>
                <div class="menu_box">
                    <li><a href="./contact.php">Contact</a></li>
                </div>
            </ul>
        </nav>
    </div>

    <!--Content -->
    <?php require_once(__DIR__.'/../src/work_presentation_boxes.php');?>
</body>