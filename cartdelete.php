<?php

//unkluderar template
include "template.php";

if(isset($_GET['id'])) {
	$i = $_GET['id'];
	unset($_SESSION['kundvagn'][$i]);
	echo "<script>window.location.replace('cart.php');</script>";
}
else {
	unset($_SESSION['kundvagn']);
	echo "<script>window.location.replace('cart.php');</script>";
}

//printar ut alla element
echo $header;
echo $content;
echo $footer;

?>