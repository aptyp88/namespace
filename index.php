<?php 
include_once 'libs/user.php'; 
include_once 'other/user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Namespace php</title>
</head>
<body>
    <?php
    // $user = new other\User();
    // $user2 = new libs\User();


    /*
    use libs\User;
    $user = new User();
    */

    use libs\User as LU;
    use other\User as OU;
    $user = new LU;

    ?>
</body>
</html>