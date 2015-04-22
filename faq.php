<?php

//inkluderar template
include "template.php";

//skapar en egen img
$img = <<<END
	<div id="screenimg">
	<div id="overlay"></div>
	<div class="row col-md-2 col-centered">
	<h1>FAQ</h1>
	</div>
	<img src="img/faq.jpg" alt="FAQ">
	
	</div>
END;

//content
$content = <<<END
	<div id="content" class="container">
		<p class="col-md-7 col-centered">
				Q-Hur långt tid tar det innan jag får mina varor? <br>
				A-Vi försöker alltid levera dina varor inom 2-5 arbetsdagar.</p>
			<p class="col-md-7 col-centered">
				Q-Kan jag ångra mitt köp? <br>
				A-Ja, du har alltid 14 dagars ångerrätt.</p>
			<p class="col-md-7 col-centered">
				Q-Hur vet jag om min order har skickats? <br>
				A-Du får alltid ett mail när vi har skickat din produkt.</p>
			<p class="col-md-7 col-centered">
				Q-Min produkt krånglar eller fungerar inte, vad ska jag göra? <br>
				A-Om din produkt krånglar eller inte fungerar så har du rätt till att få en ny produkt eller pengar tillbaka. Skicka tillbaka produkten till oss med hjälp av retursedeln du fick med ditt packet.</p>
			<p class="col-md-7 col-centered">
				Q-Kan jag spåra mitt paket? <br>
				A-Nej, just nu så erbjuder vi inget sätt att spåra ditt paket men det är en funktion som vi planerar att införa.</p>
			<p class="col-md-7 col-centered">
				Q-Vilka betalsätt erbjuder ni? <br>
				A-Just nu så erbjuder vi betalning via Paypal, men fler betalningsalternativ kommer bli tillgängliga i framtiden.</p>		
		</p>
	</div>
END;

//printar ut alla element
echo $header;
echo $img;
echo $content;
echo $footer;

?>