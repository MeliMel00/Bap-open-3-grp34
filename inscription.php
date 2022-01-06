<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>



<body>

    <?php 

    include 'header.php'; 

    ?>

    <a href="index.php">RETOUR</a>







    <?php

    $mydb = mysqli_connect("localhost","root","","mydb");

    if(!$mydb)
        {
        die("Connection failed: " . mysqli_connect_error());
        }

    if(isset($_POST['submit']))
    {		
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Mail = $_POST['Mail'];

        $insert = mysqli_query($mydb,"INSERT INTO `user`(`Nom`, `Prenom`, `Mail`) VALUES ('$Nom','$Prenom','$Mail')");

        if(!$insert)
        {
            echo "error.";            }
        else
        {
            header('location:success.php');

        }
    }
?>





    <div class="div-inscription">

        <h2 class="title-inscription">
            Participer à la conference
        </h2>

        <div>



            <form method="POST">

                <input class="champ" type="text" name="Nom" placeholder="Nom" Required>
                <input class="champ" type="text" name="Prenom" placeholder="Prénom" Required>
                <input class="champ" type="email" name="Mail" placeholder="Mail" Required>

                <input type="submit" name="submit" value="Envoyer" class="btn-envoyer">

            </form>

        </div>
    </div>





    <?php

        include 'footer.php';

    ?>

</body>




<script src="./script.js"></script>

</html>