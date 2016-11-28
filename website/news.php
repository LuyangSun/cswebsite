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
		<div id="top">
			<ul class="topnav" id="myTopnav">
				<li><a href="index.html">Home</a></li>
				<li><a class="active" href="news.php">News</a></li>
				<li><a href="timeline.html">Alumni</a></li>
				</li>
			</ul>
		</div>
		
		<header id = 'newsheader' class = 'col-s-10 col-m-10 col-l-10'>
			News Page
		</header>

		<div id = "wrapper">
			
			<div id = "images" class = "col-m-1 col-m-1 col-l-1">
				Images of the cs department are going to go here. 
			</div>
			
			
			<div id = "newsposts" class = "col-m-11 col-m-11 col-l-11">
			
				<?php 
				$currentDate = date("Y/m/d");
				$querystring = "SELECT * FROM `NewsPosts` where DateStart <= '".$currentDate."' and DateExpired >= '".$currentDate."' order by DateExpired desc;";
				
				$db = new PDO("mysql:dbname=cswebsite; host=localhost", "root");
				$rows = $db->query($querystring);
				//echo $currentDate;
				//echo $querystring;
				
				foreach ($rows as $row) 
				{
					if(strlen($row["Body"]) > 250){
					?><div class = 'content col-s-10 col-l-10 col-m-10'><?php	
					}else{
					?><div class = 'content col-s-10 col-l-5 col-m-5'><?php
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
		
		</div>
		
		
	</main>
	<footer>
		
	</footer>

</body>
