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
	
		<div id = "newsposts" class = "mobile col-m-12 col-l-12">
		
			<?php 
			$currentDate = date("Y/m/d");
			$querystring = "SELECT * FROM `NewsPosts` order by DateExpired desc;";
			
			$db = new PDO("mysql:dbname=cswebsite; host=localhost", "root");
			$rows = $db->query($querystring);
			//echo $currentDate;
			//echo $querystring;
			
			foreach ($rows as $row) 
			{
				
				?>
				<div class = 'content col-l-5 col-m-5'>
					
					
				<form action = "submitchange.php" method = "POST">
			
					<p>
						Author of news post: <input type = "text" name = "author" value = "<?=$row["Author"]?>">
					<p>
						Title of news post <br>
						<input type = "text" name = "title" value = "<?=$row["Title"]?>">
					</p>
					<p>
						<textarea id = 'textbox' name="body" rows="20" cols="70"><?=$row["Body"]?></textarea>
					</p>
					<p>
					Show from: 
					<input type = "text" class = "datepicker" name = "start" value = "<?=$row["DateStart"]?>">
					To: 
					<input type = "text" class = "datepicker" name = "expire" value = "<?=$row["DateExpired"]?>"><br>
					</p>
					
					<input type="hidden" name="id" value="<?=$row["id"]?>">
					
					<input type="submit" value="Submit">
				
					</form>
				
				</div>
			<?php
			}?>
		
		</div>
		
	</main>
	<footer>
		
	</footer>

</body>
