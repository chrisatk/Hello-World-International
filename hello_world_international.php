<?php 

$english = "Hello, World!";
$french = "Bonjour le monde!";
$spanish = "¡Hola Mundo!";

echo "<html>\n";

if ( isset( $_GET['language'] ) ) {
	
	if ( $_GET['language'] == "Anglais" ) {
		echo $english;
	} elseif ( $_GET['language'] == "French" ) {
		echo $french;
	} elseif ( $_GET['language'] == "Spanish" ) {
		echo $spanish;
	}

} else {
	
	echo "<form name=\"hello\" action=".$_SERVER['PHP_SELF']." method=GET>\n";

	echo "<input type=\"submit\" name=\"language\" value=\"Anglais\"><br />\n";
	echo "<input type=\"submit\" name=\"language\" value=\"French\"><br />\n";
	echo "<input type=\"submit\" name=\"language\" value=\"Spanish\"><br />\n";

	echo "</form>\n";

}

echo "</html>\n";
?>