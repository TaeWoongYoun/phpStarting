<?php
    function title(){
        if (isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "welcome";
        }
    }
    function description(){
        if (isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "my php page";
        }
    }
    function print_list(){
        $list = scandir('data');
        $i = 0;
        while($i < count($list)){
            if($list[$i] != '.'){
                if($list[$i] != '..'){
                    ?>
                <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                <?php
                }
            }
            $i = $i + 1;
        }
    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>        
        <?php 
            title();
        ?>
    </title>
    <link rel="icon" href="https://play-lh.googleusercontent.com/cyTI43JCjc4L-e1m7FvJhI1VhmTSJ4AMNZoqhkp0Xm6_NOtHbaewp9UPVLw5R3-tZIU">
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
    <?php
        print_list();
    ?>
    </ol>
    <a href="create.php">create</a>
    <form action="createProcess.php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" id="description" placeholder="description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>