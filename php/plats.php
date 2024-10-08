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
    <title>tout nos Plats🍽️</title>
</head>

<body>
    <!--""""""""""""""""""""""""""""""""""""""""""adresse logo menu"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
    <!--
    <p class="p1 d-flex justify-content-center">Restaurant The District 30 Rue de Poulainville, 80000 Amiens</p>

    <nav class="navbar navbar-expand-sm justify-content-center">
        <div class="contenair-fluid">
            <a class="navbar-brand" href="../php/nindex.php"><img src="../images_the_district/the_district_brand/logo.png"
                    style="width:200px" ; height="126px"></a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav col d-flex justify-content-around">
            <li class="d-flex justify-content-center align-items-center"><a href="../php/index.php"
                    class="text-decoration-none text-dark">Accueil</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/catégorie.php"
                    class="text-decoration-none text-dark">Catégorie</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/plats.php"
                    class="text-decoration-none text-dark">Plats</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="../php/contact.php"
                    class="text-decoration-none text-dark">Contact</a></li>
        </ul>
    </nav> -->
    <div class="menu">
<?php include 'menu.php';?>
</div>
<!--"""""""""""""""""""""""""""""""""""""""""image de fond barre de recherche"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

    <div class="fond container-fluid m-0 p-0 d-flex align-items-center">
        <div class="content p-5">
            <label for="recherche"></label>
            <input type="text" id="recherche1" name="recherche" placeholder="Recherche"
                class=" container d-flex justify-content-around">
        </div>
    </div>
  <!--""""""""""""""""""""""""""""""""""""""""""titre"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

    <div class="container-fluid d-flex justify-content-center">
        <p class="nomdeplat  p-4 m-4">TOUT NOS PLATS</p></div>

<!--""""""""""""""""""""""""""""""""""""""""""carde pizza margarita"""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

        <div class="pizzacont container  p-2">
            <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../images_the_district/menu-pizza.jpg"    alt="card image"></div>
        <div class="pizzatext card-body ms-5 mt-0 p-5">
            <h4 class="hawa card-title m-0 pb-3">PIZZA margarita</h4>
            <P CLASS="ctext card-text mt-2 pb-2"> une recette  de cuisine traditionnelle de la cuisine italienne, originaire de Naples à  base de galette de pâte à pain, garnie principalement d'huile d'olive,  de sauce tomate, de mozzarella et d'autres ingrédients et cuite au four.La pizza margherita est une spécialité culinaire traditionnelle de la ville de Naples, en Italie. Très populaire, cette pizza napoletana est garnie de tomates, de mozzarella, de basilic frais, de sel et d'huile d'olive. La pizza margherita est une spécialité culinaire traditionnelle de la ville de Naples, en Italie. Très populaire, cette pizza napoletana est garnie de tomates
            </P>
           <a href="pizzamargaritacommande.php" class="command btn m-3">COMMANDER</a>       
        </div>
        </div>
<!--""""""""""""""""""""""""""""""""""""""""""card WRAPES mexicaines""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

        <div class="pizzacont container mt-4 p-2">
            <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../images_the_district/category/wrap_cat.jpg"    alt="card image" width="380px" height="380px"></div>
        <div class="pizzatext card-body ms-5 mt-0 p-5">
            <h4 class="hawa card-title m-0 pb-3">WRAPES mexicaines</h4>
            <P CLASS="ctext card-text mt-2 pb-2">Wrap d’aiguillettes de poulet au curry, salsa de poivrons rouges à la coriandre. IL Y A ÉGALEMENT DES Wrap d’émincé de bœuf aux légumes grillés, crème de fromage blanc aux oignons rouges.</P>
           <a href="#" class="command btn m-3">COMMANDER</a>       
        </div>
        </div>
  <!--""""""""""""""""""""""""""""""""""""""""""card LASAGNES""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

        <div class="pizzacont container  mt-4 p-2">
            <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../images_the_district/food/lasagnes_viande.jpg"   alt="card image"></div>
        <div class="pizzatext card-body ms-5 mt-0 p-5">
            <h4 class="hawa card-title m-0 pb-3">LASAGNES</h4>
            <P CLASS="ctext card-text mt-2 pb-2"> recette de cuisine italienne à base de couches alternées de pâtes lasagnes, parmesan,  mozzarella, ou ricotta, et de sauce bolognaise ou sauce béchamel, gratinée au four. Originaires du centre-sud italien</P>
           <a href="#" class="command btn m-3">COMMANDER</a>       
        </div>
        </div>
  <!--""""""""""""""""""""""""""""""""""""""""""card COURGETTES FARCIES""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

        <div class="pizzacont container mt-4  p-2">
            <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../images_the_district/food/courgettes_farcies.jpg"    alt="card image"></div>
        <div class="pizzatext card-body ms-5 mt-0 p-5">
            <h4 class="hawa card-title m-0 pb-3">COURGETTES FARCIES</h4>
            <P CLASS="ctext card-text mt-2 pb-2">Les farcis ou petits farcis sont une spécialité culinaire traditionnelle de la cuisine du bassin méditerranéen et plus particulièrement de la cuisine provençale. La courgette farcie en fait partie tout comme les tomates, aubergines, poivrons</P>
           <a href="#" class="command btn m-3">COMMANDER</a>       
        </div>
        </div>
 <!--""""""""""""""""""""""""""""""""""""""""""bouton gauche droit """"""""""""""""""""""""""""""""""""""""""""""""""""""""-->


  <div class="container-fluid d-flex justify-content-around p-5"> 
    <a href="pizzas_plat.php"> <img src="../images_the_district/gauche.png" alt="bouton gauche" height="70px", width="70px"> </a>       
      <a href="contact.php"> <img src="../images_the_district/envoyer.png" alt="bouton droite" height="70px", width="70px"></a>
  </div>

  <!--""""""""""""""""""""""""""""""""""""""""""contact""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
      
  <section class="brdr pb-4">
 <div class="co container-fluid d-flex justify-content-center pt-4">
   
    <p>CONTACT</p>
</div>

        <nav class="navbar navbar-expand-lg ">
            <ul class="navbar-nav col d-flex justify-content-around ">
                <li class="d-flex justify-content-center align-items-center"><a href="#"
                        class="contact "><img src="../images_the_district/5279111_network_fb_social media_facebook_facebook logo_icon.png" class="reseaux" alt="logo facebook" width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#"
                        class="contact"><img src="../images_the_district/instagram(1).png" class="reseaux" alt="logo facebook" width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#"
                        class="contact"><img src="../images_the_district/reseaux-sociaux.png" class="reseaux w-0" alt="logo facebook" width="50px" height="50px"></a></li>
                <li class="d-flex justify-content-center align-items-center"><a href="#"
                        class="contact"><img src="../images_the_district/tic-tac.png" class="reseaux w-2" alt="logo facebook" width="50px" height="50px"></a></li>
            </ul>
        </nav>
  </section>
</body>
</html>
