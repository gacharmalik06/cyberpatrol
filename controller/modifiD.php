
<?php

         //connexion à la base de donnée
         session_start();
          include_once "../config.php";
          

       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($firstname) && isset($lastname) && isset($email) ){
               //requête de modification
               $req = $bdd->prepare("UPDATE users SET firstname = :firstname , lastname = :lastname ,email = :email WHERE id = :id");
               $req->execute(array( 
             "firstname" => $firstname,
             "lastname" => $lastname,
               "email" => $email,
                "id" => $_SESSION['user']['id']
            ));
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: ../connexion-doctor/barreD.php");
                }else {//si non
                    $message = "Employé non modifié";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

