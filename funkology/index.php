<?php
	define('ABSLPATH', dirname(__FILE__));
	include(ABSLPATH.'/session.php')
?>

<!-- For pop up -->
<?php include(ABSLPATH.'/popup.php'); ?>

<!-- Specific Title -->
<title>FuNkoLoGy - Imperial College Union</title>

<!--Specific meta data -->

<!--Specific styles-->
<style type="text/css">
</style>

<!--Specific js -->
<script>
	$(document).ready(function() {
		$("li:contains('Home')").addClass("active");
	});
</script>
</head>
<?PHP include(ABSLPATH.'/top.php') ?>

<!-- Page Content goes here -->
<div class="hero-unit">
	<div class="pagination-centered">
		<p><img src="images/logos/Design.png" width="295" height="216"/></p>
		<p>We are a pioneering dance team based at Imperial College London, studying and specialising in hiphop and streetdance forms.</p>
	</div>   
</div>
 
<div class="row">
	<div class="span4">
		<h2>Announcements</h2>
		<p>Interested to know what we're up to? Click <a href="events.php">here</a></p>
        <p>Check out new Class <a href="classes.php">times!</a></p>
        <h3>Twitter Feed</h3>
        <p><a class="twitter-timeline" href="https://twitter.com/ICUFuNkoLoGy" data-widget-id="249576707709878272">Tweets by @ICUFuNkoLoGy</a></p>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <div class="span8">
		<h2>Who we are</h2>
			<p>FuNkoLoGy began in 2003 as a simple outlet for a group of students and alumni of Imperial College to train and develop their passion for urban dance. What followed was a group of dancers who share a common goal to promote this discipline, share their expertise and push the boundaries of Hip-Hop Dance Performance across the UK university community.</p>
			<h4>Come take class with us!</h4>
			<p><iframe width="640" height="360" src="https://www.youtube.com/embed/K39rpgGImx8" frameborder="0" allowfullscreen></iframe></p>
    </div>
</div>

<!--Pull in bottom bar and closing tags -->
<?PHP include(ABSLPATH.'/bottom.html') ?>
