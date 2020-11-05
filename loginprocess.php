<?php 
$mail=$_POST['mail'];
$mdp=$_POST['mdp'];

$conn=mysqli_connect("localhost","root","","listtodo");

$result=$conn->query("SELECT mail,mdp from utilisateur where mail like '$mail' and mdp like '$mdp' limit 1; ");

if($result->num_rows==0)
{
    $erreur="Veuiller vérifier votre login";
    header("location:login.php?erreur=".$erreur);
}
else
{


    $row=$result->fetch_assoc();
    
    if($row['mdp']!=$mdp)
    {
        $erreur="Le mot de passe est incorrect";
        header("location:login.php?erreur=".$erreur);
    }
    else
    {
        session_start();
        $result=$conn->query("SELECT nom from utilisateur where mail like '$mail' limit 1; ");;
        $row=$result->fetch_assoc();
        $_SESSION['nom']=$row['nom'];
        $_SESSION['mail']=$mail;
        header("location:acceuil.php");
    }


}


?>