<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
    <?php
    date_default_timezone_set("America/Sao_paulo");
     echo "hoje é ". date("d/M/Y");
     echo "e a hora é " . date("G:i:s");
    ?>
</body>
</html>