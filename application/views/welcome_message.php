<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap Affix and Scrollspy</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	
	<div class="col-md-3 scrollspy">
		<ul id="nav" class="nav hidden-xs hidden-sm" data-spy="affix">
			<li>
				<a href="#web-design">Web Design</a>
			</li>
			<li>
				<a href="#web-development">Web Development</a>
				<ul class="nav">
					<li>
						<a href="#ruby">
							<span class="fa fa-angle-double-right"></span> Ruby
						</a>
					</li>
					<li>
						<a href="#python">
							<span class="fa fa-angle-double-right"></span> Python
						</a>
					</li>

				</ul><!-- end of sub navigation -->
			</li>

		</ul><!-- end of main navigation -->
	</div>
	<div class="col-md-9">
		<section id="web-design">
			<h2>Web Design</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi rerum sint asperiores natus, aliquid qui reprehenderit, praesentium consequatur ducimus perspiciatis iure quam odio voluptas facilis provident doloribus. Nesciunt mollitia, minima.
			</p>
		</section>
		<section id="web-development">
			<section id="ruby">
				<h2>Ruby</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, nisi! Quae reprehenderit ratione aut incidunt porro, aliquam iusto saepe distinctio nam. Sed aliquid repudiandae nesciunt, iste maxime assumenda atque pariatur.
				</p>
			</section>
			<section id="python">
				<h2>Python</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, placeat, tempore quam asperiores id maiores? Iure, ipsum quas accusamus quos iste sed illum nam molestiae beatae ducimus officiis, est porro?
				</p>
			</section>

		</section>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		$('#nav').affix({
		    offset: {
		        top: $('#nav').offset().top
		    }
		});		
	</script>
</body>
</html>