<?php
    $name = "Александр";
    $age = "27";
    $city = "Калининград";
    $email = "evfidripiy@gmail.com";
    $about = "Он очень умный и красивый";
?>

<html>
    <head>
        <h1>Здравствуйте.</h1>    
    </head>
    <body>
        Меня зовут <?= $name ?>.<br>
        Мне <?= $age ?> лет.<br>
        Я живу в городе <?= $city ?>.<br>
        Можете написать мне на почту: <a href="mailto:<?= $email ?>"><?= $email ?></a><br>
        Вот что обо мне говорят люди: "<?= $about ?>".
    </body>    
</html>