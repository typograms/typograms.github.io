$(function() {

	  $("#tags input").on({
    	focusout : function() {
		var txt = this.value.replace(/[^a-z0-9\+\-\.\#]/ig,''); // allowed characters
		if(txt) $("<span/>", {text:txt.toLowerCase(), insertAfter:this});
		this.value = "";
		},
		keyup : function(ev) {
		// if: comma|enter (delimit more keyCodes with | pipe)
		if(/(188|13)/.test(ev.which)) $(this).focusout(); 
			}
		});
    	$('#tags').on('click', 'span', function() {
    		if(confirm("Remove "+ $(this).text() +"?")) $(this).remove(); 
    });



	 $('.selectable-table tbody input').click(function(event) {

	 		var a = $("input[type='checkbox']");
    		if(a.length == a.filter(":checked").length){
        	alert('all checked');
    	}

	 	if ($(this).is(':checked')) {
	 		$(this).parents('tr').addClass('selected');	
	 	}

	 	else {
	 		$(this).parents('tr').removeClass('selected');		
	 	}
    	
    });


	 $('.click-selectable-table tbody tr').click(function(event) {
	 	$(this).toggleClass('selected');
    	
    });


	  $('.radio-table tbody tr').click(function(event) {
	 	
	 	if ($(this).hasClass('selected')) {
	 		$(this).removeClass('selected');
	 	} else {
	 		$(this).addClass('selected')
	 		$(this).siblings('.selected').removeClass('selected');
	 	};
    	
    });

	 $('.styled-checkbox').wrap('<span class="checkbox-wrap"></span>');

	 $('.styled-checkbox').click(function(event) {
	 	if ($(this).is(':checked')) {
	 		$(this).parents('.checkbox-wrap').addClass('checked');	
	 	}

	 	else {
	 		$(this).parents('.checkbox-wrap').removeClass('checked');
	 	}
	 });

	 $('.selectable-table thead input.select-all').click(function(event) {
	 		
	 		$(this).parents('table').children('tbody').find('input').click();
    	
    });


	$(".sticky-sidebar").stick_in_parent({
    	offset_top: 1
	});
	$(".sticky-right").stick_in_parent({
    	offset_top: 50
	});

	$(".sticky-filter").stick_in_parent({
    	offset_top: 10
	});

	$('.trigger-filter').click(function(e) {
		$(this).toggleClass('active');
		$('.filter-wrap').toggleClass('active')
	});

	$('.trigger-filter-2').click(function(e) {
		$(this).toggleClass('active');
		$('.floating-filter-wrap').toggleClass('col');
		$('.floating-filter-wrap').toggleClass('active');
		$('.filter-wrap').toggleClass('active');
		$('body').toggleClass('right-is-sticky');
	});

	$('.trigger-close').click(function(e) {
		$('.trigger-filter').removeClass('active');
		$('.filter-wrap').removeClass('active')
	});

	var stickysidebar = $(".tertiary-nav");
	var stickyaction = $(".listing-header");

	var topbar = $("body.square .content-header");

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 111) {
            stickysidebar.addClass("is-sticky");
        } else {
            stickysidebar.removeClass('is-sticky')
        };

        if (scroll >= 580) {
            stickyaction.addClass("is-sticky");
        } else {
            stickyaction.removeClass('is-sticky')
        }

        if (scroll >= 111) {
            topbar.addClass("is-sticky");
        } else {
            topbar.removeClass('is-sticky')
        }

    });


  
   

});