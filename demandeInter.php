
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v10 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="UTF-8">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="assets/css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body class="form-v10">

	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="insertIntoDemands.php" method="post" id="myform">
				<div class="form-left">
					<h2>Demande D'intervention</h2>
					<div class="form-row">
						<select name="service" required>
						    <option class="option" value="service" >Service</option>
                 <option class="option" value="SAG">SAG</option>
						    <option class="option" value="CERET">CERET</option>
						    <option class="option" value="SPEE">SPEE</option>
						    <option class="option" value="SCTAPC">SCTAPC</option>
                <option class="option" value="SLM">SLM</option>
                <option class="option" value="Informatique">Informatique</option>
                <option class="option" value="CM">CM</option>
                <option class="option" value="CCM">CCM</option>
                <option class="option" value="Contentieux">Contentieux</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<!-- <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div> -->
					<!-- <div class="form-row">
						<select name="position">
						    <option value="position">Position</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div> -->
					<div class="form-row">
						<input type="text" name="name" class="name" id="name" placeholder="Nom Et Pr??nom" required>
					</div>

          <div class="form-row">

          <!-- <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date" required/> -->
          </div>

          <div class="form-row">
						<select name="SI" required>
						    <option class="option" value="SI" >Syst??me d'information</option>
                 <option class="option" value="docflow">Syst??me de Gestion du Courrier</option>
						    <option class="option" value="sgia">Syst??me de Gestion des Achats</option>
						    <option class="option" value="epm">Syst??me de Gestion des Projets</option>
						    <option class="option" value="sgpr">Syst??me de Gestion des Conventions</option>
                <option class="option" value="sgc">Base de Donn??e Territoriale</option>
                <option class="option" value="insaf">Syst??me de Gestion du Contentieux</option>
                <option class="option" value="sgca">Syst??me de Gestion des Carrieres</option>
                <option class="option" value="sgla">Syst??me de Gestion des Logements Administratifs</option>

						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>

          <div class="form-row">
            <input type="text" name="autre" class="autre" id="autre" placeholder="Autre" >
          </div>

          <div class="form-row">
            <textarea class="form-control" id="description" rows="10" cols="56" placeholder="Merci de d??crire avec pr??cision le (ou les) probl??me(s) rencontr??(s) " required name="description"></textarea>
          </div>



					<div class="form-group">
						<!-- <div class="form-row form-row-3">
							<input type="text" name="business" class="business" id="business" placeholder="Business Arena" required>
						</div> -->
						<!-- <div class="form-row form-row-4">
							<select name="employees">
							    <option value="employees">Employees</option>
							    <option value="trainee">Trainee</option>
							    <option value="colleague">Colleague</option>
							    <option value="associate">Associate</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div> -->
					</div>
				</div>
				<div class="form-right">
					<h2>Types D'intervention </h2>
          <div class="form-checkbox">
        						<label class="container"><p>Installation de logiciel </p>
        						  	<input type="checkbox" name="type" value="Installation de logiciel">
        						  	<span class="checkmark"></span>
        						</label>
          </div>
          <div class="form-checkbox">
        						<label class="container"><p> Cr??ation de compte </p>
        						  	<input type="checkbox" name="type" value="Cr??ation de compte">
        						  	<span class="checkmark"></span>
        						</label>
          </div>

          <div class="form-checkbox">
                    <label class="container"><p> Probl??me de mot de passe  </p>
                        <input type="checkbox" name="type" value="Probl??me de mot de passe ">
                        <span class="checkmark"></span>
                    </label>
          </div>

          <div class="form-checkbox">
                    <label class="container" ><p> D??pannage mat??riel (panne, etc.)   </p>
                        <input type="checkbox" name="type" value="D??pannage mat??riel (panne, etc.)">
                        <span class="checkmark"></span>
                    </label>
          </div>

          <div class="form-checkbox">
                    <label class="container" ><p> Probl??me d???acc??s ?? internet   </p>
                        <input type="checkbox" name="type" value=" Probl??me d???acc??s ?? internet ">
                        <span class="checkmark"></span>
                    </label>
          </div>

          <div class="form-checkbox">
                    <label class="container" ><p> Mise ?? jour Syst??me d???exploitation   </p>
                        <input type="checkbox" name="type" value="Mise ?? jour Syst??me d???exploitation">
                        <span class="checkmark"></span>
                    </label>
          </div>

          <div class="form-checkbox">
                    <label class="container" ><p> MAJ Mat??riel (extension)   </p>
                        <input type="checkbox" name="type" value="MAJ Mat??riel (extension)">
                        <span class="checkmark"></span>
                    </label>
          </div> <br>
					<div class="form-row">

            <input type="text" name="autre2" class="autre2" id="autre" placeholder="Autre Type" >
          </div>





					<!-- <div class="form-row">
						<input type="text" name="street" class="street" id="street" placeholder="Street + Nr" required>
					</div> -->
					<!-- <div class="form-row">
						<input type="text" name="additional" class="additional" id="additional" placeholder="Additional Information" required>
					</div> -->
					<!-- <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="zip" class="zip" id="zip" placeholder="Zip Code" required>
						</div>
						<div class="form-row form-row-2">
							<select name="place">
							    <option value="place">Place</option>
							    <option value="Street">Street</option>
							    <option value="District">District</option>
							    <option value="City">City</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div> -->
					<!-- <div class="form-row">
						<select name="country">
						    <option value="country">Country</option>
						    <option value="Vietnam">Vietnam</option>
						    <option value="Malaysia">Malaysia</option>
						    <option value="India">India</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div> -->
					<!-- <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code" id="code" placeholder="Code +" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
						</div>
					</div> -->
					<!-- <div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div> -->
          

            <div class="form-row-last">
              <input type="submit" name="enregistrer" value="Enregistrer" class="register">
               <input style= "float: right; margin-right: 50px" type="button" name="acceuil" class="register" value="Acceuil" onclick="location.replace('index2.php')"></button>
            </div>



				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
