<?php
  include_once '../../../bootstrap.php';
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="/public/css/style.css">
<div class="container mt-5"> 

    <div class="col-md-10 offset-1">
        <div class="card container">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
              NOUVEL UTILISATEUR
            </div>
            <div class="card-body">
                <form action="../../controller/user/userCtrl.php" method="post">
                    
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">NOM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="prenom" class="h5">PRENOM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="prenom" required>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="email" class="h5">EMAIL</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="password" class="h5">PASSWORD</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="password" required>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="etat" class="h5">ETAT</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="etat" required>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="btnAddUser" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>

                <div class="row">
		
	           </div>
            </div>
        </div>

    </div>
   
</div>
<div class="col-md-3 offset-10" >
			<a href="http://localhost:8080/suivistock/accueil.php" class="btn btn-sm btn-primary">Retour</a>
		</div>
