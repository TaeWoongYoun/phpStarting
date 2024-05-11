<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>랜덤출력기</title>
</head>
<body>
    <?php
    // echo rand(0, 100)
    $array = array('python', 'javaScript', 'php', 'C', 'Raspberry');
    $randomKey = array_rand($array);

    echo $array[$randomKey];
    // 선택된 키에 해당하는 값 출력
    ?>
</body>
</html>