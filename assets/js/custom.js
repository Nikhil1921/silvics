"use strict";
function headerStyle() {
    if ($(".main-header").length) {
        var windowpos = $(window).scrollTop();
        var siteHeader = $(".main-header");
        var sticky_Header = $(".sticky-header");
        var scrollLink = $(".scroll-to-top");

        if (windowpos >= 300) {
            sticky_Header.addClass("animated slideInDown");
            siteHeader.addClass("fixed-header");
            scrollLink.fadeIn(300);
        } else {
            sticky_Header.removeClass("animated slideInDown");
            siteHeader.removeClass("fixed-header");
            scrollLink.fadeOut(300);
        }
    }
}

$(window).on("scroll", function () {
  headerStyle();
});

if ($('.testimonial-carousel').length) {
    $('.testimonial-carousel').owlCarousel({
        loop:true,
        margin:40,
        nav:true,
        smartSpeed: 500,
        autoplay: true,
        navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
        responsive:{
            0:{
                items:1
            },
            800:{
                items:1
            },
            1024:{
                items:2,
                margin:30
            },
            1200:{
                items:2
            }
        }
    });    		
}

if ($(".lightbox-image").length) {
    $(".lightbox-image").fancybox({
            openEffect: "fade",
            closeEffect: "fade",
            helpers: {
            media: {},
        },
    });
}

if ($("#contact-form").length) {
    $("#contact-form").validate({
        rules: {
            name: {
                required: true,
                maxlength: 100
            },
            email: {
                required: true,
                email: true,
                maxlength: 100
            },
            subject: {
                required: true,
                maxlength: 100
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number: true
            },
            message: {
                required: true,
                maxlength: 255
            },
        },
        submitHandler: function(form) {
            var text = '';

            $.ajax({
                url: $(form).attr('action'),
                type: $(form).attr('method'),
                data: $(form).serialize(),
                dataType: 'json',
                async: false,
                beforeSend: function() {
                    $(form).find(':submit').hide();
                },
                success: function(res) {
                    text = res.message;
                },
                error: function() {
                    text = "Something not going good. Try again later.";
                },
                complete: function() {
                    form.reset();
                    $(form).find(':submit').show();
                }
            });

            if($("#prodModal").length > 0) $("#prodModal").modal("hide");

            const myInterval = setInterval(() => {
                $("#responseData").html(text);
                $("#responseModal").modal("show");
                clearInterval(myInterval);
            }, 500);

            return;
        }
    });
}

if($('.sortable-masonry').length){
	
    var winDow = $(window);
    // Needed variables
    var $container=$('.sortable-masonry .items-container');
    var $filter=$('.filter-btns');

    $container.isotope({
        filter:'.factory',
            masonry: {
            columnWidth : 1
            },
        animationOptions:{
            duration:500,
            easing:'linear'
        }
    });
    

    // Isotope Filter 
    $filter.find('li').on('click', function(){
        var selector = $(this).attr('data-filter');

        try {
            $container.isotope({ 
                filter	: selector,
                animationOptions: {
                    duration: 500,
                    easing	: 'linear',
                    queue	: false
                }
            });
        } catch(err) {

        }
        return false;
    });


    winDow.on('resize', function(){
        var selector = $filter.find('li.active').attr('data-filter');

        $container.isotope({ 
            filter	: selector,
            animationOptions: {
                duration: 500,
                easing	: 'linear',
                queue	: false
            }
        });
    });


    var filterItemA	= $('.filter-btns li');

    filterItemA.on('click', function(){
        var $this = $(this);
        if ( !$this.hasClass('active')) {
            filterItemA.removeClass('active');
            $this.addClass('active');
        }
    });
}

if ($(".scroll-to-target").length) {
    $(".scroll-to-target").on("click", function () {
        var target = $(this).attr("data-target");
        // animate
        $("html, body").animate({
            scrollTop: $(target).offset().top,
        }, 1000);
    });
}