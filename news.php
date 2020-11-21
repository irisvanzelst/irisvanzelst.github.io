<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Iris - News</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
	<div id="background">
		<div id="page">
			
			<?php
				include('header.inc');
			?>
			
			<div id="contents">
				
				<?php
					include('sidebar.inc');
				?>
				
				<div id="events">
					<h2>News</h2>
					<p>&nbsp;</p>
					
					<!-- start news stories -->
					
					<ul>
						<li>
							<img src="images/news/launch.png" alt="Img" height="200" width="180">
							<div>		
								<h4>Launch website 2.0!<br> <span>November 20, 2020</span></h4>
								<p>
									Welcome to my new website! Website 2.0. About time that I updated the old one from ETH, because a lot has happened. I got my PhD. I moved to the UK. A couple of papers were published! Did I forget anything? Oh yes, I've been working from home for almost 9 months now, because we're in a global pandemic. Nice. 
								</p>
							</div>
						</li>
						
						
					</ul>
					
					<!-- end news stories -->
					
					
					<!--<a href="news3.php">Older news</a>-->
					<!--<div align="center">
						<a href="news2.php">Newer news</a>
						</div>-->
						
					
				</div>
			 
				
			</div>
			
			<?php
				include('footer.inc');
			?>
			
		</div>
	</div>
</body>
</html>