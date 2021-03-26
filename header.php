<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="http://localhost:8080/suivistock/public/template/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="http://localhost:8080/suivistock/public/template/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="http://localhost:8080/suivistock/public/template/css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>
<nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">SUIVIE STOCK</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost:8080/suivistock/accueil.php">
                                <i class="fas fa-tachometer-alt"></i>
                                Accueil
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <span>
                                    Produits <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://localhost:8080/suivistock/src/view/produit/addProduit.php">Ajouter  produit</a>
                                <a class="dropdown-item" href="http://localhost:8080/suivistock/src/view/produit/listeProduit.php">Listes des produits </a>
                               
                            </div>
                        </li>
                        <li class="nav-item dropdown">

           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
           <i class="far fa-file-alt"></i>
          <span>
          User <i class="fas fa-angle-down"></i>
          </span>
         </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost:8080/suivistock/src/view/user/addUser.php">AJouter Utilisateurs</a>
         <a class="dropdown-item" href="http://localhost:8080/suivistock/src/view/user/listeUser.php">Listes des Utilisateurs ajoutés </a>
   
            </div>
               </li>
                 </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block btn btn-md btn-danger" href="index.php">
                                DECONNEXION
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>