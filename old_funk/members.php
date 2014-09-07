<?php
    include 'utils.php';
?>
<?php
	define('ABSLPATH', dirname(__FILE__));
	include(ABSLPATH.'/session.php')
?>
<!-- Specific Title -->
<title>Membership</title>

<!--Specific meta data -->

<!--Specific styles-->
<style type="text/css">
</style>

<!--Specific js -->
<script>
	$(document).ready(function() {
		$("li:contains('Membership')").addClass("active");
	});
</script>

</head>

<?PHP include(ABSLPATH.'/top.php') ?>
<!-- Page Content goes here -->
<div class="hero-unit">
	<h1>Membership</h1>
	<p class="lead">Join us as a member!</p>
</div>
<div class="row">
  <div class="span12">
    <p class="lead">FuNkoLoGy is part of the Union of Imperial College London. An annual fee of 5 pounds is charged for anyone who wants to be part of FuNkoLoGy. </p>
    <h2>Benefits of being a member: </h2>
    <h3> - Reduced price for all classes</h3>
    <p>Rates for <?php getCurrentAcademicYear(true); ?> for all classes <strong>*Classes are free for the month of October!*</strong>:</p>
    <table class="table table-bordered">
      <tr>
        <th></th>
        <th>Member</th>
        <th>Non-Member</th>
      </tr>
      <tr>
        <th>Price</th>
        <td>&pound;2</td>
        <td>&pound;2.5</td>
      </tr>
    </table>
    
    <h3> - Subsidized Social Events</h3>
    <p class="lead">Click <a href="https://www.imperialcollegeunion.org/shop/club-society-project-products/dance---funkology-products/" target="_blank">here</a> to purchase membership now!</p>
  </div>
</div>
<!--Pull in bottom bar and closing tags -->
<?PHP include(ABSLPATH.'/bottom.html') ?>
