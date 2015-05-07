<?php

//unkluderar template
include "template.php";


foreach($_SESSION['kundvagn'] as $item => $cartItem) {
	$produktId = $cartItem['id'];
	$produktNamn = $cartItem['productName'];
	$antal = $cartItem['qty'];
	$pris = $cartItem['price'];
	$img = $cartItem['img'];

	$cartId = $item;

	$cartProducts .= <<<END
		<tr>
			<td><img src="$img" alt="produktbild"></td>
			<td class="productname"><h4>$produktNamn<h4></td>
			<td>$antal</td>
			<td class="price">$pris kr</td>
			<td><a href="cartdelete.php?id=$cartId">Ta Bort</a></td>
		</tr>
END;
}

$cart = <<<END
		<table id="cart">
			<tr>
				<th></th>
				<th class="productname">PRODUKT</th>
				<th>ANTAL</th>
				<th>PRIS</th>
				<th></th>
			</tr>
			$cartProducts
		</table>
END;

//content
$content = <<<END
	<div id="content" class="container">
		<div id="products" class="col-md-10 col-centered">
			<h1 class="col-md-4 col-centered">KUNDVAGN</h1>
			$cart
			<a class="btn btn-success pull-right btn-cart">TILL KASSAN</a>
			<a class="btn btn-danger pull-right btn-cart" href="cartdelete.php">TÖM KUNDVAGN</a>
		</div>
	</div>
END;

//printar ut alla element
echo $header;
echo $content;
echo $footer;

?>