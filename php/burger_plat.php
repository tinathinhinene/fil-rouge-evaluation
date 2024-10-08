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
    <title>burger plat🍽️</title>
</head>

<body>
    <!--""""""""""""""""""""""""""""""""""""""""adresse menu logo"""""""""""""""""""""""""""""""""""""""""""""""""-->

   <!-- <p class="p1 d-flex justify-content-center">Restaurant The District 30 Rue de Poulainville, 80000 Amiens</p>

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
    </nav>
-->
    <div class="menu">
<?php include 'menu.php';?>
</div>
     <!--""""""""""""""""""""""""""""""""""""""""image de fond barre de recherche"""""""""""""""""""""""""""""""""""""""""""""""""-->

    <div class="fond container-fluid m-0 p-0 d-flex align-items-center">
        <div class="content p-5">
            <label for="recherche"></label>
            <input type="text" id="recherche1" name="recherche" placeholder="Recherche"
                class=" container d-flex justify-content-around">
        </div>
    </div>

 <!--""""""""""""""""""""""""""""""""""""""""titre""""""""""""""""""""""""""""""""""""""""""""""""-->
    
    <div class="container-fluid d-flex justify-content-center">
        <p class="nomdeplat  p-4 m-4">HAMBURGERS PAR CATEGORIES</p></div>

 <!--""""""""""""""""""""""""""""""""""""""""burgers au boeuf à l'italienne"""""""""""""""""""""""""""""""""""""""""""""""""-->

        <div class="pizzacont container  p-2">
            <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../images_the_district/burger.jpg"    alt="card image"></div>
        <div class="pizzatext card-body ms-5 mt-0 p-5">
            <h4 class="hawa card-title m-0 pb-3">burger au boeuf à l'italienne</h4>
            <P CLASS="ctext card-text mt-2 pb-2">Ce burger est un hommage à ma famille et à mes origines. Tous les ingrédients sont significatifs de l’Aveyron : la charcuterie en provenance de Rodez, le miel et l’abeille symbole de Laguiole, l’odeur mentholée du thé sur le pain et la tome d’Aubrac, un fromage plutôt neutre mais à la texture ronde. Ces saveurs simples créent un parfait équilibre et sont rehaussées par la morille, la poitrine fumée et l’acidité du vinaigre ». </P>
           <a href="#" class="command btn m-3">COMMANDER</a>       
        </div>
        </div>

 <!--""""""""""""""""""""""""""""""""""""""""Burger de bœuf au fromage de brebis""""""""""""""""""""""""""""""""""""""""""""""""-->

        <div class="pizzacont container mt-4 p-2">
            <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../images_the_district/food/Food-Name-6340.jpg"    alt="card image" width="380px" height="380px"></div>
        <div class="pizzatext card-body ms-5 mt-0 p-5">
            <h4 class="hawa card-title m-0 pb-3">Burger de bœuf au fromage de brebis</h4>
            <P CLASS="ctext card-text mt-2 pb-2">Ah que cela fait du bien, de déguster des saveurs ensoleillés en plein hiver ! Ce burger maison fleure bon la Dolce vita… J'avais réalisé l'an dernier un burger Little Italy avec du poulet. J'ai décliné cette recette au pesto et à la mozzarella avec de la viande de... Prenez un burger, ajoutez-y du fromage et vous obtenez... un cheeseburger, bien vu  ! Avec supplément goût et terroir, svp. Cette recette de Burger poulet et Camembert Cœur de Lion, facile à réaliser, réhabilite ce grand classique de la cuisine «  fast food  », souvent pointé du doigt.</P>
           <a href="pizzamargaritacommande.php" class="command btn m-3">COMMANDER</a>       
        </div>
        </div>
 <!--""""""""""""""""""""""""""""""""""""""""British burger au boeuf, cheddar et whisky"""""""""""""""""""""""""""""""""""""""""""""""""-->




        <div class="pizzacont container  mt-4 p-2">
            <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../images_the_district/food/cheesburger.jpg"   alt="card image"></div>
        <div class="pizzatext card-body ms-5 mt-0 p-5">
            <h4 class="hawa card-title m-0 pb-3">British burger au boeuf, cheddar et whisky</h4>
            <P CLASS="ctext card-text mt-2 pb-2">Du cheddar, du scotch… Ces burgers au boeuf vont faire traverser la Manche à vos papilles ! Ne prenez pas peur : De savoureuses tranches de fromage de brebis Etorki, un steak haché de qualité, acheté chez le boucher, des légumes grillés... Et le hamburger maison devient un repas complet. la saveur du whisky est très légère dans cette recette. On ajoute un peu d'alcool dans la viande de boeuf hachée on flambe la garniture avec le scotch...Cette recette de burger au boeuf au confit de vin rouge est issue du livre Hamburger Gourmet (éditions Marabout, octobre 2012). Il s'agit de la première recette que nous avons réalisée du livre. Une fois le confit de vin rouge préparé</P>
           <a href="#" class="command btn m-3">COMMANDER</a>       
        </div>
        </div>

 <!--""""""""""""""""""""""""""""""""""""""""Burger de boeuf à la betterave et au wasabi"""""""""""""""""""""""""""""""""""""""""""""""""-->


        <div class="pizzacont container mt-4  p-2">
            <div class=" pizzacc card m-0 p-0">
            <img class="pizzac card-img-top" src="../images_the_district/food/hamburger.jpg"    alt="card image"></div>
        <div class="pizzatext card-body ms-5 mt-0 p-5">
            <h4 class="hawa card-title m-0 pb-3">Burger de boeuf à la betterave et au wasabi</h4>
            <P CLASS="ctext card-text mt-2 pb-2">Cette recette de burger japonisant est extraite du livre Hamburger gourmet, qui est un peu ma bible lorsqu'il s'agit de trouver l'inspiration pour des burgers maison. Pas de fromage dans cette recette, mais des crudités, ou plus exactement des betteraves relevées...Cette recette de burger au miel & au paprika est issue du livre Hamburger Gourmet (éd. Marabout, octobre 2012), qui est un peu ma bible du moment. Ce burger "Honey" succède à notre recette de burger de boeuf au confit de vin.
            </P>
           <a href="#" class="command btn m-3">COMMANDER</a>       
        </div>
        </div>

 <!--""""""""""""""""""""""""""""""""""""""""Bouton gauche droite"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->

  <div class="container-fluid d-flex justify-content-around p-5"> 
    <a href="catégorie.php"> <img src="../images_the_district/gauche.png" alt="bouton gauche" height="70px", width="70px"> </a>       
      <a href="plats.php"> <img src="../images_the_district/envoyer.png" alt="bouton droite" height="70px", width="70px"></a>
  </div>
       
 <!--""""""""""""""""""""""""""""""""""""""""contact""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""-->
  <!--
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
  </section> -->
  <?php include 'footer.php' ;?> 
  
</body>
</html>
