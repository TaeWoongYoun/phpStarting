<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        unlink('data/'.$_POST['id']);
    ?>

    <script>
        location.href = 'index.php'
    </script>
</body>
</html>