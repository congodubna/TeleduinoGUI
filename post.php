<?php
/*
TeleduinoGUI

E.E. Wolsink & R.H.P. Daalman

® © Copyleft: user is free to modify & redistribute non-commercially with mention of original source and credits.
for use with the Teleduino software available from Teleduino.org

*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Result</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php 
$base_url = 'https://us01.proxy.teleduino.org/api/1.0/328.php'; // for mega use 2560.php
$parameters = '?';

foreach ($_GET as $key => $value) {
	if (is_array($value) && $key == 'outputs') {
	    foreach ($value as $key2 => $value2) {
	        $parameters .= 'outputs[' . $key2 . ']=' .  $value2 . '&';
	    }
	} else {
	    $parameters .= $key . '=' .  $value . '&';
	}
}
echo $base_url . $parameters; 

$output_raw = file_get_contents($base_url . $parameters);
echo '<pre>'; print_r($output_raw); echo '</pre>';


$output = json_decode($output_raw, true);
echo '<pre>'; print_r($output); echo '</pre>'; exit;
?>

	</body>
</html>
