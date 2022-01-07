<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact - Open-3</title>
</head>
<body>
    <?php include 'header.php' ?>


    <section class="contact">
        <div class="left-contact">
            <h2 class="title-contact">Contactez-Nous !</h2>
            <div class="contact-form">
                <form action="https://formsubmit.co/open3devinci@hotmail.com" method="POST">>

                    <input class="champ" type="text" name="Nom" placeholder="Nom" Required>
                    <input class="champ" type="text" name="Prenom" placeholder="Prénom" Required>
                    <input class="champ" type="email" name="Mail" placeholder="Mail" Required>
                    <textarea name="comments" id="comments" cols="20" rows="4" placeholder="Votre Message"></textarea>
                    <input type="hidden" name="_captcha" value="false">
                    <input class="submit btn-envoyer" type="submit" name="submit" value="Soumettre">

                </form>
                
            </div>
        </div>
        <div class="right-contact">
            <div class="info-contact">
                <ul>
                    <span>Adresse</span>
                    <li>6 rue carnot, <br>Paris 2eme 75002</li>
                </ul>
                <ul>
                    <span>Appelez-Nous</span>
                    <li>02 15 62 43 82</li>
                    <li>02 15 62 43 82</li>
                </ul>
                <ul class="contact-sm"> 
                    <span>Réseaux</span>
                    <span>
                    <a href="https://www.facebook.com/Institut.Internet.Multimedia/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="58" height="57.649" viewBox="0 0 58 57.649">
                                <path id="Icon_awesome-facebook" data-name="Icon awesome-facebook" d="M58.562,29.562A29,29,0,1,0,25.031,58.212V37.946H17.664V29.562h7.367V23.173c0-7.268,4.327-11.282,10.953-11.282a44.63,44.63,0,0,1,6.492.566V19.59H38.819c-3.6,0-4.725,2.236-4.725,4.529v5.443h8.043L40.85,37.946H34.094V58.212A29.01,29.01,0,0,0,58.562,29.562Z" transform="translate(-0.563 -0.563)"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/iim_paris/?hl=fr" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54.5" height="54.5" viewBox="0 0 54.5 54.5">
                                <path id="Tracé_3" data-name="Tracé 3" d="M43.1,9.042A11.388,11.388,0,0,1,54.458,20.4V43.1A11.388,11.388,0,0,1,43.1,54.458H20.4A11.388,11.388,0,0,1,9.042,43.1V20.4A11.388,11.388,0,0,1,20.4,9.042H43.1m0-4.542H20.4A15.943,15.943,0,0,0,4.5,20.4V43.1A15.943,15.943,0,0,0,20.4,59H43.1A15.943,15.943,0,0,0,59,43.1V20.4A15.943,15.943,0,0,0,43.1,4.5Z" transform="translate(-4.5 -4.5)"/>
                                <path id="Tracé_4" data-name="Tracé 4" d="M27.031,15.812a3.406,3.406,0,1,1,3.406-3.406A3.4,3.4,0,0,1,27.031,15.812Z" transform="translate(14.979 0.083)"/>
                                <path id="Tracé_5" data-name="Tracé 5" d="M24.875,15.792a9.083,9.083,0,1,1-9.083,9.083,9.092,9.092,0,0,1,9.083-9.083m0-4.542A13.625,13.625,0,1,0,38.5,24.875,13.629,13.629,0,0,0,24.875,11.25Z" transform="translate(2.375 2.375)"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/school/iim---institut-de-l'internet-et-du-multim%C3%A9dia/?originalSubdomain=fr" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55.009" height="55.009" viewBox="0 0 55.009 55.009">
                                <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin" d="M51.08,2.25H3.917A3.946,3.946,0,0,0,0,6.216V53.293a3.946,3.946,0,0,0,3.917,3.966H51.08a3.957,3.957,0,0,0,3.929-3.966V6.216A3.957,3.957,0,0,0,51.08,2.25ZM16.626,49.4H8.472V23.149h8.165V49.4ZM12.549,19.563a4.727,4.727,0,1,1,4.727-4.727,4.729,4.729,0,0,1-4.727,4.727ZM47.188,49.4H39.035V36.631c0-3.045-.061-6.962-4.236-6.962-4.248,0-4.9,3.315-4.9,6.741V49.4H21.746V23.149h7.822v3.585h.111A8.588,8.588,0,0,1,37.4,22.5c8.251,0,9.786,5.44,9.786,12.512Z" transform="translate(0 -2.25)"/>
                            </svg>
                        </a>
                        
                    </span>
                </ul>
            </div>
            <div class="map-contact">
                <img src="./img/map.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="contact">
    <ul class="title-sect-ul">
            <h2 class="title-sect" style="text-decoration: none">Récupérez notre Programme</h2>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente commodi ullam saepe iure soluta nam totam omnis sunt rerum odio in vero quasi, maxime incidunt, eius pariatur rem repellat deleniti.</p>
        <div class="newsletter">
           <a href="./img/pdf.pdf" download>Télécharger notre PDF</a>
           
        </div> 
    </section>



    <?php include 'footer.php' ?>
</body>
<script src="./script.js"></script>
</html>