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



<!-- Tabs --> 
<ul id="myTab" class="nav nav-tabs">
   <li class="active"><a href="#classes" data-toggle="tab">Classes/Workshops</a></li>
   <li><a href="#concept" data-toggle="tab">Concepts</a></li>
   <li><a href="#competition" data-toggle="tab">Competitions</a></li>
   <li><a href="#performance" data-toggle="tab">Performances</a></li>
   <li><a href="#funk" data-toggle="tab">FunkyVids!</a></li>
</ul>

<div id="myTabContent" class="tab-content">
   <div class="tab-pane fade in active" id="classes">
      <?php getPlaylist("PL51EEC7215F43A252");?>
   </div>
   <div class="tab-pane fade" id="concept">
      <?php getPlaylist("PL9E7A8900E4A8EF91");?>
   </div>
   <div class="tab-pane fade" id="competition">
      <?php getPlaylist("PL-ocsp356UQCmd5YZmZ6K6zojooRVu1er");?>
   </div>
   <div class="tab-pane fade" id="performance">
      <?php getPlaylist("PL0C1C1975029815DE")?>
   </div>
    <div class="tab-pane fade" id="funk">
      <?php getPlaylist("PL65875C4F26AAC7A0")?>
   </div>
</div>

<p class="lead"> Want to see more? Check out our <a href="https://www.youtube.com/user/ICUFuNkoLoGy">YouTube</a> channel! <a>
<p>



<!--Pull in bottom bar and closing tags -->
<?PHP include(ABSLPATH.'/bottom.html') ?>
