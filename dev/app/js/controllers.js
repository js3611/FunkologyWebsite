'use strict';

/* Controllers */
angular.module('myApp.controllers', [])	
  .controller('HeaderController', ['$scope','$location',
  	function($scope,$location) {
  		$scope.isActive = function (viewLocation) { 
        	return viewLocation === $location.path();
    	};
	}])
  .controller('FunkologyController', ['$scope','$timeout',
  	function($scope,$timeout) {


  	}])
  .controller('FunkologyHomeController', ['$http', '$scope', '$timeout','$sce','sessionCookie',
  	function($http, $scope,$timeout,$sce, sessionCookie) {
        var cache;

  		$scope.onModalClick = function () {
  			$scope.show = true;
			$scope.events = cache;  			
  		};
        
		//default
  		$scope.show = false;

		//Build Http request to get calendar events
  		var start = moment(),
  			end = moment().add('1','weeks');

	  	var	params = {
  				'alt':'json-in-script',
	  			'start-min':start.format('YYYY-MM-DD'),
	  			'start-max':end.format('YYYY-MM-DD')
	  		};

  		$http({
  			method : 'GET',
  			url : 'https://www.google.com/calendar/feeds/0qc4pjrpin8urkihbqeclr2v5g%40group.calendar.google.com/public/basic',
  			params : params,
  			crossDomain: true,
    		dataType: 'jsonp',
  		}).then(function (result) {

  			//hacky but its 5:00am. fuck it. google why do u do this!
  			var data = JSON.parse(result.data.substring('gdata.io.handleScriptLoaded('.length, result.data.length-2)),
  				//___ = console.log(data),
  				entries = data && data.feed && data.feed.entry;

  			if (!entries) {
  				$scope.events = null;
  				$scope.show = false;
  			} else {
  				//Super hacky mode on!!!
	  			var calendarEvents = _.map(entries, function(entry) {
	  				var content = entry.content.$t;
	  				var contents = content.replace('\n','').replace('\t','').replace('Event','')
	  										.replace('&#39;',"'").replace('BST','').split('<br />');  				
	  				content = _.filter(contents,function (v) {
	  					return _.some(_.map(['When','Description'], function (w) { return v.indexOf(w)>-1; })); 
	  				});
	  				content = (content.join('<br />')+'<br />').replace('Event Description: ','<br />');
	  				return {
	  					title : $sce.trustAsHtml(entry.title['$t'].replace('&#39;',"'")),
	  					content : $sce.trustAsHtml(content)
	  				};
	  			});

	  			cache = calendarEvents;
	  			$scope.events = calendarEvents;
				//Using jQuery Cookies
				// sessionCookie.remove('visited');
				console.log(sessionCookie.get('visited'));
				if (!sessionCookie.get('visited')) {
					$scope.show = true;
					//create global cookie expires on upcoming sunday
					var offset = moment().weekday() == 0? 1 : 7 - moment().weekday();
					sessionCookie.set('visited','true',{expires:offset,path:'/'});
				} 

			}
		});
  	}]) 
  .controller('FunkologyEventController', ['$scope', '$http','$sce',
	function($scope,$http,$sce) {
		var events = {};

		$scope.isLoaded = function() {
			return !_.isEmpty(events[$scope.activeTab] || []);
		};


	    $scope.getOther = function () {
	    	return $scope.activeTab === 'latest'? 'past' : 'latest';
	    }

	    $scope.switchTabTo = function(tab) {
	    	console.log(events);
			$scope.activeTab = tab;
			$scope.events = events[tab];
	    }

	    $scope.toggleEvents = function () {
    		var tab = $scope.activeTab === 'latest'? 'past' : 'latest';
    		$scope.activeTab = tab;
    		$scope.events = events[tab];
	    }

		//set default value
	    $scope.activeTab = 'latest';	

		$http.get('data/events/events.json').success(function(data) {
			events['latest'] = [];
			_.forEach(data, function (event, i) {
				event.htmlDesc = $sce.trustAsHtml(event.htmlDesc);
				events['latest'].push(event);
			});
			$scope.events = events['latest'];
    	});

		$http.get('data/events/past_events.json').success(function(data) {
			events['past'] = [];
			_.forEach(data, function (event, i) {
				event.htmlDesc = $sce.trustAsHtml(event.htmlDesc);
				events['past'].push(event);
			});
    	});

	}])
  .controller('FunkologyCommitteeController', ['$scope', '$http','$sce',
	function($scope,$http,$sce) {

		$scope.isLoaded = function() {
			return !_.isEmpty($scope.committee || []);
		};

		$http.get('data/committee/committee.json').success(function(data) {
			$scope.committee = data;			
    	});
	}])
  .controller('FunkologyFounderController', ['$scope', '$http','$sce',
	function($scope,$http,$sce) {
		$scope.isLoaded = function() {
			return !_.isEmpty($scope.founders || []);
		};

		$http.get('data/founders/founders.json').success(function(data) {
			$scope.founders = data;			
    	});
	}])
  .controller('FunkologyCrewController', ['$scope', '$http','$sce',
	function($scope,$http,$sce) {
		$scope.isLoaded = function() {
			return !_.isEmpty($scope.crew2013 || []);
		};
		var normalise = function (str) {
				return str.toLowerCase().replace(' ','_');
			};

		$http.get('data/crew/crew2013.json').success(function(data) {
			var config = data.config,
				crew = data.data.split(',');

			$scope.crew2013 = _.map(crew, function(name) {
				return {
					name : name,
					imageUrl : config.imagesDirectory + '/' + normalise(name) + "_cropped.jpg"
				};
			});		
    	});
	}])
  .controller('FunkologyVideoController', ['$scope', '$http','$sce',
	function($scope,$http,$sce) {
		var playlists = {
			classes : 'PL51EEC7215F43A252',
			concepts : 'PL9E7A8900E4A8EF91',
			competitions : 'PL-ocsp356UQCmd5YZmZ6K6zojooRVu1er',
			performances : 'PL0C1C1975029815DE',
			funkyvids : 'PL65875C4F26AAC7A0'
		};
	    
	    $scope.activeTab = 'classes';
	    $scope.playlist = playlists['classes'];
	    
	    $scope.switchTabTo = function(tab) {
			$scope.activeTab = tab;
			$scope.playlist = playlists[tab];
	    }

	}])

  ;

