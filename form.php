<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    file_put_contents('data/'.$_POST['title'], $_POST['discription']);

    echo "<p>title : " .$_POST['title'].  "</p>";
    echo "<p>discription : " .$_POST['discription'].  "</p>";
?>
</body>
</html>