<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
	</head>
<body>
	<h1>Générateur de sémaphore</h1>
<?php
if( isset($_POST['message']) )
{
	$trouver = explode( '-', "À-Á-Â-Ã-Ä-Å-à-á-â-ã-ä-å-Ò-Ó-Ô-Õ-Ö-Ø-ò-ó-ô-õ-ö-ø-È-É-Ê-Ë-è-é-ê-ë-Ç-ç-Ì-Í-Î-Ï-ì-í-î-ï-Ù-Ú-Û-Ü-ù-ú-û-ü-ÿ-Ñ-ñ" );
	$remplacerPar = explode( '-', "A-A-A-A-A-A-a-a-a-a-a-a-O-O-O-O-O-O-o-o-o-o-o-o-E-E-E-E-e-e-e-e-C-c-I-I-I-I-i-i-i-i-U-U-U-U-u-u-u-u-y-N-n" );
	$message = strtolower(str_replace($trouver, $remplacerPar, $_POST['message']));
	
	for($i = 0; $i <= strlen($message); $i++)
	{
		if( strtolower($message[$i]) == " " )
		echo '<img src="img/espace.png" alt=" " /> ';
		else
			echo '<img src="img/'.$message[$i].'.png" alt="'.$message[$i].'" /> ';
	}
}
?>
<form method="post" action="">
	<p>Entrez le message à traduire</p>
	<p><textarea name="message"><?php if(isset($_POST['message'])) echo htmlspecialchars($_POST['message']); ?></textarea></p>
	<p><input type="submit" value="Traduire" /></p>
</form>
</body>
</html>
