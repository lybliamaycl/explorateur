<!DOCTYPE html>
<html lang="fr">
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Explorateur de fichier Dorian</title>

</head>
<body>


<div class="enveloppe container-fluid">

    <header class="row bc1">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center">
            <div class="row w-100 justify-content-start">
                <span class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pl-2 pr-2">Arborescence :</span>
                <span class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pl-2 pr-2"><div id="arbo" class="w-100"></div></span>
            </div>
        </div>

        <!-- RECHERCHER
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 d-flex align-items-center">
            <div class="row w-100">
                <span class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pl-2 pr-2">Rechercher : </span>
                <span class=" col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pl-2 pr-2"><input type="text"></span>
            </div>
        </div>
        -->

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-end">
            <div class="row w-100 justify-content-end">
            <h1>Dorian l'explorateur<h1>
            <span class="pl-2 pr-2"><img src="assets/images/logo.png" alt="logodorian" height="50"></span>
            </div>
        </div>

    </header>

    <div class="grosbloc row">

        <aside class="col-xs-12 col-sm-12 col-md-2 col-lg-1 bc1 trans" id="leftbar">
            <nav class="w-100 h-100 d-flex">
                
                <div class="p-2">
                    <ul>
                        <?php include 'icons.php' ?>
                    </ul>
                </div>

                <div id="toto" class="p-2 invisible trans">
                    <ul>
                        <?php include 'explorateur.php'?>
                    </ul>
                </div>

            </nav>
        </aside>

        <section class="col-xs-12 col-sm-12 col-md-10 col-lg-11 bc2 trans" id="mainbloc">
            <article id="welcome" class="row justify-content-center pt-5">
                <p class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center fs50">Bienvenue sur Dorian l'Explorateur.<br>
                <span class="fs30">Veuillez utiliser le menu sur votre gauche pour naviguer et sélectionner les dossiers de votre choix.</span></p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><img src="assets/images/logo.png" alt="dorian" height='600'></div>
            </article>

            <article id="affichage" class="row p-5"></article>

        </section>

    </div>

</div>

    <script src="assets/script.js"></script>
    <script src="assets/navigation.js"></script>
</body>
</html>