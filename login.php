<?php

//inkluderar template
include "template.php";

$content = <<<END
<div class="verticalLine">
	<div id="content" class="container">
		<form class="col-md-3 col-centered" action="login.php" method="post">
			<label>Email</label><input class="form-control" type="text" name="Email" placeholder="Email"><br>
		<label>Lösenord</label><input class="form-control" type="password" name="Losenord" placeholder="Lösenord"><br>
			<input class="btn btn-success" type="submit" value="Logga in">
		</form>
	</div>
</div>
END;

//printar ut alla element
echo $header;
echo $content;
echo $footer;

?>


