<?php
//inkluderar template
include "template.php";

$content = <<<END

<div id="content" class="container">
	<div class="col-md-6 col-centered">
        <div id=tack">
            <h1 class="col-centered col-md-10"><span class="glyphicon glyphicon-ok"></span>Tack för din beställning!</h1>
            <p class="p col-md-11">Din betalning är genomförd och dina artiklar levereras till dig så snart som möjligt.</p>
        </div>
	</div>
</div>

END;

//printar ut alla element
echo $header;
echo $content;
echo $footer;

?>


