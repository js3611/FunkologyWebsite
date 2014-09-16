'use strict';


// Declare app level module which depends on filters, and services
angular.module('myApp', [
  // 'ngRoute',
  'ui.router',
  'myApp.filters',
  'myApp.services',
  'myApp.directives',
  'myApp.controllers'
]).
config(function($stateProvider, $urlRouterProvider) {
  //
  // For any unmatched url, redirect to home
  $urlRouterProvider.otherwise("/");
  //
  // Now set up the states
  $stateProvider
    .state('home', {
      url: "/",
      templateUrl: "partials/home.html",
      controller: 'FunkologyHomeController'
    })
    .state('classes', {
      url: "/classes",
      templateUrl: "partials/classes.html"
    })
    .state('events', {
      url: "/events",
      templateUrl: "partials/events.html",
      controller: 'FunkologyEventController'
    })
    .state('committee',{
      url:"/committee",
      templateUrl:"partials/committee.html",
      controller: 'FunkologyCommitteeController'
    })
    .state('founders',{
      url:"/founders",
      templateUrl:"partials/founders.html",
      controller: 'FunkologyFounderController'
    })
    .state('members',{
      url:"/members",
      templateUrl:"partials/members.html",
      controller: 'FunkologyController'
    })
    .state('videos',{
      url:"/videos",
      templateUrl:"partials/videos.html",
      controller: 'FunkologyVideoController'
    })
    .state('crew',{
      url:"/crew",
      templateUrl:"partials/crew.html",
      controller: 'FunkologyCrewController'
    })
    .state('breaking',{
      url:"/breaking",
      templateUrl:"partials/breaking.html",
      controller: 'FunkologyBreakingController'
    })


});



// config(['$routeProvider', function($routeProvider) {	
//   $routeProvider.when('/home', 		   {templateUrl: 'partials/home.html',	 		  controller: 'FunkologyHomeController'});
//   $routeProvider.when('/classes', 	 {templateUrl: 'partials/classes.html', 		controller: 'FunkologyController'});
//   $routeProvider.when('/events', 	   {templateUrl: 'partials/events.html', 		  controller: 'FunkologyEventController'});
//   $routeProvider.when('/committee',  {templateUrl: 'partials/committee.html',	  controller: 'FunkologyCommitteeController'});
//   $routeProvider.when('/founders', 	 {templateUrl: 'partials/founders.html', 	  controller: 'FunkologyFounderController'});
//   $routeProvider.when('/members', 	 {templateUrl: 'partials/members.html', 		controller: 'FunkologyController'});
//   $routeProvider.when('/videos',     {templateUrl: 'partials/classvideos.html', controller: 'FunkologyVideoController'});
//   $routeProvider.when('/crew', 		   {templateUrl: 'partials/crew.html', 		    controller: 'FunkologyCrewController'});
//   //$routeProvider.otherwise({redirectTo: '/home'});
// }]);
