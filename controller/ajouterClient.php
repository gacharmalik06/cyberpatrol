
    <?php
       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($user_name) && isset($email) ){
                //connexion à la base de donnée
                include_once "../config.php";
                //requête d'ajout
                $req = $bdd->prepare('INSERT INTO users(user_name,email,role) VALUES(:user_name, :email, :role)');
                $req->execute(array(
                    'user_name' => $user_name,
                    'email' => $email,
                    'role'=>'client',
                ));               
                 if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: ../admin/landing.php");
                }else {//si non
                    $message = "Employé non ajouté";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
