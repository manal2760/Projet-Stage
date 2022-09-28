

<?php
include('db_conn.php');

if (isset($_GET['id']))
{
$id = $_GET['id'];



  $result = mysqli_query($conn,"DELETE FROM inventaire WHERE numInventaire='$id'")
  or die(mysqli_error());

  header("Location: dashboard.php");



}


else

{
header("Location: index2.php");
}
?>
