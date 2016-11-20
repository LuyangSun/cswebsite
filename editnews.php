<!Doctype html>
<html lang = 'en'>
<head>
<title>
cswebsite
</title>
<meta charset = 'utf-8'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel='stylesheet' href='styles.css'>

<script src='java.js' type='text/javascript'></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<main>
	
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
				?><div class = 'content col-l-10 col-m-5'><?php	
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
