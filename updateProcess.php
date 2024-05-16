<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
</head>
<body>
    <?php
        rename('data/'.$_POST['old_title'] ,'data/'.$_POST['title']);
        file_put_contents('data/'.$_POST['title'] , $_POST['description']);
    ?>

    <script>
        location.href = 'index.php'
    </script>
</body>
</html>