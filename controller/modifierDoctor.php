
<?php

         //connexion à la base de donnée
          include_once "../config.php";
         //on récupère le id dans le lien
          $id = $_GET['id'];
          //requête pour afficher les infos d'un employé
          $req = $bdd->prepare("SELECT * FROM users WHERE id =:id");
          $req->execute(array("id" => $id));
          $row = $req->fetch();

       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           
           //verifier que tous les champs ont été remplis
           if(isset($firstname) && isset($lastname) && isset($specialite)){
               //requête de modification
               $req = $bdd->prepare("UPDATE users SET firstname = :firstname , lastname = :lastname , specialite = :specialite WHERE id = :id");
               $req->execute(array( "firstname" => $firstname,
               "lastname" => $lastname,
                "specialite" =>$specialite,
                "id" => $id));
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: ../admin/Doctor.php");
                }else {//si non
                    $message = "Employé non modifié";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

