<?php
$email = $_POST["email"];
$message = $_POST["message"];
mail("paloma.traiteur@gmail.com", "Message du site", $message, "From: $email");
die('Došlo je do greške');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre message a été envoyé avec succés</title>
</head>
<body style="color: pink; background-color: black">
    <h4>Nous vous remercions. Votre message a été envoyé avec succés.</h4>
    <a href="../index.html">Cliquez ici</a> pour retourner à la page d'accueil.
</body>