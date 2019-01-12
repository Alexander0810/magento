define(['uiComponent', 'Alexander_Cart/js/tooltipster.bundle', "jquery", 'ko'], 
	function(component, tooltip, $, ko){
	return component.extend({
//		myvar : 'SeeSeeSee',
//		userId : 
		userId : ko.observable('loading...'),
		initialize : function(){
			this._super();
			this.userId('Testing "tooltipster"...');


			// $.ajax({
			// 	url: 'rest/V1/alexander_cart',
			// 	method: 'POST',
			// 	contentType: 'application/json',
//			// 	data: JSON.stringify({"productId" : self.product_id}),
			// 	data: JSON.stringify({"productId" : 'self.product_id'}),
			// 	success: function(response) {
			// 		response = JSON.parse(response);
			// 		self.timeLeft = response.timeLeft;
			// 	},
			// 	error: function() {
			// 		
			// 	}
			// })



		},
		isVisible : function(){
			$('#tooltip').tooltipster({
				animation: 'slide',
				delay : 200
			});
			return true;
		}
	})	
}) 


