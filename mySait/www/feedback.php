
<html>
<head>
	<?php
	$title ="Обратная связь";
	 require_once "blocks/head.php"?>
</head>
<body>

	<?php require_once "blocks/header.php"?>

	<div id="wrapper">
		<div id="leftCol">
		<br><input type="text" placeholder="Имя" id="name" name="name"<br />
		<br><input type="text" placeholder="Email" id="email" name="email "<br />
		<br><input type="text" placeholder="Тема " id="subject" name="subject"<br />
		<br><textarea name="masage" id="masage"></textarea><br/>
		<br><input type="button" name="done" id="done" value="Отправить">
			</div>
		<?php require_once "blocks/rightCol.php"?>
	
		</div>

	<?php require_once "blocks/footer.php"?>
	</body>
</html>