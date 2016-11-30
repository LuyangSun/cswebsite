<!Doctype html>
<html lang = 'en'>
<head>
<title>
cswebsite
</title>
<meta charset = 'utf-8'>
<link rel='stylesheet' href='website/styles.css'>
<script src='website/java.js' type='text/javascript'></script>
</head>
<body>
	<main>
		<div id = "maintitle">
			Winona State Computer Science Admin
		</div>
		<div id="top">
			<ul class="topnav" id="myTopnav">
				<li><a class="active" href="editnews.php">Edit News Articles</a></li>
				<li><a href="addnews.html">Add News Articles</a></li>
				</li>
			</ul>
		</div>
		
		<header id = 'newsheader' class = 'col-m-10 col-l-10'>
			Edit news articles
		</header>
			<h3>
				Thank you, your changes will be made!<br>
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
			
			$querystring2 = "delete from newsposts WHERE id =".$ID.";";
			
			//echo $querystring;
			
			if(isset($_POST["delete"]))
			{
				$db = new PDO("mysql:dbname=cswebsite;host=localhost", "root");
				$rows = $db->query($querystring2);
			}
			else
			{
				$db = new PDO("mysql:dbname=cswebsite;host=localhost", "root");
				$rows = $db->query($querystring);
			}
			?>
			
		</div>
	</main>
	<footer>
	</footer>
</body>
