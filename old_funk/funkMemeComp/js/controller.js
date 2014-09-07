var FunkMemes = angular.module("FunkMemes",[]);

FunkMemes.controller("PageController", ["$scope",function($scope){
    var OVERVIEW = "overview";
    var RESOURCES = "resources";
    var ACCTOPIC = "accesstopictures";
    var HOWTOUPLOAD = "howtoupload";
    var EXAMPLES = "examples";

    $scope.activeTab = 'overview';
    
    $scope.switchTabTo = function(string) {
	$scope.activeTab = string;
    }
    
    $scope.pages = [
	{ section: OVERVIEW,
	  source: "textDocs/informationDocs/overview.html" },
	{ section: RESOURCES, 
	  source: "textDocs/informationDocs/resources.html" },
	{ section: ACCTOPIC, 
	  source: "textDocs/informationDocs/accesstopictures.html" },
	{ section: HOWTOUPLOAD, 
	  source: "textDocs/informationDocs/howtoupload.html" },
	{ section: EXAMPLES,
	  source: "textDocs/informationDocs/examplePics.html" }
    ];


    $scope.displaySection = function(section) {
	switch(section) {
	case OVERVIEW:
	    return "Overview"; break;
	case RESOURCES:
	    return "Resources"; break;
	case ACCTOPIC:
	    return "Access to Pictures"; break;
	case HOWTOUPLOAD:
	    return "How to Upload"; break;
	case EXAMPLES:
	    return "Example Memes"; break;
	default:
	    return "Error occurred, section not found";
	}
    }
    
    $scope.examples = [
	{ example:"Captioning Images", 
	  source: "pics/rach_fuckeverything.jpg" },
	{ example:"Photoshopping Image", 
	  source: "pics/lion_karoline_rach.jpg" },
	{ example:"MS paint", 
	  source: "pics/karoline_high.jpg" },
	{ example:"Images to Comic strips", 
	  source: "pics/samson_terence_comic.jpg" },
	{ example:"Regular Memes", 
	  source: "pics/rach_sodoge.jpg" }
    ];
}]);