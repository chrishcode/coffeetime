<?php

//inkluderar template
include "template.php";

$content = <<<END

<div id="content" class="container">
	<div class="col-md-10 col-centered">
		<form id="loginform" class="col-md-5 pull-left" action="login.php" method="post">
			<h3>Logga in</h3>
			<p>Redan medlem? Logga in här</p>
			<label>EMAIL</label><input class="form-control" type="text" name="Email"><br>
			<label>LÖSENORD</label><input class="form-control" type="password" name="Losenord">
			<input class="btn btn-success" type="submit" value="LOGGA IN">
		</form>

		<form id="signupform" class="col-md-5 pull-right" action="login.php" method="post">
			<h3>Bli medlem</h3>
			<p>Inte medlem än? Registera dig här</p>
			<label>EMAIL</label><input class="form-control" type="text" name="Email"><br>
			<label>LÖSENORD</label><input class="form-control" type="password" name="Losenord"><br>
			<label>FÖRNAMN</label><input class="form-control" type="text" name="Fnamn"><br>
			<label>EFTERNAMN</label><input class="form-control" type="text" name="Enamn"><br>
			<label>TELEFONNUMMER</label><input class="form-control" type="text" name="Telefon"><br>
			<label>ADRESS</label><input class="form-control" type="text" name="Adress"><br>
			<label>POSTNUMMER</label><input class="form-control" type="text" name="Postnummer">
			<input class="btn btn-success" type="submit" value="BLI MEDLEM">
		</form>
	</div>
</div>

END;

//printar ut alla element
echo $header;
echo $content;
echo $footer;

?>


