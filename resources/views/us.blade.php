<!DOCTYPE html>
<html lang="en" id="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>us</title>
</head>
<body>
	<div>
		<h1> US </h1>
<?php
foreach($tabs as $c){
	?> <li> <?php echo $c->nome . ' panolini - ' . $c->panolini . ' dentiera - ' . $c->dentiera . ' dieta - ' . $c->dieta . ' cintura - '  .  $c->cintura . ' malatia - ' . $c->malatia . ' parlare - ' . $c->parlare . ' altro - ' . $c->altro; ?> </li> <?php
} ?>
	</div>
</body>
</html>