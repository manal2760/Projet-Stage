<head>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<?php
include('db_conn.php');

if (isset($_GET['id']) && isset($_GET['date']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];
$date = date("d-m-Y", strtotime( $_GET['date'] ));
//$date2 = strtotime($date);
$currentDay = date('d-m-Y');
//$currentDay2= strtotime($currentDay);

if($currentDay == $date)
{
  $result = mysqli_query($conn,"DELETE FROM demandes WHERE idDemande=$id")
  or die(mysqli_error());

  header("Location: afficherDemandes.php");

} else{
  include 'header.php';
echo '
<!-- Error Alert -->
<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
    <i class="bi-exclamation-octagon-fill"></i>
    <strong class="mx-2">Erreur!</strong> Vous ne pouvez plus supprimer votre demande.
  
    <a class="btn-getstarted scrollto mx-4" href="afficherDemandes.php">Revenir à la liste</a>
</div>

';
include 'footer.php';
}

}


else

{
header("Location: index2.php");
}
?>
