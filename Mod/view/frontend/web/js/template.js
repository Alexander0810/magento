define(['jquery','uiComponent', 'ko'], function($, ui, ko){
	return ui.extend({
		uups : function(){
			let self = this;
			let id = 1;
			$.ajax({
				// url : '/rest/V1/directory/currency',
				url : '/rest/V1/pinkfloyd/'+id,
				method: 'GET',
				// data : {id: id},
				success: function(responce){
					// console.log(responce['base_currency_code'])
					// self.test(responce['base_currency_code'])
					self.test(responce)
				},
				error: function(){alert ('error')}
			}) 

			// this.test('qwer')
			// console.log('AAAAAAAAAAAAAAAAAAAAAAAA')
		},
		test: ko.observable('aaaaaa')			
	})
})

