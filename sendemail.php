<html>

<head>
  <title>Snakes Wearing Hats</title>
  <meta name="description" content="website description" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
	<div id="main">
		<div id="header">
			<div id="logo">
				<div id="logo_text">
					<h1><a href="index.html">Snake Hats</a></h1>
					<h2>Hats. For Snakes. </h2>
				</div>
			</div>
			<div id="menubar">
				<ul id="menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="help.html">How to help</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
		<div id="site_content">
			<div id="content">
				<?php
					
					/*Replaces $word with appropriate number of asterisks*/
					function replace_word($word) {
						$length = strlen($word);
						$ans = "";
						for ($i = 1; $i <= $length; $i++) {
							$ans = $ans."*";
						}
						return $ans;
					}
					
					$name = $_POST["name"];
					$email = $_POST["email"];
					$message = $_POST["message"];
					$contains_curse = FALSE;
					
					$curse_words = array("fuck", "shit", "cunt", "cock", "nigger", "bitch", "piss", "cock", "pussy", "asshole", "fag");
					
					foreach ($curse_words as $curse) {
						if (stripos($message, $curse) != FALSE) {
							$contains_curse = TRUE;
						}
						$message = str_ireplace($curse, replace_word($curse), $message);
					}
					
					mail("feldmanr15@gmail.com", "From ".$name." at ".$email, $message);
					if ($contains_curse == TRUE) {
						print("Email sent you filthy person.");
					}
					else {
						print("Email sent!");
					}
				?>

			</div>
			<div id="sidebar">
				<!-- Self-created -->				
				<img src="images/snek7.jpg" style="width:250px;height:228px;" alt="Snek7">
			</div>
		</div>
		<div id="footer">
			Ryan Feldman Project for CS 2300
		</div>
	</div>
</body>
</html>
