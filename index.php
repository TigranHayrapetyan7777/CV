<?php 

	if(isset( $_POST['sent']) && $_POST['anun'] == true) {
		$anun = $_POST['anun'];
	} else {
		$anun = " ";
 	}


	if(isset( $_POST['sent']) && $_POST['azganun'] == true) {
		$azganun = $_POST['azganun'];
	} else {
		$azganun = " ";
 	}
	

	if(isset( $_POST['sent']) && $_POST['hayranun'] == true) {
		$hayranun = $_POST['hayranun'];
	} else {
		$hayranun = " ";
 	}
	

	if(isset( $_POST['sent']) && $_POST['tariq'] == true) {
		$tariq = $_POST['tariq'];
	} else {
		$tariq = " ";
 	}
	

	if(isset( $_POST['sent']) && $_POST['cnund'] == true ) {
		$cnund = $_POST['cnund'];
	} else {
		$cnund = " ";
 	}


	if(isset( $_POST['sent']) && $_POST['hasce'] == true) {
		$hasce = $_POST['hasce'];
	} else {
		$hasce = " ";
 	}


	if(isset( $_POST['sent']) && $_POST['heraxosahamar'] == true) {
		$heraxosahamar = $_POST['heraxosahamar'];
	} else {
		$heraxosahamar = " ";
 	}


	if(isset( $_POST['sent']) && $_POST['masnagitutyun'] == true) {
		$masnagitutyun = $_POST['masnagitutyun'];
	} else {
		$masnagitutyun = " ";
 	}


	if(isset( $_POST['sent']) && $_POST['werjinashx'] == true) {
		$werjinashx = $_POST['werjinashx'];
	} else {
		$werjinashx = " ";	
 	}


	if(isset( $_POST['sent']) && $_POST['twakan1'] == true) {
		$twakan1 = $_POST['twakan1'];
	} else {
		$twakan1 = " ";
 	}


	if(isset( $_POST['sent']) && $_POST['twakan2'] == true) {
		$twakan2 = $_POST['twakan2'];
	} else {
		$twakan2 = " ";
 	}

	?>

<!DOCTYPE html>
<html>
<head>
	<title>CV</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<style>

		.res_form {
			display: inline-block;
		}

		.res_div {
			display: inline-block;
			position: absolute;
			top: 0px;
			right: 0%;
			font-size: 25px;
			background-color: lightgreen;
			border: 4px solid darkgreen;
			color: black;
			width: 70%;
			text-align: left;
			padding-left: 20px;
		}

		.res_div p {
			margin: 5px;
		}

		input {
			width: 320px;
			background-color: lightgreen;
			border: 3px solid darkgreen;
			color: white;
			border-radius: 5px;
			padding: 7px;
			margin: 10px;
			display: block;
		}

		::placeholder {
			color: white;
			font-size: 21.5px;
			text-align: left;
		}
	</style>

	<form method="post" action=" " class="res_form">
		<input type="text" name="anun" placeholder="Anun">
		<input type="text" name="azganun" placeholder="Azganun">
		<input type="text" name="hayranun" placeholder="hayranun">
		<input type="number" name="cnund" class="number_input" min="1900" max="2002" placeholder="Cnndyan taretiw">
		<input type="number" name="tariq" class="number_input" min="18" max="120" placeholder="Tariq">
		<input type="text" name="hasce" placeholder="Hasce">
		<input type="number" name="heraxosahamar" class="number_input" minlength="9" maxlenght="13" placeholder="Heraxosahamar">
		<input type="text" name="masnagitutyun" placeholder="Masnagitutyun">
		<input type="text" name="werjinashx" placeholder="Werjin ashxatanqi wayry">
		<input type="number" name="twakan1" class="number_input" min="1920" max="2020" placeholder="Ashxatel em X twakanic">
		<input type="number" name="twakan2" class="number_input" min="1920" max="2020" placeholder="Ashxatel em minchew">
		<input type="submit" name="sent" value="Submit" style="font-size: 21.5px">
	</form>

	<div class="res_div" id="div_refresh">
		<p>Anun: <?php echo $anun ?></p>
		<p>Azganun: <?php echo $azganun ?></p>
		<p>Hayranun: <?php echo $hayranun ?></p>
		<p>Cnndyan taretiw: <?php echo $cnund ?></p>
		<p>Tariq: <?php echo $tariq ?></p>
		<p>Bnakutyan wayri hasce: <?php echo $hasce ?></p>
		<p>Heraxosahamar: <?php echo $heraxosahamar ?></p>
		<p>Masnagitutyun: <?php echo $masnagitutyun ?></p>
		<p>Werjin ashxatanqi wayry: <?php echo $werjinashx ?></p>
		<p>Ashxatel em: <?php echo $twakan1 ?></p>
		<p>Ashxatel em: <?php echo $twakan2 ?></p>
	</div>

<!-- 	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
		    $(document).ready(function(){
      $("#div_refresh").load("/admin");
         setInterval(function() {
             $("#div_refresh").load("/admin");
         }, 1000);
     }); 
	</script> -->

</body>
</html>