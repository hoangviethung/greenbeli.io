(function ($) {
    function initSlierIntroduction() {
        const thumbsSwiper = new Swiper(".introduction .thumbs-slider", {
            slidesPerView: 3,
            spaceBetween: 16,
            direction: "vertical",
        });
        const swiper = new Swiper(".introduction .main-slider", {
            slidesPerView: 1,
            simulateTouch: false,
            thumbs: {
                swiper: thumbsSwiper,
            },
        });
    }
    function initSlierFeatures() {
        const swiper = new Swiper(".features-slider", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,
            speed: 1500,
            loop: true,
            breakpoints: {
                575: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            },
            navigation: {
                nextEl: ".features-slider .swiper-button-next",
                prevEl: ".features-slider .swiper-button-prev",
            },
        });
    }
    function initSlierLeaderShip() {
        const swiper = new Swiper(".leadership-slider", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,
            speed: 1500,
            loop: true,
            breakpoints: {
                575: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            },
            navigation: {
                nextEl: ".leadership-slider .swiper-button-next",
                prevEl: ".leadership-slider .swiper-button-prev",
            },
        });
    }
    function scrollToSection() {
        $("#primary-menu .menu-item a")
            .not("[target='_blank']")
            .on("click", function (e) {
                e.preventDefault();
                var aid = $(this).attr("href");
                resetAsideMenuMobile();
                $("html,body").animate(
                    { scrollTop: $(aid).offset().top },
                    "slow",
                );
            });
    }
    function collapseAsideMenuMobile() {
        $(".js-collapse-aside-menu-mobile").on("click", function () {
            $(this).toggleClass("active");
            $(".main-navigation").toggleClass("active");
            $("#page").toggleClass("overlay");
            $("body").toggleClass("no-scroll");
        });
    }
    function resetAsideMenuMobile() {
        $(".js-collapse-aside-menu-mobile").removeClass("active");
        $(".main-navigation").removeClass("active");
        $("#page").removeClass("overlay");
        $("body").removeClass("no-scroll");
    }
    $(function () {
        initSlierIntroduction();
        initSlierFeatures();
        initSlierLeaderShip();
        scrollToSection();
        collapseAsideMenuMobile();
    });
})(jQuery);
