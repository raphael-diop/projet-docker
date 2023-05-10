<?php
    $nom = $_POST['nom'];

    if(isset($nom)){
        $phrase = " Bonjour $nom ";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rentrez votre nom</title>
    <div>
        <h1>
            <?php echo $phrase ?>
        </h1>
    </div>
</head>
<body>
    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>