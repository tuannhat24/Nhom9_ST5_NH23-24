// Xử lí click vào items trong sidebar
document.addEventListener("DOMContentLoaded", function () {
    var menuItems = document.querySelectorAll(".sidebar__menu-item");

    menuItems.forEach(function (item) {
        item.addEventListener("click", function () {
            var subMenu = this.querySelector(".sub__menu");
            var iconUp = this.querySelector(".sidebar__icon-up");
            var iconDown = this.querySelector(".sidebar__icon-down");

            this.classList.toggle("open");
            if (subMenu.style.display === "block") {
                subMenu.style.display = "none";
                iconUp.style.display = "none";
                iconDown.style.display = "inline-block";
            } else {
                subMenu.style.display = "block";
                iconUp.style.display = "inline-block";
                iconDown.style.display = "none";
            }
        });
    });
});

//Menu bar
document.addEventListener("DOMContentLoaded", function () {
    var menuBarIn = document.getElementById("menu__bar-in");
    var menuBarOut = document.getElementById("menu__bar-out");
    var sidebar = document.querySelector(".sidebar");
    var sidebarModal = document.getElementById("sidebarModal");
    var logoOut = document.getElementById("header__logo-out");

    if (menuBarIn && menuBarOut && sidebar && sidebarModal && logoOut) {
        menuBarOut.addEventListener("click", function (event) {
            event.stopPropagation();
            if (sidebar.classList.contains("hide")) {
                sidebar.classList.remove("hide");
                sidebarModal.classList.remove("hide");
                logoOut.classList.add("opacity-0");
            }
        });

        menuBarIn.addEventListener("click", function (event) {
            event.stopPropagation();
            if (!sidebar.classList.contains("hide")) {
                sidebar.classList.add("hide");
                sidebarModal.classList.add("hide");
                logoOut.classList.remove("opacity-0");
            }
        });

        sidebarModal.addEventListener("click", function (event) {
            event.stopPropagation();
            if (!sidebar.classList.contains("hide")) {
                sidebar.classList.add("hide");
                sidebarModal.classList.add("hide");
                logoOut.classList.remove("opacity-0");
            }
        });

        sidebar.addEventListener("click", function (event) {
            event.stopPropagation();
        });

        document.addEventListener("click", function () {
            if (!sidebar.classList.contains("hide")) {
                sidebar.classList.add("hide");
                sidebarModal.classList.add("hide");
            }
        });
    }
});

//detail Pagination
$(document).ready(function () {
    $(".related-products-slider").slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 2,
        prevArrow: '<button class="slick-prev"><</button>',
        nextArrow: '<button class="slick-next">></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
});

// close in sign in sign up

function closeAlert() {
    var alert = document.querySelector(".alert");
    alert.style.display = "none";
}

// banner
document.addEventListener("DOMContentLoaded", function () {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    let carouselItems = $$(".full-home-banners__main-item");
    let carouselIndicators = $$(".full-home-banners__main-dot");
    let carouselBtnLeft = $(".carosel-btn-left");
    let carouselBtnRight = $(".carosel-btn-right");
    let i = 0,
        lengthCarousel = carouselItems.length;

    function removeActiveCarousel() {
        const activeItem = $(".full-home-banners__main-item.active");
        const activeDot = $(".full-home-banners__main-dot.active");
        if (activeItem) {
            activeItem.classList.remove("active");
        }
        if (activeDot) {
            activeDot.classList.remove("active");
        }
    }

    function addActiveCarousel(i) {
        carouselItems[i].classList.add("active");
        carouselIndicators[i].classList.add("active");
    }

    let arrIndicators = Array.from(carouselIndicators);
    arrIndicators.forEach((indicator, index) => {
        const carouselItem = carouselItems[index];
        indicator.onclick = function () {
            i = index;
            removeActiveCarousel();
            carouselItem.classList.add("active");
            this.classList.add("active");
        };
    });

    carouselBtnLeft.onclick = function () {
        i--;
        if (i < 0) {
            i = lengthCarousel - 1;
        }
        removeActiveCarousel();
        addActiveCarousel(i);
    };

    carouselBtnRight.onclick = function () {
        i++;
        if (i >= lengthCarousel) {
            i = 0;
        }
        removeActiveCarousel();
        addActiveCarousel(i);
    };

    setInterval(() => {
        if (i === lengthCarousel - 1) {
            i -= lengthCarousel;
        }
        i++;
        removeActiveCarousel();
        addActiveCarousel(i);
    }, 5000);
});
