<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        echo 'Вы находитесь на сайте '.$_SERVER['HTTP_HOST'];
    ?>
    <p>Числа фибоначи</p>
    <p>
        <?php
            function fibonacci($n)
            {
                if ($n < 3) {
                    return 1;
                }
                else {
                    return fibonacci($n-1) + fibonacci($n-2);
                }
            }
            for ($n = 1; $n <= 16; $n++) {
                echo(fibonacci($n) . ", ");
            }
            echo("...\n")
        ?>
    </p>





</body>
</html>