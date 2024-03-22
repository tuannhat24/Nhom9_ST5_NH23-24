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
document.addEventListener("DOMContentLoaded", function() {
    var menuBarIn = document.getElementById("menu__bar-in");
    var menuBarOut = document.getElementById("menu__bar-out");
    var sidebar = document.querySelector(".sidebar");
    var sidebarModal = document.getElementById("sidebarModal");

    if (menuBarIn && menuBarOut && sidebar && sidebarModal) {
        menuBarOut.addEventListener("click", function(event) {
            event.stopPropagation();
            if (sidebar.classList.contains('hide')) {
                sidebar.classList.remove('hide');
                sidebarModal.classList.remove('hide');
            }
        });

        menuBarIn.addEventListener("click", function(event) {
            event.stopPropagation();
            if (!sidebar.classList.contains('hide')) {
                sidebar.classList.add('hide');
                sidebarModal.classList.add('hide');
            }
        });

        sidebar.addEventListener("click", function(event) {
            event.stopPropagation();
        });

        document.addEventListener("click", function() {
            if (!sidebar.classList.contains('hide')) {
                sidebar.classList.add('hide');
                sidebarModal.classList.add('hide');
            }
        });
    }
});
