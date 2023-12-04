<?php
  //connexion a la base de données
  include_once "../view/config.php";
  //récupération de l'id dans le lien
  $id= $_GET['id'];
  //requête de suppression
  $req = $bdd->prepare("DELETE FROM users WHERE id = :id");
  $req->execute(array("id" => $id));
  //redirection vers la page index.php
  header("Location:../view/admin/landing.php")
?>