<!-- Include additional php libraries-->
<?php include 'utils.php'; ?>

<?php
	define('ABSLPATH', dirname(__FILE__));
	include(ABSLPATH.'/session.php')
?>
<!-- Page Title -->
<title>Class Videos</title>

<!--Specific styles-->
<style type="text/css">
</style>

<!--Specific js -->
<script>
	$(document).ready(function() {
		$("li:contains('Classvideos')").addClass("active");
	});
</script>

</head>
<?PHP include(ABSLPATH.'/top.php') ?>
<!-- Page Content goes here -->
 <div class="hero-unit">
	<h1>Videos</h1>
	<p class="lead">Check our latest videos for our classes, competitions and concepts.</p>
</div>

<!-- Refer to utils.php -->
<p>Solving issues now... Sorry :(</p>
<p>You can go to our channel on YouTube from the Social Media Tab.</p>
<!-- <?php 
	// uri to retrieve 10 recent video feed from user ICUFunkology
	$addr = "http://gdata.youtube.com/feeds/api/users/ICUFunkology/uploads?max-results=10";
	getAndPrintFormattedVideoFeed($addr); 
?> -->
<?PHP echo($_GET['page']);?>
<!--Pull in bottom bar and closing tags -->
<?PHP include(ABSLPATH.'/bottom.html') ?>