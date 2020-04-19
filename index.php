<!DOCTYPE html>
<html>
<head>
	<title>CV3</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
</head>
<body>

	<style>

		body {
			background-image: url(images/back_img.jpg);
			background-repeat: no-repeat;
			background-size: 100%
		}

		input, textarea {
			display: block;
			width: 390px;
			margin: 10px;
			padding: 5px;
			border-radius: 5px;
			border: 2px solid green;

		}

		.form_div {
			display: inline-block;
		}


	</style>

	<form action="show_page.php" method="post" 	class="res_form" enctype="multipart/form-data">

		<div class="row" style="width: 100%">

			<div class="col-sm-4 form_div">

				<input type="text" name="firstname" placeholder="Անուն" class="inp_1">
				<input type="text" name="lastname" placeholder="Ազգանուն">
				<input type="text" name="middlename" placeholder="Հայրանուն">
				<input type="number" name="age" class="number_input" min="8" max="120" placeholder="Տարիք">
				<input type="text" name="cityofresidence" placeholder="Բնակության Քաղաք">
				<input type="text" name="residenceaddress" placeholder="Բնակության Հասցե">
				<input type="mail" name="mail" placeholder="Էլ․ Հասցե">
				<input type="text" name="mijnakarg_dproc" placeholder="Միջնակարգ կրթօջախի անվանումը">
				<input type="text" name="avag_dproc" placeholder="Ավագ կրթօջախի անվանումը">

			</div>

			<div class="col-sm-4 form_div">

				<input type="text" name="bardzraguyn_ushast" placeholder="Բարձրագույն կրթօջախի անվանումը">
				<textarea name="aboutme1" placeholder="Պատմեք ձեր մասին"></textarea>
				<input type="url" name="linkedin" placeholder="Ձեր Linkedin-յան էջի հասցեն">
				<input type="url" name="github" placeholder="Ձեր Github-յան էջի հասցեն">
				<input type="url" name="twitter" placeholder="Ձեր Twitter-յան էջի հասցեն">
				<input type="url" name="facebook" placeholder="Ձեր Facebook-յան էջի հասցեն">
				<input type="number" name="phone" class="number_input" placeholder="Հեռախոսահամար">
				<input type="text" name="profession" placeholder="Մասնագիտություն">
				<textarea name="xorurd" placeholder="Խորհուրդներ ձեր կողմից՝ սկսնակներին՝ կապված ձեր մասնագիտության հետ"></textarea>
				<input type="submit" name="submit" value="Submit" class="btn btn-success sbm_btn">

			</div>

			<div class="col-sm-4 form_div">	

				<input type="text" name="languages" placeholder="Ծրագրավորման լեզուներ, որոնց տիրապետում եք">
				<input type="text" name="workflow" placeholder="Աշխատանքային ուղղություններ">
				<input type="text" name="lastjoblocation" placeholder="Վերջին Աշխատանքի Վայրը">
				<input type="number" name="date1" class="number_input" min="1920" max="2020" placeholder="Այստեղ Աշխատել եմ () Թվականից">
				<input type="number" name="date2" class="number_input" min="1920" max="2020" placeholder="Այստեղ Աշխատել եմ Մինչև () Թվականը">
				<input type="text" name="diplom" placeholder="Դիպլոմներ">
				<input type="text" name="sertifikat" placeholder="Սերտիֆիկատներ">
				<textarea placeholder="Ի՞նչ հետաքրքրություններ ունեք" name="interests"></textarea>

			</div>

		</div>	

	</form>







<!-- 
<form action="show_page.php" method="post" id>
	<input type="text" name="ashxatanqiwayr1" id="text_input">
	<script type="text/javascript">
	
     function input() {


     	let a = "<input type='text' name='shxatanqiwayr1' id='text_input'>";


     	document.getElementById("frm").innerHTML = "hell";

		

     }



    </script>
	
	<input type="submit" name="submit">
</form>
<div onclick="input()">+</div>






 -->


</body>
</html>