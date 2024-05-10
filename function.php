<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>함수</title>
</head>
<body>
    <h1>function</h1>
    <?php
        $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Rem natus illo quo aut non, fuga facilis modi dolorem,
        <br></br>
        omnis velit veritatis expedita, commodi tempora autem reprehenderit vero consequuntur. 
        Sint, quas!";
        echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
        echo strlen ( $str );
    ?>
    <h2>nl2br</h2>
    <?php
        echo nl2br($str);
    ?>
</body>
</html>