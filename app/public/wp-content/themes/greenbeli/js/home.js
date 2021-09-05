(function ($) {
    function initSlierLeaderShip() {
        const swiper = new Swiper(".leadership-slider .swiper-container", {
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
            $("body").css("overflow-y", "hidden");
        });
    }
    function resetAsideMenuMobile() {
        $(".js-collapse-aside-menu-mobile").removeClass("active");
        $(".main-navigation").removeClass("active");
        $("#page").removeClass("overlay");
        $("body").css("overflow-y", "auto");
    }
    $(function () {
        initSlierLeaderShip();
        scrollToSection();
        collapseAsideMenuMobile();
    });
})(jQuery);
