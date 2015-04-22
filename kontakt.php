<?php

//unkluderar template
include "template.php";

//skapar en egen img
$img = <<<END
	<div id="screenimg">
	<div id="overlay"></div>
	<div class="row col-md-2 col-centered">
	<h1>Kontakt</h1>
	</div>
	<img src="img/contact.jpg" alt="kontaktbild">
	
	</div>
END;

//content
$content = <<<END
	<div id="content" class="container">
		<p class="col-md-7 col-centered">
			HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!HÄR SKA VA ETT FORMULÄR!!!
		</p>
	</div>
END;

//printar ut alla element
echo $header;
echo $img;
echo $content;
echo $footer;

?>