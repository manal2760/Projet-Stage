<?php
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

      	<?php if ($_SESSION['role'] == 'admin') {?>

			<?php include "index2.php" ?>

      	<?php }else { ?>
      		<!-- FORE USERS -->
      	<?php include "index2.php" ?>
      	<?php } ?>
      
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>
