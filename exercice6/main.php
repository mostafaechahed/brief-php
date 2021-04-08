<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'classes/User.php';
    $user1 = new User("hafsa", "solicode");
    $user2 = new User("mohamed", "123456789");

    echo $user1->getName() . "<br>";
    echo $user2->getName() . "<br>";
    ?>
</body>

</html>