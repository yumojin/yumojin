<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Spectral+SC|Mrs+Saint+Delafield" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<title>William Shakespeare</title>
</head>
<body>
	<nav>
    <ul>
      <li class="item"><a href="index.php">Welcome</a></li>
      <li class="item"><a href="early_life.php">Early Life</a></li>
      <li class="item"><a href="career.php">Career</a></li>
      <li class="item"><a href="work.php">Works and Impact</a></li>
    </ul>
    </nav>
	<div class="subscribe">
	<h1><a href="index.php">William Shakespeare</a></h1>
	<form method="post" action="contacts-processor.php">
		<input class="textinput" type="email" name="email" id="email" placeholder="Enter Email to Receive Newsletter" size="35" required>
		<input type="submit" value="&#10168" class="button">
	</form>
	</div>

<div class="container">
	<h2>About This Website</h2>
	<p>This website is created by Mojin Yu on Dec. 20th, 2017 as her final project for CSC 174 Advanced Front-End Web Development.</p>
	<h3>Sources</h3>
	<ul>
		<li><a href="https://en.wikipedia.org/wiki/William_Shakespeare">Shakespeare Wikipedia</a></li>
		<li><a href="http://shakespeare.mit.edu/">The Complete Works of William Shakespeare</a></li>
		<li><a href="https://codepad.co/snippet/FQaiCzbb">Simple CSS Underline Menu</a></li>
		<li>Menu-highlighter (provided by Professor Kostin)</li>
		<li>Google Fonts (Cormorant Garamond, Spectral SC, Mrs Saint Delafield)</li>
	</ul>
	<h3>Design Choices</h3>
	<p>This is a simple webpage about Shakespeare.I feel like the clean front page layout really helped to put the focus on Shakespeare himself. Mostly I used black, white and grey on this website, but I incorporated a little bit of light teal because it gives this sophisticated vibe. 
	<p>The three fonts I chose match the general feel of a older time period, and they complement each other (one flashy, one firm and one comfortable to read).</p>
	<p>The front page is a Z-pattern, which starts with page title, goes from subscription form and finally to the navigation bar which leads users to the main sections of this webpage. The F-pattern is most evident in the "Works and Impact" page, which is long and scrolly with all important info aligned to the left.</p>
	<p>I used SMACSS as a guideline to build my css architechture. I didn't use a framework because this is a simple website and none of the frameworks really matches the look I'm going for. 
	<p>The only javascript used is the menu-highlighter. </p>
	<p>p.s. the big line of text in the welcome page is real text (not an image). </p>

</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/menu-highlighter.js"></script>

</body>
</html>