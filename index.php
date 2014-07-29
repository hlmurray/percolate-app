<!-- Hannah Murray ; Percolate -->
<!DOCTYPE html>
<html>
	<head>
		<title>Vimeo Social Content Creation Case Study | Client Success Stories | Percolate </title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Percolate is your system of record for marketing">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/fonts.css">
		<link rel="stylesheet" href="http://percolate.com/cdn/font/4216a309cc48aef13a5f413d0b0d25f7/all.css">
		<link rel="shortcut icon" href="http://percolate.com/favicon.ico">

	</head>
	<body>
		<header class="masthead">
			<section class="wrapper clearfix">
				<div class="logo left clearfix">
					<img src="img/logo.png" alt="percolate logo">
				</div>
				<nav class="nav-left left">
					<ul>
						<a href="#"><li>Platform</li></a>
						<a href="#"><li>Clients</li></a>
						<a href="#"><li>Company</li></a>
						<a href="#"><li>Insights</li></a>
						<a href="#"><li>Blog</li></a>
					</ul>
				</nav>
				<nav class="nav-right right">
					<ul>
						<a href="#"><li>We're Hiring!</li></a>
						<a href="#"><li>Login</li></a>
						<a href="#"><li>Request a Demo</li></a>
					</ul>
				</nav>
				<div class="navbar-wrapper" onclick="toggleNav()">
						<span class="navbar"></span>
						<span class="navbar"></span>
						<span class="navbar"></span>
				</div>
			</section>
		</header>
		<main>
			<section class="hero clearfix">
				<div class="hero-overlay">
					<div class="hero-container">
						<img src="img/vimeo-white.svg" alt="Venmo white logo" width="100">
						<h1>Creating videos. Sharing videos.</h1>
					</div>
				</div>
			</section>
			<section class="container clearfix">
				<p>Lebowski ipsum hello, Pilar? My name is Walter Sobchak, we spoke on the phone, this is my associate Jeffrey Lebowski. Dolor sit amet, consectetur adipiscing elit praesent ac magna justo pellentesque ac. Please see him, Jeffrey. He's a good man. And thorough.</p>
				<hr>
				<div class="results">
					<header>
						<h1>Results</h1>
					</header>
					<p>“This is quite a pad you got here, man. Completely unspoiled. Eget risus nulla nullam vel nisi enim, vel auctor ante morbi id urna.”</p>
					<img src="img/gray.png" alt="Vimeo Placeholder">
					<span class="caption">John Smith — Marketing Manager, Vimeo</span>
				</div>
				<div class="results--callout">
					<article class="voice left">
						<header>
							<h2>Voice</h2>
						</header>
						<p>I didn't blame anyone for the loss of my legs, some chinaman in Korea took them from me but I went out and achieved anyway. Dolor sit amet, consectetur adipiscing elit praesent ac magna justo. Yes sir. It is our most modestly priced receptacle.</p>
						<img src="img/voice.jpg" alt="Vimeo Voice">
					</article>
					<article class="look right">
						<header>
							<h2>Look</h2>
						</header>
						<p>This is quite a pad you got here, man. Completely unspoiled. Eget risus nulla nullam vel nisi enim, vel auctor ante morbi id urna. Shit, I know that guy. He's a nihilist. Vel felis lacinia placerat vestibulum turpis nulla, viverra nec. Yeah man, it really tied the room together.</p>
						<img src="img/look.jpg" alt="Vimeo Look">
					</article>
				</div>
				<div class="results--callout">
					<article class="effective left">
						<header>
							<h2>Effective</h2>
						</header>
						<p>I know my rights. Ac lorem aliquam placerat posuere neque, at dignissim magna.</p>
						<img src="img/effective.png" alt="Vimeo Effective">
					</article>
					<article class="efficient right">
						<header>
							<h2>Efficient</h2>
						</header>
						<p>Over the line! Felis lacinia placerat vestibulum turpis nulla, viverra nec volutpat. We want that money, Lebowski. Ac, ornare id lectus cras pharetra faucibus tristique. Sir, this is a mortuary, not a rental house. Nullam non accumsan justo.</p>
						<p>She's gotta feed the monkey, I mean —hasn't that ever occurred to you, Sir? Nulla facilisi integer interdum elementum nulla, nec eleifend nisl euismod. I'm not Mr. Lebowski; you're Mr. Lebowski. I'm the Dude.</p>
					</article>
				</div>
			</section>
			<section class="hero--footer clearfix">
				<div class="hero--footer-overlay">
					<div class="hero--footer-container">
						<p>"I don't know about you, but I take comfort in that. It's good knowin' he's out there, the Dude, takin' her easy for all us sinners."</p>
						<img src="img/gray.png" alt="Vimeo Placeholder">
						<span class="caption">John Smith — Marketing Manager, Vimeo</span>
					</div>
				</div>
			</section>
			<section class="container clearfix">
				<div class="demo">
					<header>
						<h3>See Percolate in Action</h3>
					</header>
					<p>Learn how Percolate’s Content Marketing platform can help your brand.</p>
					<?php include 'php/send.php'; ?>
					<div ng-app="myApp">
						<form method="post" action="" ng-controller="FormCtrl as form">
							<input type="text"  name="firstname" ng-model="form.firstname" placeholder="First Name" required>
							<input type="text"  name="lastname" ng-model="form.lastname" placeholder="Last Name" required>
							<input type="email" name="email" ng-model="form.emailaddress" placeholder="Company Email" required>
							<input type="submit" ng-click="Submit" value="Request a Demo">
						</form>
					</div>
				</div>
				<div class="tools">
					<article class="plan left">
						<img src="img/plan.jpg" alt="plan">
						<h2>
							<a href="#"><i class="icon-32 icon-calendar"></i> Plan</a>
						</h2>
						<p>Track events and plan content at the intersection of brand voice and cultural relevance.</p>
					</article>
					<article class="source left">
						<img src="img/source.jpg" alt="source">
						<h2>
							<a href="#"><i class="icon-32 icon-media"></i> Source</a>
						</h2>
						<p>Employees never miss a social moment with the Percolate Photographer app.</p>
					</article>
					<article class="create right">
						<img src="img/create.jpg" alt="create">
						<h2>
							<a href="#"><i class="icon-32 icon-tools"></i> Create</a>
						</h2>
						<p>Create branded images at the speed of social with the Percolate Image editor.</p>
					</article>
				</div>
			</section>
			<footer>
				<section class="container">
					<img src="img/logo-white.png" alt="Percolate white logo" class="left">
					<nav class="right">
						<ul>
							<li><a href="#"><icon class="icon-24 icon-solid-drip"></icon></a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Privacy</a></li>
							<li class="copy">&copy; Percolate Industries, Inc.</li>
							<li><a href="#">Made in NYC, SF, ATX, & LDN</a></li>
						</ul>
					</nav>
				</section>
			</footer>
		</main>
		<script type="text/javascript" src="js/index.js"></script>
		<script type="text/javascript" src="js/angular.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>