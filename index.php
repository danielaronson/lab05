<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page | Odd Student Out | Assignment 5</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/navigation.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Roboto|Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="sss/sss.css">

</head>

<body class="grid-container">
	<div class="head">
		<header>
			<a href="index.php">
				<h1>Team Seoul - Odd Student Out</h1>
			</a>
		</header>
	</div>
	<div class="nav-bar">
		<?php include "inc/nav.inc"; ?>
	</div>
	<!-- This will be our JS slide show, we need to choose appropriately sized images -->

	<div class="hero-img">
		<div class = "slider">
		<img src="images/aronsonswim.jpg" />
		<img src="images/feirouzswim.jpg" />
		<img src="images/dennisswim.jpg" />
	</div>
	</div>
	<div class="columns">
		<main class="flex-container">
			<div>
				<h2> Who is the Odd Student Out? </h2>
				<p>Team Seoul are very close friends! However, one of us is different from the others. Continue reading to learn who the odd student out is!</p>
			</div>
			<div>
				<h2> How Was the Odd Student Out Determined?</h2>
				<p>The Odd Student Out was determined based on predetermined criteria such as: Major, Year, Geographic Location, Hobbies, Style of Swimming, Jobs and Favorite Classes.</p>
			</div>
		</main>
	</div>
	<div class="big-idea">
		<ol class="boxes">
			<li><a href="eric+danny.php">Click Here to Find Out Who the Odd Student Out Is!</a></li>
		</ol>
	</div>
	<div class="empty">CSC 174 - Spring 2019</div>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="js/menu-highlighter.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="sss/sss.js"></script>
	<script>$('.slider').sss();</script>
</body>
</html>