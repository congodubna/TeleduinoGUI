<?php
/*
TeleduinoGUI

E.E. Wolsink & R.H.P. Daalman

® © Copyleft: user is free to modify & redistribute non-commercially with mention of original source and credits.
for use with the Teleduino software available from Teleduino.org

*/
$key = '{key}'; // replace with your unique API key, won't work without this
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Teleduino Control Panel</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<h1><a>Teleduino ControlPanel</a></h1>
	<! start form>
	<form method="get" action="post.php">						
<! just for neatness, including this lable prior to the pins makes it easier to distinguish functions>
		<p><label class="getDigitalInput" for="getDigitalInput" name="getDigitalInput">getDigitalInput </label>
		<! hidden labels to set your api preferences and generate a proper query>
		<input type="hidden" name="k" id="k" value="<?php echo $key; ?>">
		<input type="hidden" name="r" id="r" value="getDigitalInput"> <! request, you generate this for every function EVERY time you post the form>
		<label for="pin">pins</label>
		<! for each pin you want to read out create this: >
			<input id="pin" name="pin" type="checkbox" value="2" />
		<! end>			
			<input id="pin" name="pin" type="checkbox" value="3" />
			<input id="pin" name="pin" type="checkbox" value="4" />
			<input id="pin" name="pin" type="checkbox" value="5" />
			<input id="pin" name="pin" type="checkbox" value="6" />
			<input id="pin" name="pin" type="checkbox" value="7" />
			<input id="pin" name="pin" type="checkbox" value="8" />
			<input id="pin" name="pin" type="checkbox" value="17" />
			<input id="pin" name="pin" type="checkbox" value="" />
			<input id="pin" name="pin" type="checkbox" value="18" />
			<input id="pin" name="pin" type="checkbox" value="19" />
			</p>
		<! end of get digital input>
		<! ########################>
		
		<! beginning of setDigitalOutputs	
		<! including this lable just for tidyness prior to the pins makes it easier to distinguish functions>
		<p><label class="description">setDigitalOutputs </label><br />
		<input type="hidden" name="r" value="setDigitalOutputs" for="r"> <! request, you generate this for every function EVERY time you post the form>
		<! for each pin you want to output to create this: >
		<input type="hidden" name="outputs[2]" value="1">
		<input type="checkbox" name="outputs[2]" value="0">
<! just for readability>

		<! end>
		<input type="hidden" name="outputs[2]" value="1">
		<input type="checkbox" name="outputs[2]" value="0">

		<input type="hidden" name="outputs[3]" value="1">
		<input type="checkbox" name="outputs[3]" value="0">
		
		<input type="hidden" name="outputs[4]" value="1">
		<input type="checkbox" name="outputs[4]" value="0">

		<input type="hidden" name="outputs[5]" value="1">
		<input type="checkbox" name="outputs[5]" value="0">
		
		<input type="hidden" name="outputs[6]" value="1">
		<input type="checkbox" name="outputs[6]" value="0">		

		<input type="hidden" name="outputs[17]" value="1">
		<input type="checkbox" name="outputs[17]" value="0">
		
		<input type="hidden" name="outputs[18]" value="1">
		<input type="checkbox" name="outputs[18]" value="0">

		<input type="hidden" name="outputs[19]" value="1">
		<input type="checkbox" name="outputs[19]" value="0">
		</p>
		<! end of get setDigitalOutputs>
		<! ########################>		
		<input type="hidden" name="offset" value="0">
		<input id="submit" class="button_text" type="submit" />
	</form>	
	</div>
	</body>
</html>
