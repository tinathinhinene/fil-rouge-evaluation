<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>pizza margarita commandecommande🍽️</title>
</head>

<body>
    <!------------"""""""""""""""""""""""""""""""""""""""adresse logo menu"""""""""""""""""""""""""""""""""""""""""""""-->
   <!--
    <p class="p1 d-flex justify-content-center">Restaurant The District 30 Rue de Poulainville, 80000 Amiens</p>

    <nav class="navbar navbar-expand-sm justify-content-center">
        <div class="contenair-fluid">
            <a class="navbar-brand" href="../php/nindex.php"><img
                    src="../images_the_district/the_district_brand/logo.png" style="width:200px" ; height="126px"></a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav col d-flex justify-content-around">
            <li class="d-flex justify-content-center align-items-center"><a href="../php/index.php"
                    class="text-decoration-none text-dark">Accueil </a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/catégorie.php"
                    class="text-decoration-none text-dark">Catégorie</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/plats.php"
                    class="text-decoration-none text-dark">Plats</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/contact.php"
                    class="text-decoration-none text-dark">Contact</a></li>
        </ul>
    </nav>
--> 
<div class="menu">
<?php include 'menu.php';?>
</div>
<!--"""""""""""""""""""""""""""""""""""""""""card pizza margarita"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

    <div class="pizzacont container  p-2">
        <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../images_the_district/menu-pizza.jpg" alt="card image">
        </div>
        <div class="pizzatext card-body ms-3 mt-4 p-5">
            <h4 class="hawa card-title m-2 pt-4 pb-3">PIZZA  MARGARITA</h4>
            <P CLASS="ctext card-text mt-2 pb-2"> une recette de cuisine traditionnelle de la cuisine italienne,
                originaire de Naples à base de galette de pâte à pain, garnie principalement d'huile d'olive, de sauce
                tomate, de mozzarella et d'autres ingrédients et cuite au four.La pizza margherita est une spécialité
                culinaire traditionnelle de la ville de Naples, en Italie. Très populaire, cette pizza napoletana est
                garnie de tomates, de mozzarella, de basilic frais, de sel et d'huile d'olive. La pizza margherita est
                une spécialité culinaire traditionnelle de la ville de Naples, en Italie. Très populaire, cette pizza
                napoletana est garnie de tomates
            </P>
   
            <!--------""""""""""""""""""""""""""""""""bouton quantité"""""""""""""""""""""""""""""""""""""""""""""""""""-->
            <div class="container  mt-3">
                <h5 class="qte pt-2 pb-4">QUANTITÉ  <button type="button" class="btn p-4"><span class= "ti badge  p-4">2</span></button></h5>
            </div>
        </div>
    </div>

    <!--"""""""""""""""""""""""""""""""""""""""formulaire"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
    <div class="container ">
        <form action="/action_page.php">
            <div class="mb-4 mt-5">
                <label for="nom">NOM ET PRENOM </label>
                <input type="text" class="form-control" id="nom" placeholder="" name="nom" maxlength="50px">
            </div>

            <div class=" di row ">

                <div class="col p-3 "><label for="?">EMAIL</label>
                    <input type="email" class="form-control" id="email" placeholder="" name="email">
                </div>

                <div class="col p-3"> <label for="name">TELEPHONE</label>
                    <input type="telephone" class="form-control" id="telephone" placeholder="" name="telephone">
                </div>
            </div>
           
            <div class="mb-4 mt-4">
                <label for="name">VILLE</label>
                 <input type="text" class="form-control" id="ville" placeholder="" name="VILLE">
                </div>

                <div class="mb-4 mt-5">
                <label for="comment">VOTRE ADRESSE</label>
                <textarea class="form-control " rows="5" id="comment" name="text"></textarea>
                </div>

        </form>
        <a href="#" class="command btn mt-3">COMMANDER</a>
    </div>

<!---""""""""""""""""""""""""""""""""""""""""bouton gauche droite"""""""""""""""""""""""""""""""""""""""""""""""""""-->
    <div class="container-fluid d-flex justify-content-around pb-5 pt-5">
        <a href="../php/pizzas plat.php"> <img src="../images_the_district/gauche.png" alt="bouton gauche" height="70px" ,
                width="70px"> </a>
        <a href="../php/contact.php"> <img src="../images_the_district/envoyer.png" alt="bouton droite" height="70px"
                , width="70px">
    </div>

    <!--"""""""""""""""""""""""""""""""""""""""""""contact"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
   <!--
    <section class="brdr pb-4">
        <div class="co container-fluid d-flex justify-content-center pt-4">
            <p>CONTACT</p>
        </div>

        <nav class="navbar navbar-expand-lg ">
            <ul class="navbar-nav col d-flex justify-content-around ">
                <li class="d-flex justify-content-center align-items-center"><a href="#" class="contact "><img
                            src="../images_the_district/5279111_network_fb_social media_facebook_facebook logo_icon.png"
                            class="reseaux" alt="logo facebook" width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#" class="contact"><img
                            src="../images_the_district/instagram(1).png" class="reseaux" alt="logo facebook"
                            width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#" class="contact"><img
                            src="../images_the_district/reseaux-sociaux.png" class="reseaux w-0" alt="logo facebook"
                            width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#" class="contact"><img
                            src="../images_the_district/tic-tac.png" class="reseaux w-2" alt="logo facebook"
                            width="50px" height="50px"></a></li>
            </ul>
        </nav>
    </section> -->
    <?php include 'footer.php' ;?> 
</body>

</html>