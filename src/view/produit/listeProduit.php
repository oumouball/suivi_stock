<?php
          require_once '../../../header.php';
          require_once '../../model/crud/produit/listProduit.php';
    ?>
  
<div class="container mt-5">
<div class="row">
		<div class="col-md-3 offset-10" >
			<a href="addProduit.php" class="btn btn-sm btn-primary">Ajouter</a>
		</div>
	</div>  
	<div class="row">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header bg-info">
					<h2>Liste des Produits</h2>
				</div>
				<div class="card-body">
					<table class="table  table-info">
						<tr>
              <th>REF</th>
              <th>NOM</th>
              <th>QUANTITE STOCK</th>	           
						</tr>
                        </thead>
                <tbody>
                <?php 
                  foreach($produits as $p ){
                ?>
                      <tr>
                      <td><?=$p->getRef()?></td>
                      <td><?=$p->getNom()?></td>
                      <td><?=$p->getQteStock()?></td>
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