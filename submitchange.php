<!Doctype html>
<html lang = 'en'>
<head>
<title>
cswebsite
</title>
<meta charset = 'utf-8'>
<link rel='stylesheet' href='styles.css'>
<script src='java.js' type='text/javascript'></script>
</head>
<body>
	<main>
		<div>
			<header>
				<h1>
					cswebsite
				</h1>
			</header>
		</div>
	
		<nav>
		</nav>
			<h3>
				Thank you, <?=$_POST["author"];?>, your news post will be added!<br>
				Click <a href="editnews.php">here</a> to make more changes!
			</h3>
			<?php
			$time = strtotime($_POST["start"]);
			$start = date('Y-m-d',$time);
			
			$time = strtotime($_POST["expire"]);
			$expire = date('Y-m-d',$time);
			$author = $_POST['author'];
			$title = $_POST["title"];
			$body = $_POST["body"];
			
			$ID = $_POST["id"];
			
			$currentdate = date("Y-m-d");
			
			$author = addslashes($author);
			$body = addslashes($body);
			$title = addslashes($title);
			
			$querystring = "UPDATE newsposts SET Title='".$title."',Body='".$body."',
			DateStart='".$start."',DateExpired='".$expire."',Author='".$author."' WHERE id =".$ID.";";
			
			
			echo $querystring;
			
			$db = new PDO("mysql:dbname=cswebsite;host=localhost", "root");
			$rows = $db->query($querystring);
			
			?>
			
		</div>
	</main>
	<footer>
	</footer>
</body>
