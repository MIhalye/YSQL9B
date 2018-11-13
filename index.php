<?php
/**
 * Cookie schreiben
 * Timestamp als Wert
 * Gültigkeitsdauer 120 Tage
 */
setcookie("Image2Food", time(), time() + (60 * 60 * 24 * 120));

/**
 * Festlegung der Untergrenze für die PHP-Version
 * @version: 1.0
 */
if (0 > version_compare(PHP_VERSION, '5')) {
	die('<h1>Für diese Anwendung ' . 'ist mindestens PHP 5 notwendig</h1>');
}
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<title>Image2Food –
			Sag mir, was ich daraus kochen kann – Index </title>
		<meta name="viewport" content=
		"width=device-width; initial-scale=1.0">
	</head>
	<body>
		<?php
			require("nav.php");
		?>
	</body>
</html>
