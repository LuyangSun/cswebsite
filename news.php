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
		<header id = 'newsheader' class = 'col-m-12 col-l-12'>
			New page title
		</header>
		
		<div id = "sidebar" class = 'col-m-2 col-l-2'>
			<nav>
				<ul id = "navlist">
				  <li>
					<a href='index.html'>Home</a></li>
				  <li>
					<a href='news.php' class = 'active'>News</a></li>
				  <li>
					<a href='index.html'>Alumni</a></li>
				  <li>
					<a href='index.html'>Not sure yet</a></li>
				</ul>
			</nav>

			<div id = "images">
				<ul id = "imagelist">
					<li>IMAGES</li>
					<li>IMAGES</li>
					<li>IMAGES</li>
					<li>IMAGES</li>
				</ul>
			</div>
		
		</div>
		
		
		<div id = "newsposts" class = "mobile col-m-10 col-l-10">
		
			<?php 
			$currentDate = date("Y/m/d");
			$querystring = "SELECT * FROM `NewsPosts` where DateStart <= '".$currentDate."' and DateExpired >= '".$currentDate."' order by DateExpired desc;";
			
			$db = new PDO("mysql:dbname=cswebsite; host=localhost", "root");
			$rows = $db->query($querystring);
			//echo $currentDate;
			//echo $querystring;
			
			foreach ($rows as $row) 
			{
				if(strlen($row["Body"]) > 50){
				?><div class = 'content col-l-11 col-m-5'><?php	
				}else{
				?><div class = 'content col-l-5 col-m-5'><?php
				}?>
					<h2><?= $row["Title"]?></h2>
					<P>
						<?= $row["Body"]?>
					</p>
					<span class = 'small'><?= $row["Author"]?></span>
				</div>
			<?php
			}?>
		
		</div>
		
		
		
	</main>
	<footer>
		
	</footer>

</body>
