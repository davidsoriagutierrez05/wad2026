<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
    <?php
        $nota1 = 2;
        $nota2 = 8;
        $nota3 = 5;

        echo '$nota1 = 2;<p>
        $nota2 = 8;<p>
        $nota3 = 5;<p>';

        echo "<br>";
        echo 'Nota 1<br>';
        if ($nota1 >= 5){
            echo "Aprobado";
            if ($nota1 >= 8){
                echo ", estás hecho un máquina";
            }
        }else{
            echo "Suspenso";
            if ($nota1 <= 2){
                echo ", estas jodido";
            }
        }
    ?>
</body>
</html>