<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style5.css">

</head>
<body>
	<header>


	</header>
	<!-- <img src="assets/img/logo3.svg" alt="" class="image1"> -->
     <form action="login.php" method="post">
     	<h2>CONNEXION</h2>
      <?php if (isset($_GET['error'])) { ?>
       		<p class="error"><?php echo $_GET['error']; ?></p>
       	<?php } ?>


     	<label>Nom d'utilisateur</label>
     	<input type="text" name="username" placeholder="Username" id="username"><br>

     	<label>Mot De Passe</label>
     	<input type="password" name="password" placeholder="Password" id="password"><br>

      <label>Role</label>
      <select  aria-label="Default select example" name="role">
        <option selected value="user">User</option>
        <option value="admin" >Admin</option>

      </select>

   <?php //echo md5(1234) ?>
     	<button type="submit">Se Connecter</button>
     </form>
</body>
</html>
