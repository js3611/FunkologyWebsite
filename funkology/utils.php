<!-- General util methods -->

<?php
date_default_timezone_set('Europe/London');

function getCurrentAcademicYear($shortForm=True) {
	$month = (int) date("m");
	$year = (int) date("Y");
	$nextYear = 0;

	if ($month < 8) {
		$nextYear = $year;
		$year -= 1;
	} else {
		$nextYear = $year + 1;
	}

	if($shortForm) {
		$year %= 100;
		$nextYear %= 100;
	}
	echo "$year" . "/" .  "$nextYear";
}
?>

<!-- Youtube data API helpers -->

<?php

function getFunkyVideos($feedURL) {

   error_reporting(E_ALL);   
   $sxml = simplexml_load_file($feedURL);
   $i=0;
   foreach ($sxml->entry as $entry) {
      $media = $entry->children('media', true);
      $id = getId($entry->id);

      printFormattedVideoFeed($media->group->title,$media->group->description,$id);

    }
}?>

<?php

function printFormattedVideoFeed($title, $description, $id)
{
  	echo "  <div class=\"row\">
  			<div class=\"span12\">
	    		  <h3>" . $title . "</h3>	
			</div>
	  	</div>
  		<div class=\"row\">
		 <div class=\"span6\">" . getVideoUrl($id) . "</div>

		</div>";
}

//return Iframe
function getVideoUrl($videoId) 
{
	return "<p><iframe width=\"576\" height=\"324\" src=\"". "https://www.youtube.com/embed/" . $videoId ."\" frameborder=\"0\" allowfullscreen></iframe></p>";
}

function getId($url) {
     $arr = explode("/",$url);
     return end($arr);
}

?>

<!-- Calendar API -->

<!-- Request weekly events  -->

<?php

function getFunkyWeeklyEvents() 
{
   error_reporting(E_ALL);   
   $today = new DateTime();
   $week = clone $today;
//   $today->modify( '-1 year' );
   $rfc3339date = $today->format(DateTime::RFC3339);
   $rfc3339date = str_replace("+","-",$rfc3339date);
   $week->modify( '+7 day' );
   $rfc3339week = $week->format(DateTime::RFC3339);
   $rfc3339week = str_replace("+","-",$rfc3339week);
   $feedURL = "https://www.google.com/calendar/feeds/0qc4pjrpin8urkihbqeclr2v5g%40group.calendar.google.com/public/basic?start-min=".$rfc3339date."&start-max=".$rfc3339week;
   $sxml = simplexml_load_file($feedURL);   
   $ctr = 0;

   $ret = "";

   foreach ($sxml->entry as $entry) {
      $ret .= "<p><font color=\"black\">".$entry->title."</font></p>";
      $ret .= "<p><font color=\"black\">".$entry->summary."</font></p>";
      $ctr = $ctr + 1;
    }

   if ($ctr == 0) {
     $ret .= "<p><font color=\"black\">No Events this week</font></p>";
   }

   return $ret;
}

?>
