<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        spaceBetween: 10,
        autoplay: {
            delay: 2000,
        },
        pagination: {
            el: ".paginat",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            },
        },
    });
</script>
@yield('skrip')
