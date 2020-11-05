<?php 
$id=$_GET['val'];
$conn=mysqli_connect("localhost","root","","listtodo");
$conn->query('DELETE FROM taches WHERE id='.$id.';');
header('location:acceuil.php');






?>