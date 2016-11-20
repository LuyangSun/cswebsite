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
		<li><a class="active" href="">Home</a></li>
		<li><a href="news.php">News</a></li>
		<li><a href="timeline.php">Alumni</a></li>
		<li><a href="">Not sure yet</a></li>
		<li class="icon">
		<a onclick="myFunction()">&darr;</a>
		</li>
		</ul>
	</div>
		
		<header id = 'newsheader' class = 'col-m-10 col-l-10'>
			New page title
		</header>
		
		
		<div id = "newsposts" class = "mobile col-m-10 col-l-10">
		<div class="times">
		<ul>
        <li>
		<b></b><span>2012</span><p>content</p>
		</li>
        <li>
		<b></b><span>2013</span><p>content</p>
		</li>
        <li>
		<b></b><span>2014</span><p>content</p>
		</li>
        <li>
		<b></b><span>2015</span><p>content</p>
		</li>
        <li>
		<b></b><span>2016</span><p>content</p>
		</li>
    </ul>
</div>
		</div>
		
		<div id = "images" class = "mobile col-m-2 col-l-2">
			<ul id = "imagelist">
				<li>IMAGES</li>
				<li>IMAGES</li>
				<li>IMAGES</li>
				<li>IMAGES</li>
			</ul>
		</div>
		
	</main>
	
	
	<footer>
		
	</footer>

</body>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
