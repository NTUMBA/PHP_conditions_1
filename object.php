<!DOCTYPE html>
 <html>
   <head>
    <title>Object form 1</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <meta charset="utf-8"/>
  </head>
  <body>

    <?php
      if (isset($_FILES['renseignement']) AND $_FILES['renseignement']['error'] == 0 ){
          if ($_FILES['renseignement']['size'] <= 2000000){
             $infosfichier = pathinfo($_FILES['renseignement']['name']);
             $extension_upload = $infosfichier['extension'];
             $extensions_autorisees = array('html', 'php');
             if (in_array($extension_upload, $extensions_autorisees)){
               move_uploaded_file($_FILES['renseignement']['tmp_name'], 'uploads/' . basename($_FILES['renseignement']['name']));
                              echo 'L\'envoi a bien été effectué !'. '</br>';
             }
          }
          if (isset($_POST['nom']) AND ctype_alpha($_POST['nom']) AND isset($_POST['prenom']) AND ctype_alpha($_POST['prenom'])){
              echo 'Bonjour'. ' ' .htmlspecialchars($_POST['nom']).' ' .htmlspecialchars($_POST['prenom']). '</br>';
          }
          else {
              echo 'Vous avez oublié d\'indiquez votre nom et/ou prénom'. '</br>';
          }
          if (isset($_POST['age']) AND $_POST['age'] == is_int){
              echo 'Vous avez'. ' ' .htmlspecialchars($_POST['age']). '</br>';
          }
          else{
              echo 'Veuillez écrire votre âge en nombre entier'. '</br>';
          }
          if (isset($_POST['sexe'])){
            if ($_POST['sexe']== 'homme'){
              echo 'Vous êtes un '. ' '.htmlspecialchars($_POST['sexe']). '</br>';
            }
            else{
              echo 'Vous êtes une '. ' '.htmlspecialchars($_POST['sexe']). '</br>';
          }
        }
          else {
              echo 'Vous n\'êtes ni un homme ni une femme...un problème?'. '</br>';
          }
          if (isset($_POST['ville']) AND ctype_alpha($_POST['ville'])){
              echo 'Vous venez de la ville de'. ' ' .htmlspecialchars($_POST['ville']).' '. '</br>';
          }
          else{
              echo 'D\'où venez-vous?';
          }
          ?>
          <h5>Loisirs:</h5>
          <?php
          if (isset($_POST['loisirs'])){
            foreach ($_POST['loisirs'] as $simon=>$value) {
              echo htmlspecialchars($value). '</br>';
          }

       }
       else{
           echo 'No file found or error in your file';
      }
    }
      ?>
      <h5>Remarque:</h5>
    <p>N'hésitez pas à retourner sur la fiche de renseignement afin d'apportez <a href="index.php">des rectifications en cliquant ici</a></p>

  </body>
</html>
