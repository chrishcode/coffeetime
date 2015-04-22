<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,700,600,500,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

</body>
</html>
<?php
//headern
$header = <<<END
	<div id="topnav"> 
		<div class="container-fluid col-md-10 col-centered">
			<a href="index.php"><p class="pull-left"><img src="img/logo.svg" alt="logo">CoffeeTime</p></a>
			<ul class="row col-md-4 pull-right">
				<li><a href="#">OM OSS</a></li>
				<li><a href="#">KONTAKT</a></li>
				<li><a href="#">LOGGA IN</a></li>
				<li><a href="#">BLI MEDLEM</a></li>
			</ul>
		</div>
	</div>
	<div id="bottomnav">
		<div class="container">
			<ul class="row col-md-11 col-centered">
				<li><a href="#">KAFFEKOKARE</a></li>
				<li><a href="#">PRESSKANNOR</a></li>
				<li><a href="#">KAPSELMASKIN</a></li>
				<li><a href="#">MOKABRYGGARE</a></li>
				<li><a href="#">ESPRESSOMASKIN</a></li>
			</ul>
		</div>
	</div>
END;
//element där slider eller bild ligger
$img = <<<END
	<div id="screenimg"></div>
END;
//content
$content = <<<END
	<div id="content" class="container"></div>
END;
//footer
$footer = <<<END
	<div id="footer" class="footer">
		<div class="container-fluid col-md-10 col-centered">
			<ul id="footermenu" class="row col-md-5 col-centered">
				<li><a href="#">Om oss</a></li>
				<li><a href="#">Kontakt</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Villkor</a></li>
			</ul>
			<div id="paypal" class="row col-md-2 pull-right">
				<p>Betala säkert med</p>
				<img src="img/paypalen.png" alt="paypal">
			</div>
			<p class="row col-md-2 col-centered">&copy coffeetime.se</p>
		</div>
	</div>
END;

?>
