define(['uiComponent', 'jquery', 'ko'], function(ui, $, ko){

	var reservationStatus = {};
	var buttonStatus = {};

	return ui.extend({
		getEnable: ko.observable(true), 
		myTimer: ko.observable(45),

		showButton: function(value) {
			if(value === true || value === false){
				buttonStatus[self.product_id](value)
			}   else {
					return buttonStatus[self.product_id];
				}; 
		},

		showTimer: function(value) {
			if(value === true || value === false){
				reservationStatus[self.product_id](value)
			}   else {
					return reservationStatus[self.product_id];
				}; 
		},

		reserve: function() {
			let self = this;
			self.getEnable(false);
			$.ajax({
				url: 'rest/V1/alexander_reserve',
				method: 'POST',
				contentType: 'application/json',
				data: JSON.stringify({"productId" : self.product_id}),
				success: function(response) {
					response = JSON.parse(response);
					self.timeLeft = response.timeLeft;
	    			self.showTimer(true);
					self.showButton(false);
					self.getEnable(false);
					self.initTime();
				},
				error: function() {
					self.getEnable(true);
				}
			})
		},
		initialize: function() {					
			this._super();
			self = this;
			buttonStatus[self.product_id] = ko.observable();			
			reservationStatus[self.product_id] = ko.observable();
		    $.ajax({
				url: 'rest/V1/alexander_reserve_time',
				method: 'POST',
				contentType: 'application/json',
				data: JSON.stringify({"productId" : this.product_id}),
				success: function(response) {
					response = JSON.parse(response);
						this.timeLeft = response.timeLeft ;
						if(this.timeLeft > 0) {
							self.showTimer(true);
							self.showButton(false);
							self.initTime();
						} else {

							self.showTimer(false);
							self.showButton(true);
							self.showButton();
						    
						  };
				},
				error: function() {
					//
				}
			})
			// debugger;
			console.log('in_initialize!', this);
		},

		initTime: function() {
			let self = this;
            var t = self.timeLeft;
 	        var timeCheck = setInterval(function() {
                t--;
                if (t >= 0) {
                	self.myTimer(t)
                } else {
                	clearInterval(timeCheck);
                	self.showTimer(false);
                	self.showButton(true);
                   	self.getEnable(true);
                  }
            }, 1000);
        }
	})
})
