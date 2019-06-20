var delay = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();

$(function() {
    var pause = 100;

    $(window).resize(function() {
        delay(function() {
            var width = $(window).width();
            if( width >= 768 && width <= 1279 ) {
                //small laptops & tablets
                $('.shell').addClass('nav-collapsed');
            } else if( width >= 480 && width <= 767 ) {
                // code for mobile landscape
                $('.grid').masonry( 'destroy' );
                $('.shell').addClass('nav-hidden');
            } else if( width <= 479 ) {
                // code for mobile portrait
                $('.shell').addClass('nav-hidden');
                $('.grid').masonry( 'destroy' );
            } 
        }, pause );
    });

    $(window).resize();

    $('.nav-trigger').click(function() {

        if($(this).parents('.shell').hasClass('nav-collapsed') ) {
            $(this).parents('.shell').removeClass('nav-collapsed');
            setTimeout(function(){ $('.grid').masonry() }, 250);
        } else {
            $(this).parents('.shell').addClass('nav-collapsed');
            setTimeout(function(){ $('.grid').masonry() }, 250);
        }
    });


    $('.left-nav .close-button').click(function() {
        $(this).parents('.shell').addClass('nav-collapsed');
        setTimeout(function(){ $('.grid').masonry() }, 250);
    });
    window.setTimeout(function(){
        $('.chart-wrap.loading-chart').removeClass('loading-chart');
        $('.chart-wrap .loader').addClass('is-hidden');
    },1000);

    
    $('.grid').masonry({
            itemSelector: '.grid-item'
    });


    $('.accordion .toggle').click(function(e) {
        e.preventDefault();

        var $this = $(this);

        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });


    $('.close-help').click(function(e) {
        e.preventDefault();
        $(this).parents('.olh-panel').removeClass('open');
    });


    $('.open-olh-trigger').click(function(e) {
        e.preventDefault();
        $('.olh-panel').addClass('open');
    });

    window.setTimeout(function(){
        $('.current-activity .list-col .progress').addClass('animate');
        
    },10000);

    window.setTimeout(function(){
        $('.current-activity').addClass('completed');
        $('.current-activity .hide-this').removeClass('hide-this');
        $('.current-activity .list-col .progress').addClass('hide-this');
        $('.current-activity .list-col .state-icon').addClass('healthy').removeClass('active');
    },16000);

    $('#globalSearch').focusin(function(){
        $(this).val('Capacity');
        $(this).parent('form').next('.search-actions').addClass('opened');
    });

    $('.search-actions').focusout(function(){
        $(this).find('#globalSearch').val('');
        $(this).removeClass('opened');
    });

    $('.search-actions .help-suggestion a').click(function(){
        $(this).parents('.search-actions').prev('form').find('#globalSearch').val('');
        $(this).parents('.search-actions').removeClass('opened');
    });

    window.setTimeout(function(){
        $('.delayed-notif').removeClass('closed');
    },500);

    window.setTimeout(function(){
        $('.delayed-notif').addClass('open');
    },400);


    $('.custom-fieldset .field-wrap .form-field input').on('focusin', function() {
        $(this).parents('.custom-fieldset').addClass('in-focus');
    })

    $('.custom-fieldset .field-wrap .form-field input').on('blur', function() {
        
        if (!$(this).val() ) {
            $(this).parents('.custom-fieldset').removeClass('in-focus');
        } else {
            $(this).parents('.custom-fieldset').removeClass('in-focus').addClass('has-value');
        }
        
    })

    $('.custom-fieldset .field-wrap .form-field input').change(function() {
        
        if (!$(this).val() ) {
            $(this).parents('.custom-fieldset').removeClass('has-value');
        }
        
    })

    $('.custom-fieldset.server-https .field-wrap .form-field input').on('focus', function() {
        $(this).attr('value', 'https://');
    })

});