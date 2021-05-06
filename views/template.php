<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php

    require_once("modules/navegacion.php")
    ?>

<div container>
    <?php
        $e = new crudController();
        $e -> enlaces();
    ?>
</div>


    
</body>
</html>