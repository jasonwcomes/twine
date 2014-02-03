// GOOD'OL METHODS INSTEAD OF BORING FUNCTIONS :D
var controls = {
	playVideo : function(el){
		$('#featuredBox').removeClass('logo');
		$('#featuredBox').addClass('video');
		$(window).stop().scrollTo( 0 , 500, {margin:false}, { axis:'y' } );
		$('#video iframe').addClass('active');
		$(el).text("Close Video");
	},
	stopVideo : function(el, iframeCode) {
		$('#video').html(iframeCode);
		$('#featuredBox').removeClass('video');
		$('#featuredBox').addClass('logo');
		$(el).text("Watch the Video");
		$('#video iframe').removeClass('active');
	},
	submitEmail : function(email) {

		if( this.validateEmail(email) ) {
			$.ajax({
				type: "POST",
				url: "mailchimp.php",
				data: { email: email }
			}).done(function( msg ) {
				$('form').html('<p class="submit">Congrats! Welcome to Twines Mailing List!</p>');
			});
		} else {
			$('form input[type="email"]').val('');
			$('form input[type="email"]').attr('placeholder', 'Incorect Email Address');
		}

	},
	validateEmail : function(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

};



$(function(){

	// DECLARE & DEFINE VARIABLES
	var iframeHTML = $('#video').html();

	// INITIATE STELLAR PARALLAX
	$(window).stellar();

	// TRIGGER ANIMATION BASED ON SCREEN POSITION TO ELEMENT
	$('.whiteBlack').waypoint(function(direction) {
		$('#growUp').addClass('active');
		$('#growRight').addClass('active');
	}, { offset: '45%' });

	// VIDEO CLICK EVENTS TIED TO METHODS
	$('#videoWatch').on('click', function(ev){

		ev.preventDefault();
		var that = $(this);

		if($('#featuredBox').hasClass('logo')) {
			controls.playVideo(that);
		} else if($('#featuredBox').hasClass('video')) {
			controls.stopVideo(that, iframeHTML);
		}
	});

	// FORM SUBMIT
	$('.inputSubmit').on('click', function(ev){
		ev.preventDefault();
		var that = $(this).siblings('input').val();
		controls.submitEmail(that);
	});

});