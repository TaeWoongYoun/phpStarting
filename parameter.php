<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파라미터</title>
</head>
<body>
    hello <?php echo $_GET['name']; ?> ! <br>
    hi <?php echo $_GET['title']; ?>
    <!-- http://localhost:8012/phpStarting/parameter.php?name=js&title=jsvaScript -->
    <!-- hello js!
        hi javaScript-->
</body>
</html>