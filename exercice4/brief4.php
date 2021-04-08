<?php

function getData()
{
    $users = file_get_contents("users.json");
    $array = json_decode($users);
    return $array;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];

    $object = (object)[
        "nom" => $nom,
        "prenom" => $prenom,
        "telephone" => $tel
    ];
    //get users file content
    $users = file_get_contents("users.json");

    $array = json_decode($users);

    array_push($array, $object);

    if (file_put_contents("users.json", json_encode($array))) {
        echo "Ajouter avec success";
    }
    else 
    echo "echec d'insertion!!!!!";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="nom" placeholder="nom" required><br>
        <input type="text" name="prenom" placeholder="prenom" required><br>
        <input type="text" name="tel" placeholder="Telephone" required><br>
        <button type="submit">Ajouter</button> <br>
        <table border="1">
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <tbody>
                <?php
                $table=getData();
            
                foreach ($table as $user) {
                    echo "<tr>" . "<td>" .$user->nom  . "</td>"
                        . "<td>" . $user->prenom . "</td>" .
                        "<td>" . $user->telephone . "</td>" . "</tr>";
                }
                ?>
            </tbody>
        </table>
    </form>
</body>

</html>