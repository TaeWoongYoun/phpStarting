<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
        <?php 
            if (isset($_GET['id'])) {
                echo $_GET['id'];
            } else {
                echo "welcome";
            }
        ?>
    </h2>
    <?php
        if (isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "hello";
        }
    ?>
</body>
</html>