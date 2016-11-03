<?php
	include 'ParentClass.php';
	include 'ChildClass.php';

	$rocky = new ParentClass("Rocky", "Persian", "black", "tuna");
	$tigger = new ChildClass("Tigger", "Tabby", "orange", "chicken", "Terry");
	$kitty = new ChildClass("Kitty", "Siamese", "chocolate", "salmon", "Qunyi");
	$oldkitty = clone $kitty;

	$cats = array($rocky, $tigger, $kitty);
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Terry Tan - Assignment 3</title>
		<link href="main.css" rel="stylesheet">
		<link rel="stylesheet" href="assignment3.css">
	</head>
	<body>
		<h1>Welcome to Cat World</h1>
		<p class="narrative">
			Once upon a time there were some cats:
		</p>
		<p>
			<?php foreach ($cats as $cat): ?>
				<?= $cat; ?><br>
			<?php endforeach; ?>
		</p>
		<p class="narrative">
			Rocky fell into a bucket of bleach and became white.<br>
			<?php $rocky->setColor("white"); ?>
			Tigger discovered sashimi and it became his new favourite food.<br>
			<?php $tigger->setFood("sashimi"); ?>
			Kitty's owner passed away and she was adopted by Terry.<br>
			<?php $kitty->setOwner("Terry"); ?>
		</p>
		<p>
			<?php foreach ($cats as $cat): ?>
				<?= $cat; ?><br>
			<?php endforeach; ?>
		</p>
		<p class="narrative">
			Kitty had a traumatic experience with salmon and now prefers duck.<br>
			<?php $kitty->setFood("duck"); ?>
			Also, Terry felt that the name "Kitty" was too basic.<br>
			So, she changed Kitty's name to Tabitha.<br>
			<?php $kitty->setName("Tabitha"); ?>
		</p>
		<p>
			<?php foreach ($cats as $cat): ?>
				<?= $cat; ?><br>
			<?php endforeach; ?>
		</p>
		<p class="narrative">
			Tabitha/Kitty has changed very much compared to what she used to be:
		</p>
		<p>
			<?= $oldkitty ?>
		</p>
	</body>
</html>
