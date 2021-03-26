<?php

     if(isset($_POST['btnAddUser'])) {
        
      extract($_POST);
      require_once "../../model/crud/user/createUser.php";
      header("location:http://localhost:8080/suivistock/src/view/user/listeUser.php");
     }
?>