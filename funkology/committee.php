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
        	<h3>President - Chris Wood</h3>
            <div class="row">
            	<div class="span2">
                	<p><img src="images/committee2013/chris_cropped.jpg" width="175" height="232" /></p>
                </div>
                <div class="span2">
	                <p><strong>Alias</strong>: The President</p>
    	            <p><strong>Email</strong>: ckw08@ic.ac.uk</p>
                </div>
            </div>
        </div>
        <div class="span4">
        	<h3>Vice President - Kim Chin</h3>
            <div class="row">
            	<div class="span2">
               		<p><img src="images/committee2013/kim_cropped.jpg" width="175" height="232" /></p>
                </div>
             	<div class="span2">
                	<p><strong>Alias</strong>: Kimchi </p>
    	            <p><strong>Email</strong>: kmc310@ic.ac.uk</p>
                </div>
            </div>
        </div>
        <div class="span4">
        	<h3>Secretary - Dawn Graham</h3>
            <div class="row">
            	<div class="span2">
                	<p><img src="images/committee2013/dawn_cropped.jpg" width="175" height="232" /></p>
                </div>
                <div class="span2">
                	<p><strong>Alias</strong>: Secretary</p>
    	            <p><strong>Email</strong>: sdg111@ic.ac.uk </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="span4">
        	<h3>Treasurer - Nayeem Murshed</h3>
            <div class="row">
            	<div class="span2">
                	<p><img src="images/committee2013/nayeem_cropped.jpg" width="175" height="232" /></p>
                </div>
                <div class="span2">
                	<p><strong>Alias</strong>: The Hustler</p>
    	            <p><strong>Email</strong>: nm2411@ic.ac.uk </p>
                </div>
            </div>
        </div>
        <div class="span4">
        	<h3>Publicity Manager - Jo Schlemper</h3>
            <div class="row">
            	<div class="span2">
                	<p><img src="images/committee2013/jo_cropped.jpg" width="175" height="232" /></p>
                </div>
                <div class="span2">
                	<p><strong>Alias</strong>: YOO SCHLEMPA</p>
    	            <p><strong>Email</strong>: js3611@ic.ac.uk</p>
                </div>
            </div>
        </div>
        <div class="span4">
        	<h3>Social Secretary - Nirmz Arulampalam</h3>
            <div class="row">
            	<div class="span2">
                	<p><img src="images/committee2013/nirmz_cropped.jpg" width="175" height="232" /></p>
                </div>
                <div class="span2">
                	<p><strong>Alias</strong>: Broski </p>
    	            <p><strong>Email</strong>: na3012@ic.ac.uk</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="span4">
        	<h3>Breaking Rep - Edward Hill</h3>
            <div class="row">
            	<div class="span2">
                	<p><img src="images/committee2013/ed_cropped.jpg" width="175" height="232" /></p>
                </div>
                <div class="span2">
                	<p><strong>Alias</strong>: Black Frankenstein/Derkhead</p>
    	            <p><strong>Email</strong>: eah09@ic.ac.uk</p>
                </div>
            </div>
        </div>
        <div class="span4">
        	<h3>Gen Committee - SuviChack Thongborisoot</h3>
            <div class="row">
            	<div class="span2">
                	<p><img src="images/committee2013/chak_cropped.jpg" width="175" height="232" /></p>
                </div>
                <div class="span2">
                	<p><strong>Alias</strong>: Da General</p>
    	            <p><strong>Email</strong>: st2511@ic.ac.uk</p>
                </div>
            </div>
        </div>
        <div class="span4">
        	<h3>Gen Committee - Yi Ting Low</h3>
            <div class="row">
            	<div class="span2">
                	<p><img src="images/committee2013/yiting_cropped.jpg" width="175" height="232" /></p>
                </div>
                <div class="span2">
                	<p><strong>Alias</strong>: Da General 2</p>
    	            <p><strong>Email</strong>: ytl211@ic.ac.uk</p>
                </div>
            </div>
        </div>
    </div>
<!--Pull in bottom bar and closing tags -->
<?PHP include(ABSLPATH.'/bottom.html') ?>