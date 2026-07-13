<?php
    $name = "Dark Matter";
    $hasBeenRead = true;

    $message = ($hasBeenRead ? "You have read " : "You have not read ") . '"' . $name . '."';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Document</title>
    	<style>
    	    body {
    			display: grid;
    			place-items: center;
    			height: 100vh;
    			margin: 0;
    			font-family: sans-serif;
    		}
    	</style>
    </head>
    <body>
        <h1>
            <?= $message; ?>
        </h1>
    </body>
</html>
