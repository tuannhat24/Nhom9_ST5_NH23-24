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
//Pagination detail
document.addEventListener('DOMContentLoaded', function() {
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const productContainer = document.querySelector('.product-container');
    let scrollAmount = 0;

    nextBtn.addEventListener('click', function() {
        scrollAmount += 200; // Điều chỉnh giá trị để phù hợp với kích thước sản phẩm
        if (scrollAmount > productContainer.scrollWidth - productContainer.clientWidth) {
            scrollAmount = productContainer.scrollWidth - productContainer.clientWidth;
        }
        productContainer.style.transform = `translateX(-${scrollAmount}px)`;
    });

    prevBtn.addEventListener('click', function() {
        scrollAmount -= 200; // Điều chỉnh giá trị để phù hợp với kích thước sản phẩm
        if (scrollAmount < 0) {
            scrollAmount = 0;
        }
        productContainer.style.transform = `translateX(-${scrollAmount}px)`;
    });
});


