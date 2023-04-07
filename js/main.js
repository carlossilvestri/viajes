$(document).ready(function() {	

	/*----- countTo -----*/
	if ($("#count-me-in-wrapper").length){
		var waypoints = $('#count-me-in-wrapper').waypoint({
		  handler: function() {
				$('.count-me-in').countTo();
		  },
		  offset: '90%'
		});
	}
	/*----- countTo End -----*/
	
	/*----- Sticky Header -----*/	
    $(window).on("scroll", function(){
        if ($(this).scrollTop() > 50) {
            $('header, .top-scroll').addClass('fixed');	
        } else {
            $('header, .top-scroll').removeClass('fixed');
        }
    });
	$('.mobile-nav-trigger').on('click', function(e) {
		$('.nav-wrapper').toggleClass("nav-visible");
		e.preventDefault();
    });
    /*----- Sticky Header End -----*/
	$('ul.submenu').hide();
	$('ul.nav > li, ul.submenu > li').hover(function () {
	if ($('> ul.submenu',this).length > 0) {
		$('> ul.submenu',this).stop().slideDown(200);
	}
	},function () {
		if ($('> ul.submenu',this).length > 0) {
			$('> ul.submenu',this).stop().slideUp(200);
		}
	});
	$(document).on("click",".call-cta-button",function() {
		runQuestionModal();
	});
	function runQuestionModal() {
		$.magnificPopup.open({
			items: {
				src: '#question-modal-wrapper',
			},
			type: 'inline',
			preloader: false,
			showCloseBtn: false,
			mainClass: 'mfp-fade',
			modal: false,
			callbacks: {
				open: function() {
					$(document).on("click","#close-modal",function() {
						$.magnificPopup.close();
					});
					$(document).on("click",".answer-button",function() {
						$('.question-modal-step-1-wrapper').fadeOut(function() {
							$('.question-modal-step-2-wrapper').fadeIn();							
						});
					});
				}
			}	
		});
	}
	$(document).on("click",".contact-modal-trigger",function() {
		runContactModal();
	});
	function runContactModal() {
		$.magnificPopup.open({
			items: {
				src: '#contact-modal-wrapper',
			},
			type: 'inline',
			preloader: false,
			showCloseBtn: false,
			mainClass: 'mfp-fade',
			modal: false,
			callbacks: {
				open: function() {
					$(document).on("click","#close-modal",function() {
						$.magnificPopup.close();
					});
					var validator = $("#contact-modal-form").validate({
						errorElement: "div",
						errorClass: "input-error",
						rules: {
							contactEmail: {
								required: true,
								minlength: 4
							},
							contactPhone: {
								required: true,
								minlength: 6
							},
							contactName: {
								required: true,
								minlength: 2
							}
						}, 
						submitHandler: function(form) {
							$('#mail-status').html('<div class="msg-success"><span class="material-icons-two-tone list-icon">check_circle</span>Message was sent</div>');
						}
					});
				}
			}	
		});
	}
	if ($("#testimonials-wrapper").length){
		$('.testimonials').slick({
		  dots: true,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
		});
	}
	var validator = $("#contact-form").validate({
		errorElement: "div",
		errorClass: "input-error",
		rules: {
			contactEmail: {
				required: true,
				minlength: 4
			},
			contactPhone: {
				required: true,
				minlength: 6
			},
			contactName: {
				required: true,
				minlength: 2
			}
		}, 
		submitHandler: function(form) {
			$('#mail-status').html('<div class="msg-success msg-success-w"><span class="material-icons-two-tone list-icon">check_circle</span>Message was sent</div>');
		}
	});
	var validator = $("#contact-form-2").validate({
		errorElement: "div",
		errorClass: "input-error",
		rules: {
			contactEmail: {
				required: true,
				minlength: 4
			},
			contactPhone: {
				required: true,
				minlength: 6
			},
			contactName: {
				required: true,
				minlength: 2
			}
		}, 
		submitHandler: function(form) {
			$('#contact-form-2 #mail-status').html('<div class="msg-success msg-success-w"><span class="material-icons-two-tone list-icon">check_circle</span>Message was sent</div>');
		}
	});
});