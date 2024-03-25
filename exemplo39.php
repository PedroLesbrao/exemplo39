<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <?php
        echo "ESTRUTURA DE REPETIÇÃO ENCADEADA NO PHP COM DO WHILE <br><br>";
        $x = 1;
        do{
            $y = 1;
            do{
                $z = 1;
                do{
                    echo "x = $x / y = $y / z = $z<br>";
                  $z++;
                }while($z <= 2);
                $y++;
            }while($y <= 2);
              $x++;
        }while($x <= 2)
    ?>
    </div>
</body>
</html>