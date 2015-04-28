<?php

//unkluderar template
include "template.php";



$products = ""; //tom variabel som tar emot databasinnehåll

//databasfråga hämtar alla produkter och sorterar på kategori(get-variablen)
$query = <<<END
	SELECT * FROM produkt
	WHERE Kategori = "{$_GET["category"]}"
END;

//kör databasfrågan
$res = $conn->query($query);

//kollar om det finns data och isåfall printar ut den
if($res->num_rows > 0) {
	while($row = $res->fetch_object()) {
		$products .= <<<END
			<div class="product col-md-3">
				<div class="crop"><img class="productimg" src="{$row->imgUrl}" alt="product"></div>
				<h4>{$row->ProduktNamn}</h4>
				<h6>LAGERSTATUS<div class="{$row->Lagerstatus} img-circle"></div></h6>
				<p class="price">{$row->Pris}kr</p>
				<a class="btn btn-success pull-left" href="product.php?id={$row->ProduktID}">LÄS MER</a>
				<a class="btn btn-success pull-right" href="#">KÖP</a>
			</div>
END;
	}
}

//hämtar get variabel och gör den till stora bokstäver
$title = strtoupper($_GET["category"]);

//content
$content = <<<END
	<div id="content" class="container">
		<div id="products" class="col-md-10 col-centered">
			<h1 class="col-md-4 col-centered">$title</h1>
			$products 
		</div>
	</div>
END;

//printar ut alla element
echo $header;
echo $content;
echo $footer;

?>