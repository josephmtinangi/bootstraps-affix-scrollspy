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
	<style>
		.affix {
		  top: 20px;
		  width: 213px;
		}

		@media (min-width: 1200px) {
		  .affix {
		    width: 263px;
		  }         
		}	
		.affix-bottom {
		  position: absolute;
		  width: 213px;
		}

		@media (min-width: 1200px) {
		  .affix-bottom {
		    width: 263px;
		  }
		}	
		footer {
			text-align: center;
			padding-top: 30px;
			padding-bottom: 30px;
		}		
	</style>
</head>
<body>
	
	<div class="jumbotron">
		<div class="container">
			<h1>Hello, world!</h1>
			<p>Contents ...</p>
			<p>
				<a class="btn btn-primary btn-lg">Learn more</a>
			</p>
		</div>
	</div>

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

			<h3>Intro</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio voluptatum dignissimos voluptates, vel architecto ea quis ut quaerat, aperiam temporibus fugiat excepturi qui dolore possimus laudantium illum at soluta consequatur, necessitatibus vitae non. Quas dignissimos totam libero natus itaque labore, consequatur omnis reprehenderit nobis recusandae fugit, dolores consequuntur adipisci, officiis!
			</p>
			<h3>Fundamentals</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto recusandae iure optio odio, quas aperiam aut officia explicabo. Molestiae ipsa, explicabo voluptates obcaecati rem, atque ut non, est minima aperiam et laborum dolor veritatis cumque quae similique debitis, repellendus harum sunt unde soluta recusandae perferendis? Excepturi quasi quia magni, mollitia.
			</p>
			<h3>Main</h3>
			<p>
				Silent faded sign shrine skyscraper systema smart-tube pen modem beef noodles futurity. Corporation nano-woman kanji Shibuya singularity shrine plastic assassin cardboard carbon crypto-construct sunglasses stimulate garage. Warehouse receding marketing realism table assassin singularity bicycle post-meta-physical towards carbon A.I. refrigerator dolphin ablative. 
			</p>
			<p>
				Man math-network human ablative decay drone boy apophenia spook assault convenience store dolphin. Geodesic film long-chain hydrocarbons engine knife modem semiotics savant alcohol industrial grade uplink denim pre-network tiger-team. Hotdog receding beef noodles nano-paranoid network computer cartel Legba urban shrine geodesic woman courier digital realism. 
			</p>
			<h3>Conclusion</h3>
			<p>
				Motion range-rover rebar construct otaku katana footage DIY silent 8-bit numinous wristwatch artisanal BASE jump. Jeans media systema papier-mache youtube industrial grade tattoo smart-sign narrative uplink grenade chrome. Receding military-grade tattoo saturation point car knife rifle computer semiotics wonton soup concrete render-farm corrupted skyscraper denim. 
			</p>

		</section>
		<section id="web-development">
			<section id="ruby">
				<h2>Ruby</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, nisi! Quae reprehenderit ratione aut incidunt porro, aliquam iusto saepe distinctio nam. Sed aliquid repudiandae nesciunt, iste maxime assumenda atque pariatur.
				</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi rerum sint asperiores natus, aliquid qui reprehenderit, praesentium consequatur ducimus perspiciatis iure quam odio voluptas facilis provident doloribus. Nesciunt mollitia, minima.
			</p>

			<h3>Intro</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio voluptatum dignissimos voluptates, vel architecto ea quis ut quaerat, aperiam temporibus fugiat excepturi qui dolore possimus laudantium illum at soluta consequatur, necessitatibus vitae non. Quas dignissimos totam libero natus itaque labore, consequatur omnis reprehenderit nobis recusandae fugit, dolores consequuntur adipisci, officiis!
			</p>
			<h3>Fundamentals</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto recusandae iure optio odio, quas aperiam aut officia explicabo. Molestiae ipsa, explicabo voluptates obcaecati rem, atque ut non, est minima aperiam et laborum dolor veritatis cumque quae similique debitis, repellendus harum sunt unde soluta recusandae perferendis? Excepturi quasi quia magni, mollitia.
			</p>
			<h3>Main</h3>
			<p>
				Silent faded sign shrine skyscraper systema smart-tube pen modem beef noodles futurity. Corporation nano-woman kanji Shibuya singularity shrine plastic assassin cardboard carbon crypto-construct sunglasses stimulate garage. Warehouse receding marketing realism table assassin singularity bicycle post-meta-physical towards carbon A.I. refrigerator dolphin ablative. 
			</p>
			<p>
				Man math-network human ablative decay drone boy apophenia spook assault convenience store dolphin. Geodesic film long-chain hydrocarbons engine knife modem semiotics savant alcohol industrial grade uplink denim pre-network tiger-team. Hotdog receding beef noodles nano-paranoid network computer cartel Legba urban shrine geodesic woman courier digital realism. 
			</p>
			<h3>Conclusion</h3>
			<p>
				Motion range-rover rebar construct otaku katana footage DIY silent 8-bit numinous wristwatch artisanal BASE jump. Jeans media systema papier-mache youtube industrial grade tattoo smart-sign narrative uplink grenade chrome. Receding military-grade tattoo saturation point car knife rifle computer semiotics wonton soup concrete render-farm corrupted skyscraper denim. 
			</p>				
			</section>
			<section id="python">
				<h2>Python</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, placeat, tempore quam asperiores id maiores? Iure, ipsum quas accusamus quos iste sed illum nam molestiae beatae ducimus officiis, est porro?
				</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi rerum sint asperiores natus, aliquid qui reprehenderit, praesentium consequatur ducimus perspiciatis iure quam odio voluptas facilis provident doloribus. Nesciunt mollitia, minima.
			</p>

			<h3>Intro</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio voluptatum dignissimos voluptates, vel architecto ea quis ut quaerat, aperiam temporibus fugiat excepturi qui dolore possimus laudantium illum at soluta consequatur, necessitatibus vitae non. Quas dignissimos totam libero natus itaque labore, consequatur omnis reprehenderit nobis recusandae fugit, dolores consequuntur adipisci, officiis!
			</p>
			<h3>Fundamentals</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto recusandae iure optio odio, quas aperiam aut officia explicabo. Molestiae ipsa, explicabo voluptates obcaecati rem, atque ut non, est minima aperiam et laborum dolor veritatis cumque quae similique debitis, repellendus harum sunt unde soluta recusandae perferendis? Excepturi quasi quia magni, mollitia.
			</p>
			<h3>Main</h3>
			<p>
				Silent faded sign shrine skyscraper systema smart-tube pen modem beef noodles futurity. Corporation nano-woman kanji Shibuya singularity shrine plastic assassin cardboard carbon crypto-construct sunglasses stimulate garage. Warehouse receding marketing realism table assassin singularity bicycle post-meta-physical towards carbon A.I. refrigerator dolphin ablative. 
			</p>
			<p>
				Man math-network human ablative decay drone boy apophenia spook assault convenience store dolphin. Geodesic film long-chain hydrocarbons engine knife modem semiotics savant alcohol industrial grade uplink denim pre-network tiger-team. Hotdog receding beef noodles nano-paranoid network computer cartel Legba urban shrine geodesic woman courier digital realism. 
			</p>
			<h3>Conclusion</h3>
			<p>
				Motion range-rover rebar construct otaku katana footage DIY silent 8-bit numinous wristwatch artisanal BASE jump. Jeans media systema papier-mache youtube industrial grade tattoo smart-sign narrative uplink grenade chrome. Receding military-grade tattoo saturation point car knife rifle computer semiotics wonton soup concrete render-farm corrupted skyscraper denim. 
			</p>				
			</section>

		</section>
	</div>

	<footer>
		Copyright &copy; 2017 All Rights Reserved | Designed with <i class="fa fa-heart"></i> by <a href="https://about.me/josephmtinangi" title="Joseph Mtinangi">JM</a>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		$('#nav').affix({
		    offset: {
		        top: $('#nav').offset().top
		    }
		});	
		$('#nav').affix({
		  offset: {
		    bottom: ($('footer').outerHeight(true) + 
		            $('.application').outerHeight(true)) + 
		            40
		  }
		});			
	</script>
</body>
</html>