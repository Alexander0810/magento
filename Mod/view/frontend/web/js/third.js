define(['jquery'], function($){
	return function(config, element) {
		$(element).text(config.key);
	//	return config
	}
});


// A = function() {
// 	var a = '123';
// 	return {
// 		method: function() {return '4'}
// 	}
// }

// var D = new A();
// D.method();