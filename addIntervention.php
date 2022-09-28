<?php
include "db_conn.php";

//header ('Content-type: text/html; charset=utf-8');

if(isset($_POST['terminer']))
{

  // if (isset($_GET['id2'])  && is_numeric($_GET['id2']))
  // {
  // $id = $_GET['id2'];}
     $matricule = mysqli_real_escape_string($conn,$_POST['matricule']);
     $intervenant = mysqli_real_escape_string($conn,$_POST['intervenant']);
     $statut = mysqli_real_escape_string($conn,$_POST['statut']);
     $observation = mysqli_real_escape_string($conn,$_POST['observation']);
     $date = date('d-m-Y');
     $idDemande = mysqli_real_escape_string($conn,$_POST['idDemande']);

     $sql2 = "UPDATE demandes SET statut='$statut' WHERE idDemande='$idDemande'";
     


     $sql = "INSERT INTO interventions (matricule,idDemande,intervenant,statut,observation,date)
     VALUES ('$matricule','$idDemande','$intervenant','$statut','$observation','$date')";
     if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
        header("Location: dashboard.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

}
 ?>
