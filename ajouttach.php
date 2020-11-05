<?php 
session_start();

if($_GET['tache']!=null)
{   $val=$_GET['tache'];
    $mail=$_SESSION['mail'];
    $date=time();
    $conn=mysqli_connect("localhost","root","","listtodo");
    $conn->query("INSERT into taches (towner,val,tdate) values ('$mail','$val','$date');");
}

header("location:acceuil.php");


?>