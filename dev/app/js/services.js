'use strict';

/* Services */
angular.module('myApp.services', []).
service('model', function () {
	//simple object mapping
	var model = {};

	return {
		/** model.get('data') or model.get(['data_1','data_2',...,'data_n']) **/
		get : function(key) {
			if (typeof(key) === 'string') {
				return model && model[key];
			} else if (key instanceof Array) {
				return _.reduce(key, function (obj, k) { obj[k] = model[k]; return obj; }, {}); 
			}
		},

		set : function(key, value) {
			//Passing object mapping
			if (arguments.length ==1) {
 				model = _.extend({}, model, key);
			} else if (arguments.length == 2) {
				model[key] = value;				
			}
		}
	};
}).
service('modalService', function () {
	var show = true;

	return {
		toggle : function () {
			show = !show;
		},

		show : function () {
			show = true;
		},

		hide : function () {
			show = false; 
		},

		isShow : function () {
			return show;
		}
	};
}).
service('sessionCookie', function () {
	var $cookie = $.cookie;

	return {
		get : function(key) {
			return $cookie && $cookie(key);
		},

		set : function(key, value, options) {
			if (arguments.length == 2) {
				//set a cookie that expires after a day
				options = { expires: 1, path: '/' };
			}
			$cookie(key,value,options);
		},

		remove : function(key, options) {
			if (arguments.length == 1) {
				options = {path:'/'};		
			}
			$.removeCookie(key, options);
		}
	};
});