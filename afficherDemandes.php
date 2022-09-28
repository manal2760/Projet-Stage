<?php
session_start();
include 'db_conn.php';
if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
 { $idUser = $_SESSION['id'];}

$query = "SELECT * FROM demandes WHERE idUser = $idUser;";
$query2 = "SELECT * FROM interventions;";


  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  $result2 = $conn->query($query2);

    // if ($result->num_rows > 0)
    // {
    //     // OUTPUT DATA OF EACH ROW
    //     while($row = $result->fetch_assoc())
    //     {
    //          echo "id: " . $row["idDemande"]. " - Type: " . $row["type"]. " " . $row["SI"]. "<br>";
    //
    //     }
    // }
    // else {
    //     echo "0 results";
    // }




 ?>
 <!doctype html>
<html lang="en">
  <head>
  	<title>Table 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/style2.css">

	</head>
	<body>
    <?php include 'header.php'; ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Vos Demandes</h2> -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>Service</th>
                  <th>Nom Complet</th>
                  <th>Date d'ajout</th>
						      <th>Système d'information</th>
                  <th>Autre</th>
                  <th>Description</th>
                  <th>Type</th>
						      <th>Statut</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
                <?php
                while($row = $result->fetch_assoc())
                {  $newDate = date("d-m-Y", strtotime($row["date"]))?>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" >
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td >
						      	<!-- <div class="img" style="background-image: url(assets/img/person_1.jpg);"></div> -->

						      	<?php echo $row["service"];?>

						      </td>

                  <td style="width:300px"><?php echo $row["nomComplet"];?></td>
                  <td ><?php echo $row["date"];?></td>
						      <td style="width:500px"><?php echo $row["SI"];?></td>
                  <td><?php echo $row["autre"];?></td>
                  <td style="width:600px"><?php echo $row["description"];?></td>
                  <td style="width:300px"><?php echo $row["type"];?></td>
                  <?php if ($row["statut"] == NULL || $row["statut"] == 'en attente') {
                    echo '<td class="status" style="width:700px"><span class="waiting">En attente</span></td>';
                  }else {
                    echo '<td class="status" style="width:500px"><span class="active" >Terminée</span></td>';
                  }
                   ?>

						      <?php //echo '<td><b><font color="#663300"><a href="deleteDemande.php?id=' . $row['idDemande'] . '">Supprimer</a></font></b></td>';?>
                  <?php //echo '<td><a style="color:#E34724" href= "deleteDemande.php?id=' . $row['idDemande'] . '&date=' .$row['date'] . '" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></td>';?>
						      <?php //echo "<button type="button" class="close" data-dismiss="alert" aria-label="Close"   onclick="location.replace('deleteDemande.php?id=' . $row['idDemande'] . '')"></button>"; ?>
				            	<!-- <span aria-hidden="true"><i class="fa fa-close" ></i></span>
				          	</button> -->

						    </tr> <?php }  $conn->close(); ?>

						    <!-- <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(assets/img/person_2.jpg);"></div>
						      	<div class="pl-3 email">
						      		<span>jacobthornton@email.com</span>
						      		<span>Added: 01/03/2020</span>
						      	</div>
						      </td>
						      <td>Jacobthornton</td>
						      <td class="status"><span class="waiting">Waiting for Resassignment</span></td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr> -->

						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</section>
<?php include "footer.php" ?>
	<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main1.js"></script>


	</body>
</html>
