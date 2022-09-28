<?php
include "db_conn.php";

//header ('Content-type: text/html; charset=utf-8');

if(isset($_POST['modifier']))
{


     $matricule = mysqli_real_escape_string($conn,$_POST['matricule']);
     $nomComplet = mysqli_real_escape_string($conn,$_POST['nomComplet']);
     $nomUtilisateur = mysqli_real_escape_string($conn,$_POST['nomUtilisateur']);
     $nomUtilisateur2 = trim($nomUtilisateur," ");
     $mdp = mysqli_real_escape_string($conn,$_POST['mdp']);
     $dateAjout = date('d-m-Y');
     $service = mysqli_real_escape_string($conn,$_POST['service']);
     $numBureau = mysqli_real_escape_string($conn,$_POST['numBureau']);
     $role = mysqli_real_escape_string($conn,$_POST['role']);


     $sql = "UPDATE users SET id='$matricule', name='$nomComplet' ,username='$nomUtilisateur',password='$mdp' ,service='$service',numBureau='$numBureau',role='$role' WHERE id='$matricule'";
     if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

}
 ?>
