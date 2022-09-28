<?php
include "db_conn.php";

//header ('Content-type: text/html; charset=utf-8');

if(isset($_POST['ajouter']))
{

     $numInventaire = mysqli_real_escape_string($conn,$_POST['numInventaire']);
     $etage = mysqli_real_escape_string($conn,$_POST['etage']);
     $numBureau = mysqli_real_escape_string($conn,$_POST['numBureau']);
     $nomUtilisateur = mysqli_real_escape_string($conn,$_POST['nomUtilisateur']);
     $service = mysqli_real_escape_string($conn,$_POST['service']);
     $date = date('d-m-Y');
     $typeMateriel = mysqli_real_escape_string($conn,$_POST['typeMateriel']);
     $typeProcesseur = mysqli_real_escape_string($conn,$_POST['typeProcesseur']);
     $typeToner = mysqli_real_escape_string($conn,$_POST['typeToner']);
     $numSerie = mysqli_real_escape_string($conn,$_POST['numSerie']);


     $sql = "INSERT INTO inventaire (numInventaire,etage, numBureau, nomUtilisateur, service, typeMateriel, typeProcesseur, typeToner,numSerie,date)
     VALUES ('$numInventaire','$etage','$numBureau','$nomUtilisateur','$service','$typeMateriel','$typeProcesseur','$typeToner','$numSerie','$date')";
     if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

}
 ?>
