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
        slidesToScroll: 1,
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

//tăng giảm số lượng sản phẩm trong detail
function incrementQuantity() {
    var quantityInput = document.getElementById("product-quantity");
    var currentQuantity = parseInt(quantityInput.value, 10);
    quantityInput.value = currentQuantity + 1;
}

function decrementQuantity() {
    var quantityInput = document.getElementById("product-quantity");
    var currentQuantity = parseInt(quantityInput.value, 10);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
    }
}
// size color
document.addEventListener("DOMContentLoaded", function () {
    const sizeButtons = document.querySelectorAll(".size-btn");
    const colorButtons = document.querySelectorAll(".color-btn");

    sizeButtons.forEach((btn) => {
        btn.addEventListener("click", function () {
            sizeButtons.forEach((b) => b.classList.remove("active")); // Xóa active khỏi tất cả các nút kích cỡ
            this.classList.add("active"); // Thêm active vào nút được nhấn
        });
    });

    colorButtons.forEach((btn) => {
        btn.addEventListener("click", function () {
            colorButtons.forEach((b) => b.classList.remove("active")); // Xóa active khỏi tất cả các nút màu sắc
            this.classList.add("active"); // Thêm active vào nút được nhấn
        });
    });
});

// thêm size and color vào cart
document.addEventListener("DOMContentLoaded", function () {
    const sizeButtons = document.querySelectorAll(".size-btn");
    const colorButtons = document.querySelectorAll(".color-btn");
    const sizeInput = document.getElementById("selected_size");
    const colorInput = document.getElementById("selected_color");

    sizeButtons.forEach((button) => {
        button.addEventListener("click", function () {
            sizeButtons.forEach((btn) => btn.classList.remove("active"));
            this.classList.add("active");
            sizeInput.value = this.getAttribute("data-size");
        });
    });

    colorButtons.forEach((button) => {
        button.addEventListener("click", function () {
            colorButtons.forEach((btn) => btn.classList.remove("active"));
            this.classList.add("active");
            colorInput.value = this.getAttribute("data-color");
        });
    });
});

// active cho danh mục và các thẻ sắp xếp
document.addEventListener("DOMContentLoaded", function () {
    var sortLinks = document.querySelectorAll(".select-input__link");
    var categoryLinks = document.querySelectorAll(".manager-item__link");

    sortLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            // Xóa class "active" từ tất cả các thẻ sắp xếp
            sortLinks.forEach(function (item) {
                item.classList.remove("active");
            });

            // Thêm class "active" cho thẻ sắp xếp được chọn
            this.classList.add("active");

            // Lưu trạng thái active vào local storage
            localStorage.setItem("selectedSort", this.getAttribute("href"));
        });
    });
    var selectedSort = localStorage.getItem("selectedSort");
    if (selectedSort) {
        var activeLinkSort = document.querySelector(
            '.select-input__link[href="' + selectedSort + '"]'
        );
        if (activeLinkSort) {
            activeLinkSort.classList.add("active");
        }
    }

    categoryLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            // Xóa class "active" từ tất cả các thẻ danh mục
            categoryLinks.forEach(function (item) {
                item.classList.remove("active");
            });

            // Thêm class "active" cho thẻ danh mục được chọn
            this.classList.add("active");

            // Lưu trạng thái active vào local storage
            localStorage.setItem("selectedCategory", this.getAttribute("href"));
        });
    });

    var selectedCategory = localStorage.getItem("selectedCategory");
    if (selectedCategory) {
        var activeLink = document.querySelector(
            '.manager-item__link[href="' + selectedCategory + '"]'
        );
        if (activeLink) {
            activeLink.classList.add("active");
        }
    }
});

document
    .getElementById("toggleFavoriteBtn")
    .addEventListener("click", function () {
        var productId = this.getAttribute("data-product-id");

        fetch("{{ route('user.toggle-favorite', ['id' => $product->id]) }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-Token": "{{ csrf_token() }}",
            },
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then((data) => {
                console.log(data.message);
                // Cập nhật giao diện người dùng tùy theo trạng thái thích hoặc không thích
                // Ví dụ: Thay đổi biểu tượng, cập nhật thông báo, vv.
            })
            .catch((error) => {
                console.error("There was an error!", error);
            });
    });
