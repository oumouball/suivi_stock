
<?php
          require_once '../../../header.php';
          require_once '../../model/crud/user/listUser.php';
    ?>
    
<div class="container mt-5">
<div class="row">
		<div class="col-md-3 offset-10" >
			<a href="addUser.php" class="btn btn-sm btn-primary">Ajouter</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header bg-info">
					<h2>Liste des Utilisateurs</h2>
				</div>
				<div class="card-body">
					<table class="table  table-info">
						<tr>
              <th>ID</th>
              <th>NOM</th>
              <th>PRENOM</th>
              <th>EMAIL</th>
              <th>PASSWORD</th>
              <th>ETAT</th>
                            		
							           
						</tr>
                        </thead>
                <tbody>
                <?php 
                  foreach($users as $u ){
                ?>
                      <tr>
                      <td><?=$u->getId()?></td>
                      <td><?=$u->getPrenom()?></td>
                      <td><?=$u->getNom()?></td>
                      <td><?=$u->getEmail()?></td>
                      <td><?=$u->getPassword()?></td>
                      <td><?=$u->getEtat()?></td>
                      
                      </tr>
                                            <?php 
                                            }
                                            ?>
                </tbody>
					</table>
					
				</div>

				
			</div>
		</div>
		
	</div>
	
</div>
<?php
