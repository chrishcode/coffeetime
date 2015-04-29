<?php
//inkluderar template
include ('template.php');

//skapar en egen img
$img = <<<END
	<div id="screenimg">
	<div id="overlay"></div>
	<div class="row col-md-2 col-centered">
	<h1 class="slideh1">Kontakt</h1>
	</div>
	<img class="screenimg" src="img/contact.jpg" alt="kontaktbild">
	
	</div>
END;
if(isset($_POST))
{
//content
	$content = <<<END
	<div id="content" class="container">
		<form class="col-md-7 col-centered" action="kontakt.php" method="post">
				<h3 class="col-md-7 col-centered">Meddelandet är skickat</h3>	
			<input class="btn btn-warning" type="submit" value="TILLBAKA">
		</form>
	</div>	
END;
//Skickar till mail adressen
$to = "petrom14@student.hh.se";
$subject = "CoffeeTime";
$msg = $_POST["msg"];
$headers = "From: " . $_POST["name"];
mail($to,$subject,$msg,$headers);
}
//printar ut alla element
echo $header;
echo $img;
echo $content;
echo $footer;
?>