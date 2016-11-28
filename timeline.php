<!Doctype html>
<html lang = 'en'>
<head>
<title>Alumni</title>
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
		<b></b><span>current project</span>
		<p>The name of the project is the <strong>"Sensor Equipped Parking Lot"</strong>, the purpose 
		of this project is help people use an Iphone application that is integrated with a 
		sensor - equipped parking lot to find where have the empty place that they can park 
		their Vechile. For more infroamtion please visit this page <a href="http://cs.winona.edu/CSConference/SeniorSem/Prapti_poster_big.jpg">computer science project</a>. 
		</p>
		</li>
		<li>
		<b></b><span>additional project</span>
		<p>The name of this projecy is <strong>"Why But a CPS Clicker When You Can Use Your Laptop - a classroom testing solution for laptop universities"</strong>
		the purpose of this project is to create a testing system designed for use with laptops to benfit 
		universities with a laptop program. The system prevents students form being able to cheat while taking exams. And the system allow instructor to create test and students to be able 
		to submit answer using their laptops.For more infroamtion please visit this page <a href="http://cs.winona.edu/CSConference/SeniorSem/Schaub_poster_big.jpg">computer science project</a>.
		</p>
		</li>
		<li>
		<b></b><span>In 2010 </span>
		<p>The name of this project is <strong>"Data Entry On An Iphone Or A Full Keybord"</strong>
		The purpose of this project following a few step and some ingenuity. a mcuh richer user experience could be seen
		and create a real time connection between a workstation and iphone, and allow user to use the full keyborad or eliminate the sync process. 
		For more infroamtion please visit this page <a href="http://cs.winona.edu/styles/Images/ericbusch.jpg">computer science project</a>.
		</p>
		</li>
    </ul>
</div>
		</div>
		
		<div id = "images" class = "mobile col-m-2 col-l-2">
			<ul id = "imagelist">
				<li>
				<div class="tooltip">animation
				<span class="tooltiptext">text</span>
				</div>
				</li>
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
