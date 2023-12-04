
    <?php
       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($firstname) && isset($lastname) && isset($specialite)){
                //connexion à la base de donnée
                include_once "../config.php";
                //requête d'ajout
                $req = $bdd->prepare('INSERT INTO users(lastname,firstname,specialite,role) VALUES(:lastname, :firstname, :specialite,:role)');
                $req->execute(array(
                    'lastname' => $lastname,
                    'firstname' => $firstname,
                    'specialite' => $specialite,
                    'role'=>'doctor'
                ));               
                 if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: ../admin/Doctor.php");
                }else {//si non
                    $message = "Employé non ajouté";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    