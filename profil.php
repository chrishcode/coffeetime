<?php
//inkluderar template
include "template.php";
//tom content-variabel som får aktuell kundinformation
$content = '';  
if(isset($_GET['KundID']))
{
	if($_GET['KundID']==$_SESSION['KundID']){
		if(isset($_POST['Email']))
	{
		$query = <<<END
		UPDATE kund
		SET Email = '{$_POST['Email']}',
		Losenord = '{$_POST['Losenord']}',
		Fnamn = '{$_POST['Fnamn']}',
		Enamn = '{$_POST['Enamn']}',
		Telefon = '{$_POST['Telefon']}',
		Adress = '{$_POST['Adress']}',
		Postnummer = '{$_POST['Postnummer']}'
		WHERE KundID = '{$_GET['KundID']}'
END;
	$conn->query($query);
	}

	$query = <<<END
	SELECT * FROM kund
	WHERE KundID = '{$_GET['KundID']}';
END;
$res = $conn->query($query);

if($res->num_rows > 0)
{
	$row = $res->fetch_object();
//content
$content = <<<END
	<div id="content" class="container">
		<form class="col-md-7 col-centered" method="post" action="profil.php?KundID={$row->KundID}">
			<h3>Kontaktuppgifter</h3>
			<label >EMAIL</label><input class="form-control" type="text" name="Email" value="{$row->Email}"><br>
			<label >LÖSENORD</label><input class="form-control" type="text" name="Losenord" value="{$row->Losenord}"><br>
			<label>FÖRNAMN</label><input class="form-control" type="text" name="Fnamn" value="{$row->Fnamn}"><br>
			<label>EFTERNAMN</label><input class="form-control" type="text" name="Enamn" value="{$row->Enamn}"><br>
			<label>TELEFONNUMMER</label><input class="form-control" type="text" name="Telefon" value="{$row->Telefon}"><br>
			<label>ADRESS</label><input class="form-control" type="text" name="Adress" value="{$row->Adress}"><br>
			<label>POSTNUMMER</label><input class="form-control" type="text" name="Postnummer" value="{$row->Postnummer}"><br>
			<input class="btn btn-success" type="submit" value="UPPDATERA">
			<a class="btn btn btn-danger btn-delete" type="submit" href="delete.php?KundID={$row->KundID}" onclick="return confirm('Är du säker på att du vill radera ditt konto?')">
			RADERA</a>
		</form>
	</div>
END;
}
}
}
//printar ut alla element
echo $header;
echo $content;
echo $footer;
?>