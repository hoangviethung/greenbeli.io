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
            autoplay: {
                delay: 3000,
            },
            loop: true,
            preloadImages: false,
            lazy: true,
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
            autoplay: {
                delay: 3000,
            },
            loop: true,
            preloadImages: false,
            lazy: true,
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
    function initSlierCharacters() {
        const thumbsSwiper = new Swiper(".characters-slider .thumbs-slider", {
            slidesPerView: 3,
            breakpoints: {
                576: {
                    slidesPerView: 5,
                },
            },
        });
        const main = new Swiper(".characters-slider .main-slider", {
            slidesPerView: 1,
            watchSlidesProgress: true,
            autoplay: {
                delay: 5000,
            },
            preloadImages: false,
            lazy: true,
            simulateTouch: false,
            thumbs: {
                swiper: thumbsSwiper,
            },
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
        });
    }
    function initSlierInvestors() {
        const swiper = new Swiper(".partners-investors-slider", {
            slidesPerView: 2,
            slidesPerColumn: 3,
            slidesPerGroup: 5,
            slidesPerColumnFill: "row",
            spaceBetween: 32,
            autoplay: {
                delay: 3000,
            },
            speed: 3000,
            breakpoints: {
                768: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
    }
    function initSliderAdvisors() {
        const swiper = new Swiper(".advisors-slider", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,
            speed: 1500,
            autoplay: {
                delay: 3000,
            },
            loop: true,
            preloadImages: false,
            lazy: true,
            breakpoints: {
                575: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            },
            navigation: {
                nextEl: ".advisors-slider .swiper-button-next",
                prevEl: ".advisors-slider .swiper-button-prev",
            },
        });
    }
    function scrollToSection() {
        $("#primary-menu .menu-item a")
            .not("[target='_blank'],[href='#']")
            .on("click", function (e) {
                e.preventDefault();
                var aid = $(this).attr("href");
                console.log(aid);
                resetAsideMenuMobile();
                $("html,body").animate(
                    { scrollTop: $(aid).offset().top },
                    "slow",
                );
            });
    }
    function collapseAsideMenuMobile() {
        $(".js-collapse-aside-menu-mobile").on("click", function (e) {
            $(this).toggleClass("active");
            $(".main-navigation").toggleClass("active");
            $("#page").toggleClass("overlay");
            $("body").toggleClass("no-scroll");
        });
        $(".overlay").on("click", function (e) {
            $(".js-collapse-aside-menu-mobile").trigger("click");
        });
        $(".close-nav-mobile").on("click", function (e) {
            $(".js-collapse-aside-menu-mobile").trigger("click");
        });
    }
    function resetAsideMenuMobile() {
        $(".js-collapse-aside-menu-mobile").removeClass("active");
        $(".main-navigation").removeClass("active");
        $("#page").removeClass("overlay");
        $("body").removeClass("no-scroll");
    }
    function hidenTopHeader() {
        $(".hidden-note .close-hidden-note").on("click", function (e) {
            $(this).parents(".hidden-note").addClass("hidden");
            setVariableStyleNavMobile();
        });
    }
    function setVariableStyleNavMobile() {
        $(".main-navigation").attr(
            "style",
            `--height-header: ${getHeightHeader()}px`,
        );
    }
    function getHeightHeader() {
        return $("header.site-header").outerHeight();
    }
    $(function () {
        initSlierIntroduction();
        initSlierFeatures();
        initSlierLeaderShip();
        initSlierCharacters();
        initSlierInvestors();
        initSliderAdvisors();
        scrollToSection();
        collapseAsideMenuMobile();
        hidenTopHeader();
    });
    $(window).load(function () {
        setVariableStyleNavMobile();
    });
})(jQuery);
