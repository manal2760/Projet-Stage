<?php
session_start();
include "db_conn.php";
//include "login.php";
header ('Content-type: text/html; charset=utf-8');

if(isset($_POST['enregistrer']))
{


     $service = mysqli_real_escape_string($conn,$_POST['service']);
     $name = mysqli_real_escape_string($conn,$_POST['name']);
     $date = date('d-m-Y h:i:sa ',strtotime('+2 hours'));
     $SI = mysqli_real_escape_string($conn,$_POST['SI']);
     $autre = mysqli_real_escape_string($conn,$_POST['autre']);
     $description = mysqli_real_escape_string($conn,$_POST['description']);
     $type = mysqli_real_escape_string($conn,$_POST['type']);
     $type2 = mysqli_real_escape_string($conn,$_POST['autre2']);
     if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
      { $idUser = $_SESSION['id'];}

     $sql = "INSERT INTO demandes (idUser, service, nomComplet, date, SI, autre, description, type,autreType)
     VALUES ('$idUser','$service','$name','$date','$SI','$autre','$description','$type','$type2')";
     $sql2 = "UPDATE demandes SET statut='en attente' WHERE statut IS NULL";
     if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
        header("Location: ./success.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}


 ?>
