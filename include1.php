<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prácticas PHP</title>
</head>
<body>
    <?php 

        for($i=1;$i<=10;$i++){
            if ($i == 3) {
                continue;
            }
            echo "valor de i: " . $i;
            echo "<br>";            
        }


    ?>
</body>
</html>