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
    <title>Admin - Open-3</title>
</head>
    <body>

    <div class="div-admin">


        <p class="page-admin">Seul les admin ont accès a cette page</p>
        <a class="a-admin" href="index.php">Retour à l'accueil</a>
            <form action="admin.php" method="post">
                <p>
                <input type="password" name="mot_de_passe" placeholder="code d'accès"/>
                <input type="submit" value="Valider" />
                </p>
            </form>


    </div>
        
    </body>
</html>