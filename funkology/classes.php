<?php
	define('ABSLPATH', dirname(__FILE__));
	include(ABSLPATH.'/session.php')
?>
<!-- Specific Title -->
<title>Classes</title>

<!--Specific meta data -->

<!--Specific styles-->
<style type="text/css">
</style>

<!--Specific js -->
<script>
	$(document).ready(function() {
		$("li:contains('Classes')").addClass("active");
	});
</script>

</head>

<!-- Load navi (menu) bar -->
<?PHP include(ABSLPATH.'/top.php') ?>
<!-- Page Content goes here -->
<div class="hero-unit">
  <h1>Classes</h1>
  <p class="lead">Take class with us and get your weekly fix of dancing!</p>
</div>
<div class="row">
	<div class="span6">
   	<h2>About FuNkoLoGy Classes</h2>
    <p>We offer all levels and styles of hip-hop choreography taught by our talented choreographers from the crew. Whether you are a seasoned dancer or a complete beginner, you are more than welcome to join in. Classes are offered on a drop-in basis and each week we teach something new so you can join at any time. Everyone is welcome here and we love having new people come to take classes with us.</p>
    <h3>Time and Place</h3>
    <p>Most of our classes take place either in Union Dining Hall (UDH), Activity Space 2 or Metric, which are all in the Union building, Beit Quad. 
    (<a href="https://www.imperialcollegeunion.org/about-us/union-map">Union map</a>)</p>
    <p>Peep at our timetable below to see where and when our classes happen!</p>
    
    <h3>Dress code</h3>
    <p>No such thing as a fashion faux pas in our classes, wear anything comfortable</p>
	</div>
  <div class="span6">
		<iframe width="570" height="321" src="https://www.youtube.com/embed/o8WD0BHuFyU" frameborder="0" allowfullscreen></iframe>
  </div>
</div>
<div class="row">
 	<div class="span12">
      <!-- Modofy sources -->  
      <iframe src="https://www.google.com/calendar/embed?showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;
      src=ICUFuNkoLoGy%40hotmail.co.uk&amp;color=%2329527A&amp;src=0qc4pjrpin8urkihbqeclr2v5g%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Europe%2FLondon" 
      width="100%" height="600" scrolling="no"></iframe>
      <!-- <iframe allowtransparency="true" src="restylegc-1.1.2/restylegc.php?src=ICUFuNkoLoGy%40hotmail.co.uk" width="100%" height="600" frameborder="0" scrolling="no"></iframe> -->
  </div>
</div>
<!--Pull in bottom bar and closing tags -->
<?PHP include(ABSLPATH.'/bottom.html') ?>