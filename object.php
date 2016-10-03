<?php
if (isset($_FILES['renseignement']) AND $_FILES['renseignement']['error'] == 0 )
{
if (isset($_POST['nom']) AND isset($_POST['prenom'])){
echo 'Bonjour'. ' ' .htmlspecialchars($_POST['nom']).' ' .htmlspecialchars($_POST['prenom']);
}
else {
echo 'Vous avez oublié d\'indiquez votre nom et/ou prénom';
}
if (isset($_POST['age']) AND (int)$_POST['age']){
echo 'Vous avez'. ' ' .htmlspecialchars($_POST['age']);
}
else{
echo 'Veuillez écrire votre âge en nombre entier';
}
if (isset($_POST['sexe'])){
echo 'Vous êtes un '. ' '.htmlspecialchars($_POST['sexe']);
}
else {
echo 'Vous n\'êtes ni un homme ni une femme...un problème?';
}
if (isset($_POST['ville'])){
echo 'Vous venez de la ville de'. ' ' .htmlspecialchars($_POST['ville']);
}
else{
echo 'D\'où venez-vous?';
}
if (isset($_POST['loisirs'])){
foreach ($_POST['loisirs'] as $simon=>$value) {
  echo 'vous aimez'. ' ' .htmlspecialchars($value). '</br>';
}

 }
 else
{  echo 'No file found or error in your file';
}
?>
<p>N'hésitez pas à retourner sur la fiche de renseignement afin d'apportez <a href="renseignement.php">des rectification en cliquant ici</a></p>
