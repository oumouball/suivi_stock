<?php
  include_once '../../../bootstrap.php';
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="/public/css/style.css">
<div class="container mt-5"> 

    <div class="col-md-10 offset-1">
        <div class="card container">
        <div class="card-header bg-info">
             NOUVEAU PRODUIT
            </div>
            <div class="card-body">
                <form action="../../controller/produit/produitCtrl.php" method="post">
                    
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="ref" class="h5">REFERENCE</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="ref" required>
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">nom</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="qteStock" class="h5">QTE STOCK</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="qteStock" required>
                        </div>


                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="user" class="h5">USER</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="user" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="btnAddProduit" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
<div class="col-md-3 offset-10" >
			<a href="http://localhost:8080/suivistock/accueil.php" class="btn btn-sm btn-primary">Retour</a>
</div>
