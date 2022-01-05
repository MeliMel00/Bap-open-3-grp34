<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
    <body>

    <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "1") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>





<body>

    <?php 
    
        include 'header.php';
        
    ?>

        <h2 class="listeh2">Liste de tout les participants</h2>


<?php

$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$request = $bdd->query('SELECT * FROM user ORDER BY id DESC');
    while ($userlist = $request->fetch()){

?>
<div class="user">

<div class="one"> <?php echo $userlist['Prenom']?></div>
<div class="two"> <?php echo $userlist['Nom']?></div>
<div class="three"> <?php echo $userlist['Mail']?></div>

</div>



<?php
}
?>





</body>




<script src="./script.js"></script>
</html>



    
    <?php
    }


    
    else // sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>


    </body>
</html>