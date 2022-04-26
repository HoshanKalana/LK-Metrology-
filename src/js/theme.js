// Add all JS development here
jQuery(function ($) {
    $(document).ready(function () {

        //Navbar Scrollspy 
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll > 80) {
                $(".inner").addClass("affix");
            } else {
                $(".inner").removeClass("affix");
            }
        });

        //Navbar Close after click
        $(document).on('click', function () {
            $('.navbar .collapse').collapse('hide');
        })

        //Mobile Menu hamburger
        $(".hamburger").click(function () {
            $(this).toggleClass("is-active");
        })


        //*******Video Play popup******//
        // Gets the video src from the data-src on each button
        var $videoSrc;
        $('.video-btn').click(function () {
            $videoSrc = $(this).data("src");
        });
        //console.log($videoSrc);

        // when the modal is opened autoplay it  
        $('#videoModal').on('shown.bs.modal', function (e) {
            // set the video src to autoplay and not to show related video.
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        // stop playing the youtube video when I close the modal
        $('#videoModal').on('hide.bs.modal', function (e) {
            // a poor man's stop video
            $("#video").attr('src', $videoSrc);
        })


        // //File Choosen
        // const actualBtn = document.getElementById('actual-btn');

        // const fileChosen = document.getElementById('file-chosen');

        // actualBtn.addEventListener('change', function () {
        //     fileChosen.textContent = this.files[0].name
        // })

        //Hero Slider
        $('.hero-slider').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            lazyLoad: true,
            // transitionStyle: "fade",
            // animateOut: 'animate__fadeOutDown',
            // animateIn: 'animate__fadeIn',

            // slideTransition: 'linear',
            // slideTransition: 'ease-in-out',
            autoplay: true,
            autoplayTimeout: 7000,
            autoplaySpeed: 1000,
            smartSpeed: 450,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        //Product Slider
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            speed: 800,
            //infinite: true,
            //variableWidth: true,
            //cssEase: 'ease-in-out',
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            speed: 1000,
            //infinite: true,
            //cssEase: 'ease-in-out',
            focusOnSelect: true,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('a[data-slide]').click(function (e) {
            e.preventDefault();
            var slideno = $(this).data('slide');
            $('.slider-nav').slick('slickGoTo', slideno - 1);
        });

        //Accessories Slider
        $('.accessories-slider').owlCarousel({
            loop:true,
            margin:10,
            navText: [
				"<div class='prev'></div>",
				"<div class='next'></div>",
			],
            responsive:{
                0:{
                    items:1,
                    nav:false,
                    dots:true
                },
                600:{
                    items:3,
                    nav:false,
                    dots:true
                },
                1000:{
                    items:5,
                    nav:true,
                    dots:false
                }
            }
        })


    });
});