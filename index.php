<?php
//var_dump($_REQUEST);
// var_dump($_SERVER);
// var_dump($_REQUEST["name"])
// var_dump($_GET);
// var_dump($_POST);

$stream = fopen("user.csv", "a+");
$line = fgetcsv(fopen("user.csv", "r"),1000,",");
if(!$line || $line[0] === null){
    fputcsv($stream, ["nom", "prenom"]);
}

if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
    fputcsv($stream, [$_POST["nom"], $_POST["prenom"]]);
    echo "<script type='text/javascript'>alert('Utilisateur ajouté avec succès');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nom</label>
        <input type="text" name="nom">
        <label for="">Prénom</label>
        <input type="text" name="prenom">
        <button type="submit">Enregistrer</button>
    </form>


</body>
</html>
