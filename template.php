<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

</body>
</html>
<?php
//headern
$header = <<<END
	<div id="topnav"></div>
	<div id="bottomnav"></div>
	<p>Erik lök</p>
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
	<div id="footer" class="footer"></div>
END;


echo $header;
echo $img;
echo $content;
echo $footer;
?>
