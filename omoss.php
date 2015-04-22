<?php
include ('template.php');

//bild
$img = <<<END
	<div id="screenimg"> <img src="img/omoss.jpg" alt="omossbild"</div>
END;

// text
$content = <<<END
	<h1> Om oss</h1>
		<p>
			CoffeeTime är en nätbutik som startades under våren 2015. CoffeeTimes affärsidé är att erbjuda olika slags kaffemaskiner för att nå ut till en breddare kundkrets oavsett om det är i sitt eget hem, på ett café eller kontor. För att bäst kunna dra nytta av våra produkter så har vi handplockat ett urval av de bästa kaffemaskinerna som finns på marknaden idag. Krav vi kan ställa eftersom vi enbart sysslar med kaffemaskiner.

				CoffeeTime har ett stort utbud av kaffekokare från de ledande tillverkarna. Likaså presskvarnar, kapselmaskiner, mokkabryggare & espressomaskiner. De allra flesta produkterna finns i lager för omgående leverans.

	Självklart går det också bra att kontakta oss om du har några frågor angående produkterna. För information om hur du når oss, tryck på Kontakt i menyn ovan. Kom ihåg att du som konsument alltid har minst två års garanti när du handlar av oss. Läs mer om våra garantier under villkor.
</p>
END;

echo $header;
echo $img;
echo $content;
echo $footer;
?>