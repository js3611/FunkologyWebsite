'use strict';

/* Directives */


angular.module('myApp.directives', []).
  directive('appVersion', ['version', function(version) {
    return function(scope, elm, attrs) {
      elm.text(version);
    };
  }]).
  directive("twitterTimeline", 
	  	function() {
	  		return { 
		     restrict: 'E',
		     template: '<a class="twitter-timeline" href="https://twitter.com/ICUFuNkoLoGy" data-widget-id="249576707709878272">Tweets by @ICUFuNkoLoGy</a>',
		     link: function(scope, element, attrs) {
				    function run(){
				        (!function(d,s,id){
				        	var js,fjs=d.getElementsByTagName(s)[0],
				        	p=/^http:/.test(d.location)?'http':'https';
				        	if(!d.getElementById(id)){
				        		js=d.createElement(s);
				        		js.id=id;
				        		js.src=p+"://platform.twitter.com/widgets.js";
				        		fjs.parentNode.insertBefore(js,fjs);
				        	}
				        }(document,"script","twitter-wjs"));
				    };
				    run();
				    if (typeof(twttr) != 'undefined') {
					    twttr.widgets.load();				    	
				    }

			    }
		   	};
		}).
  directive('myimg', function () {        
        return {
            restrict: 'E',
            scope: { src:'=' },
            replace:true,
            template : '<img src="{{newSrc}}" width="100%" height="100%"/>',
            link: function (scope) {
                scope.$watch('src', function (newVal) {
                   if (newVal) {
                       scope.newSrc = newVal;
                   }
                });
            }
        };
    }).
  directive('twitterWidget', 
	  	function () {
	  		return {
	  			template : 'Name: {{name}}'
	  		};
	  	}).
  directive('youtubePlaylist', function($sce) {
	  return {
	    restrict: 'E',
	    scope: { code:'=' },
	    replace: true,
	    template: '<div style="width:70%;margin-top:10px"><iframe src="{{url}}" width="854" height="510" frameborder="0" allowfullscreen></iframe></div>',
	    link: function (scope) {
	        scope.$watch('code', function (newVal) {
	           if (newVal) {
	               scope.url = $sce.trustAsResourceUrl("https://www.youtube.com/embed/videoseries?list=" + newVal);
	           }
	        });
	    }
	  };
	}).
  directive("modalShow", function () {
    return {
        restrict: "A",
        scope: {
            modalVisible: "="
        },
        link: function (scope, element, attrs) {

            //Hide or show the modal
            scope.showModal = function (visible) {
                if (visible)
                {
                    element.modal("show");
                }
                else
                {
                    element.modal("hide");
                }
            }

            //Check to see if the modal-visible attribute exists
            if (!attrs.modalVisible)
            {

                //The attribute isn't defined, show the modal by default
                scope.showModal(true);

            }
            else
            {

                //Watch for changes to the modal-visible attribute
                scope.$watch("modalVisible", function (newValue, oldValue) {
                    scope.showModal(newValue);
                });

                //Update the visible value when the dialog is closed through UI actions (Ok, cancel, etc.)
                element.bind("hide.bs.modal", function () {
                    scope.modalVisible = false;
                    if (!scope.$$phase && !scope.$root.$$phase)
                        scope.$apply();
                });

            }

        }
    };

});
