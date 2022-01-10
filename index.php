<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Accueil - Open-3</title>
</head>

<body>

    <?php 
    
        include 'header.php';
        
    ?>
    
        
    <section class="index">
        <ul>
            <h2 class="title-sect">Programme de OPEN 3</h2>
        </ul>
        <ul>
        <p class="desc-progr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, odit harum aliquid deserunt maxime temporibus facere aliquam doloremque consequatur illum cumque pariatur incidunt unde amet debitis ea! Enim, esse. Nemo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, odit harum aliquid deserunt maxime temporibus facere aliquam doloremque consequatur illum cumque pariatur incidunt unde amet debitis ea! Enim, esse. Nemo?</p>
        </ul>
        <ul>
        <a href="inscription.php">
            <div class="btn-inscription">
                <p>Inscription</p>
            </div>
        </a>
        </ul>
    </section>
    <section class="index">
        <ul>
            <h2 class="title-sect">Conférents de OPEN3</h2>
        </ul>
        <ul>
        <div class="div-conf">
            <img src="./img/img-men-2.png" alt="Image Homme Conférence">
            <!-- <img src="#" alt="img conférence numero 1"> -->
            </img>
            <div class="text-conf">
                <li>Conférence Innovation</li>
                <li>Date: 18 Mars 2022</li>
                <li>Lieu: IIM</li>
                <li>plus</li>
            </div>
        </div>
        <div class="div-conf">
            <img src="./img/img-girl-1.png" alt="Image Femme conférence">
            <!-- <img src="#" alt="img conférence numero 1"> -->
            </img>
            <div class="text-conf">
                <li>Conférence Data et Source</li>
                <li>Date: 18 Mars 2022</li>
                <li>Lieu: IIM</li>
                <li>plus</li>
            </div>
        </div>
        </ul>
    </section>

    <section class="index">
        <ul class="title-sect-ul">
            <h2 class="title-sect" style="color: white">Hackaton de OPEN3</h2>
        </ul>
        <ul class="card-sect-ul">
            <img src="./img/img-men-1.png" alt="Image Homme DevWeb présentation"class="card-hackaton-1">

            </div>
            <div class="card-hackaton-2">
                <ul>
                    <li>Hackaton</li>
                    <li>Date: 22 Mars 2022</li>
                    <li>Lieu: IIM</li>
                </ul>
                <ul>
                    <div class="more-info" style="cursor:pointer">Plus</div>
                </ul>
            </div>
        </ul>
    </section>

    <section class="index">
    <ul class="title-sect-ul">
            <h2 class="title-sect" style="text-decoration: none">Récupérez notre Programme</h2>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente commodi ullam saepe iure soluta nam totam omnis sunt rerum odio in vero quasi, maxime incidunt, eius pariatur rem repellat deleniti.</p>
        <div class="newsletter">
           <a href="newsletter.pdf" download>Télécharger notre PDF</a>
           
        </div> 
    </section>
        <?php

            include 'footer.php';

        ?>

</body>




<script src="./script.js"></script>
</html>



    