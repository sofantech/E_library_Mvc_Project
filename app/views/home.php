<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>inside home view</h1>
    <?php

use coding\app\system\DataBase;

    $data=DataBase::table('users')->select()->all();
    echo '<pre>';
    print_r($data);
    ?>
    
</body>
</html>