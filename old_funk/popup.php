<?php
	define('ABSLPATH', dirname(__FILE__));
	include(ABSLPATH.'/utils.php')
?>

<?php $text = getFunkyWeeklyEvents() ?>


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title" id="myModalLabel"><font color="black">Funk This Week!</font></h3>
      </div>
      <div class="modal-body">
        <p><h6><font color="black">This week we are up to the following events!</font></h6></p>
	<?php echo $text ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>  
  </div>
</div>

<!-- Cookie mechanism for the weekly pop up-->
<script>
  //check cookie
  var visited = $.cookie("visited")

  if (visited == null) {
   $('#newsModal').modal({
     keyboard: true,
     show: true});

   // set weekly cookie
   $.cookie('visited', 'yes', { expires: 1, path: '/' });
  }
</script>


