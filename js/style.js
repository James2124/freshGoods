var swiper = new Swiper(".myClientSwiper", {
	spaceBetween: 30,
	centeredSlides: true,
	loop: true,
	autoplay: {
		delay: 6000,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
});

jQuery(document).ready(function ($) {
    $("a").on("click", function (e) {
        e.preventDefault();

        var link = $(this).attr("href");

        if (link) {
            $.ajax({
                url: link,
                method: "HEAD",
                success: function () {
                    window.location.href = link;
                },
                error: function (xhr) {
                    if (xhr.status === 404 || xhr.status === 500) {
                        window.location.href = "maintain.php";
                    }
                }
            });
        }
    });
});
