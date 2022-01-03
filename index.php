<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php'; ?>
        
    <section>
        <ul>
            <h2 class="title-sect">Programme de OPEN 3</h2>
        </ul>
        <ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, odit harum aliquid deserunt maxime temporibus facere aliquam doloremque consequatur illum cumque pariatur incidunt unde amet debitis ea! Enim, esse. Nemo?</p>
        </ul>
        <ul>
        <a href="inscription.php">
            <div class="btn-inscription">
                <p>inscription</p>
            </div>
        </a>
        </ul>
    </section>
    <section>
        <ul>
            <h2 class="title-sect">Conférents de OPEN3</h2>
        </ul>
        <ul>
        <?php include 'card-conf.php'; ?>
        <?php include 'card-conf.php'; ?>
        </ul>
    </section>

    <section>
        <ul class="title-sect-ul">
            <h2 class="title-sect">Hackaton de OPEN3</h2>
        </ul>
        <ul class="card-sect-ul">
            <div class="card-hackaton-1">

            </div>
            <div class="card-hackaton-2">
                <ul>
                    <li>Titre</li>
                    <li>Date</li>
                    <li>Lieu</li>
                </ul>
                <ul>
                    <a href="#">Plus</a>
                </ul>
            </div>
        </ul>
    </section>

    <section>
    <ul class="title-sect-ul">
            <h2 class="title-sect">Newsletter</h2>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente commodi ullam saepe iure soluta nam totam omnis sunt rerum odio in vero quasi, maxime incidunt, eius pariatur rem repellat deleniti.</p>
        <div class="newsletter">
            <input type="text" placeholder="E_mail">
            <button type="submit">Envoyer</button>
        </div> 
    </section>
        <?php

            include 'footer.php';

        ?>

</body>




<script src="./script.js"></script>
</html>



    