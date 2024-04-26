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
    $('.related-products-slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 2,
        prevArrow: '<button class="slick-prev"><</button>',
        nextArrow: '<button class="slick-next">></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});


// close in sign in sign up

function closeAlert() {
    var alert = document.querySelector('.alert');
    alert.style.display = 'none';
}
