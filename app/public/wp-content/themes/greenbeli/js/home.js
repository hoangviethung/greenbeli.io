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
        $("#primary-menu .menu-item a").on("click", function (e) {
            e.preventDefault();
            var aid = $(this).attr("href");
            $("html,body").animate({ scrollTop: $(aid).offset().top }, "slow");
        });
    }
    $(document).ready(function () {
        initSlierLeaderShip();
        scrollToSection();
    });
})(jQuery);
