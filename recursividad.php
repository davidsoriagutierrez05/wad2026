<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        function factorial($n){
            if ($n == 1){
                return 1;
            }else{
                echo $n . " X ";
                return $n * factorial($n-1);
            }
        }

        $resultado = factorial(5);
        echo $resultado;
    ?>
</body>
</html>