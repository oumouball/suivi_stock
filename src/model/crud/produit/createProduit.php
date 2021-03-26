<?php

 require_once "../../../bootstrap.php";
 require_once "../../model/crud/user/findUser.php";
 $produit = new Produit();
 $produit->setRef($ref);
 $produit->setNom($nom);
 $produit->setQteStock($qteStock);
 $produit->setUser_id($user);
 $entityManager->persist($produit);
 $entityManager->flush();

?>