
define(['uiComponent', 'jquery', 'ko', 'Magento_Ui/js/modal/modal'], function(ui, $, ko, modal){
				var options = {
		        type: 'popup', 
        		responsive: true, // true = on smaller screens the modal slides in from the right
		        title: 'Input Data to Callback',
		        buttons: [{ 
		            text: $.mage.__('Submit & Continue'),
		            class: '',
		            click: function () {

           				var username = document.getElementById('input_name').value;
						var userphone = document.getElementById('input_phone').value;

	            				$.ajax({
									url: 'rest/V1/alexander_grid_save',
									method: 'POST',
									contentType: 'application/json',
									data: JSON.stringify({"name" : username , "phone" : userphone }),
									success: function(response) {
										alert('Request sent');
										response = JSON.parse(response);
									},
									error: function() {
										alert('Request was not sent');
										//
									}
								})
			                    this.closeModal(); 
			                }
	          		  	},

          		  		{ 
			    	        text: $.mage.__('Cancel'),
				            class: '',
			        	    click: function () {
		                    this.closeModal(); 
		                }
          		  	}]
     			};
	return ui.extend({
    	
		reserve: function() {
		    $('#modal-content').modal('openModal');
	   	},

	   	isVisible: function() {

		    var popup = modal(options, $('#modal-content'));
  		   	return true;
	   	},

		initialize: function() {					
			this._super();
		},		
	})
})



