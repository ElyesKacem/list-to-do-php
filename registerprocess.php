<?php

if(isset($_SESSION))
{
  header("location:acceuil.php");
}


else{

  $mail=$_POST['mail'];


  $conn=mysqli_connect('localhost','root','','listtodo');
  $queryexist="SELECT * from utilisateur where mail like '$mail' limit 1;";
  $result=$conn->query($queryexist);

  $mdp=$_POST['mdp'];
  $verifmdp=$_POST['verifmdp'];
  $erreur="mafamech erreur";

  $nom=$_POST["nom"];
  $prenom=$_POST["prenom"]; 
  if ($result->num_rows > 0) {
    // mail mawjoud
    $erreur="mail already exists";
    header("location:formulaire.php?erreur=".$erreur);
    
    
  } 

  else if(strlen($mdp)<5)
  {
    $erreur="mot de passe est très court.";
    header("location:formulaire.php?erreur=".$erreur);
  }
  else if($mdp!=$verifmdp)
  {
    $erreur="mot de passe n'est pas bien vérifier";
    header("location:formulaire.php?erreur=".$erreur);
  }
  else
  {
    $prenom=$_POST["prenom"];
    $add="INSERT into utilisateur (mail,mdp,nom,prenom) values ('$mail','$mdp','$nom','$prenom')";
    $conn->query($add);
    session_start();
    $_SESSION['nom']=$nom;
    $_SESSION['mail']=$mail;
    header("location:acceuil.php");
  }
                  
  





  



}

?>