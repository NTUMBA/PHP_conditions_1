<html>
  <head>
   <title>Object form 1</title>
   <link type="text/css" rel="stylesheet" href="style.css">
   <meta charset="utf-8"/>
 </head>
 <body>

 <form action="object.php" method="post" enctype="multipart/form-data">
   <!-- Grâce à enctype, le navigateur du visiteur sait qu'il s'apprête à envoyer des fichiers. -->
   <p>
             Formulaire d'envoi de fichier :<br />

     </p>
   <h5>Nom</h5>
   <input type="text" name="nom">
   <h5>Prénom</h5>
   <input type="text" name="prenom">
   <h5>Age</h5>
   <input type="text" name="age">
   <h5>SEXE</h5>
   <br><input type="radio" id="homme" value="homme" name="sexe"><label for="homme">Homme</label>
   <br><input type="radio" id="femme" value="femme" name="sexe"><label for="femme">Femme</label>
     <h5>VILLE</h5>
     <input type="text" name="ville">
     <h5>LOISIRS</h5>
       <input type="checkbox" value="sport" name="loisirs[]"><label for="sport">Sport</label>
       <input type="checkbox"  value="voyage" name="loisirs[]"><label for="voyage">Voyage</label>
       <input type="checkbox"  value="art" name="loisirs[]"><label for="art">Art plastique</label>
       <input type="checkbox"  value="lecture" name="loisirs[]"><label for="lecture">Lecture</label><br>
       <!--checkbox allows to select more then 1 option, for instance user can choose the first and the last one  -->

<!-- le code ci-dessous donne la passibilité au développeur de cibler le fichier formulaire situé dans osn ordinateur  -->
<input type="file" name="renseignement" /><br />
<!-- ce code permet d'envoyer le fichier -->
<input type="submit"  name="submit" value="Envoyer le fichier" />
</form>

</body>
</html>
