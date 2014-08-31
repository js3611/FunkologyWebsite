<?php
    include 'utils.php';
?>

<?php
	define('ABSLPATH', dirname(__FILE__));
	include(ABSLPATH.'/session.php')
?>
<!-- Specific Title -->
<title>Committee <?php getCurrentAcademicYear(False); ?></title>

<!--Specific meta data -->

<!--Specific styles-->
<style type="text/css">
</style>

<!--Specific js -->
<script>
	$(document).ready(function() {
		$("li:contains('Committee')").addClass("active");
	});
</script>

</head>

<?PHP include(ABSLPATH.'/top.php') ?>
<!-- Page Content goes here -->
<div class="hero-unit">
  <h1>Committee <?php getCurrentAcademicYear(True); ?></h1>
  <p class="lead">Feel free to get in touch with us if you need anything.</p>
</div>
<div class="row">
  <div class="span4">
    <h3>President - Jo Schlemper</h3>
    <div class="row">
      <div class="span2">
        <p><img src="images/committee2014_15/jo_cropped.png" width="175" height="232" /></p>
      </div>
      <div class="span2">
	<p><strong>Alias</strong>: Yo</p>
    	<p><strong>Email</strong>: js3611@ic.ac.uk</p>
      </div>
    </div>
  </div>
  <div class="span4">
    <h3>Vice President - Terence Tse</h3>
    <div class="row">
      <div class="span2">
        <p><img src="images/committee2014_15/terence_cropped.png" width="175" height="232" /></p>
      </div>
      <div class="span2">
        <p><strong>Alias</strong>: Sniffler </p>
    	<p><strong>Email</strong>: tt1611@ic.ac.uk</p>
      </div>
    </div>
  </div>
  <div class="span4">
    <h3>Secretary - Karoline Lende</h3>
    <div class="row">
      <div class="span2">
        <p><img src="images/committee2014_15/karoline_cropped.png" width="175" height="232" /></p>
      </div>
      <div class="span2">
        <p><strong>Alias</strong>: Karoline</p>
    	<p><strong>Email</strong>: kl1812@ic.ac.uk </p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="span4">
    <h3>Treasurer - Toni Wu</h3>
    <div class="row">
      <div class="span2">
        <p><img src="images/committee2014_15/toni_cropped.png" width="175" height="232" /></p>
      </div>
      <div class="span2">
        <p><strong>Alias</strong>: Toni </p>
    	<p><strong>Email</strong>: tw2312@ic.ac.uk </p>
      </div>
    </div>
  </div>
  <div class="span4">
    <h3>Publicity Manager - Samson Lee</h3>
    <div class="row">
      <div class="span2">
        <p><img src="images/committee2014_15/samson_cropped.png" width="175" height="232" /></p>
      </div>
      <div class="span2">
        <p><strong>Alias</strong>: Samsaaan</p>
    	<p><strong>Email</strong>: swl313@ic.ac.uk</p>
      </div>
    </div>
  </div>
  <div class="span4">
    <h3>Social Secretary - Chaeyoung Chang</h3>
    <div class="row">
      <div class="span2">
        <p><img src="images/committee2014_15/chae_cropped.png" width="175" height="232" /></p>
      </div>
      <div class="span2">
        <p><strong>Alias</strong>:  Chae </p>
    	<p><strong>Email</strong>: cc4710@ic.ac.uk</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="span4">
    <h3>Breaking Rep - Fred Wong</h3>
    <div class="row">
      <div class="span2">
        <p><img src="images/committee2014_15/fred_cropped.png" width="175" height="232" /></p>
      </div>
      <div class="span2">
        <p><strong>Alias</strong>: Funk Breaker</p>
    	<p><strong>Email</strong>: few13@ic.ac.uk</p>
      </div>
    </div>
  </div>
  <div class="span4">
    <h3>Gen Committee - Eirill Bachmann Mehammer</h3>
    <div class="row">
      <div class="span2">
        <p><img src="images/committee2014_15/ella_cropped.png" width="175" height="232" /></p>
      </div>
      <div class="span2">
        <p><strong>Alias</strong>: Ella</p>
    	<p><strong>Email</strong>: ebm13@ic.ac.uk</p>
      </div>
    </div>
  </div>
  <div class="span4">
    <h3>Gen Committee - Nirmz Arulampalam </h3>
    <div class="row">
      <div class="span2">
        <p><img src="images/committee2014_15/nirmz_cropped.png" width="175" height="232" /></p>
      </div>
      <div class="span2">
        <p><strong>Alias</strong>: Nirmz</p>
    	<p><strong>Email</strong>: na3012@ic.ac.uk</p>
      </div>
    </div>
  </div>
</div>
<!--Pull in bottom bar and closing tags -->
<?PHP include(ABSLPATH.'/bottom.html') ?>
