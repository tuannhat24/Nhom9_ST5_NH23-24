// Cart
// Hàm cập nhật số lượng sản phẩm trong giỏ hàng
function updateQuantity(cartId, change) {
    let quantityElement = document.getElementById("quantity_" + cartId);
    let quantity = parseInt(quantityElement.innerText);
    quantity += change;

    // Đảm bảo số lượng không âm
    if (quantity < 0) {
        return;
    }

    // Gửi yêu cầu AJAX để cập nhật số lượng trên máy chủ
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Cập nhật số lượng trong giao diện người dùng
                quantityElement.innerText = quantity;

                // Tính toán tổng số lượng và tổng giá tiền
                calculateTotal();
            } else {
                console.error("Lỗi:", xhr.statusText);
            }
        }
    };

    // Chuẩn bị dữ liệu để gửi trong yêu cầu
    let data = new FormData();
    data.append("quantity", quantity);

    // Gửi yêu cầu POST để cập nhật số lượng
    xhr.open("POST", "/update-cart/" + cartId, true);
    xhr.send(data);
}

// Hàm tính toán tổng số lượng và tổng giá tiền
function calculateTotal() {
    let totalQuantity = 0;
    let totalPrice = 0;
    let cartElements = document.querySelectorAll(".cart-item");

    // Lặp qua mỗi mục giỏ hàng và tính toán tổng số lượng và tổng giá tiền
    cartElements.forEach(function (cartElement) {
        let quantity = parseInt(
            cartElement.querySelector(".quantity").innerText
        );
        let total = parseFloat(cartElement.querySelector(".total").innerText.replace(/,/g, ''));  // Lấy giá từ trường total
        totalQuantity += quantity;
        totalPrice += total;
    });

    // Cập nhật tổng số lượng và tổng giá tiền trong giao diện người dùng
    document.getElementById("total-quantity").innerText = totalQuantity;
    document.getElementById("total-price").innerText = totalPrice.toLocaleString(); // Format lại số tiền với dấu phẩy
}

// Gọi hàm calculateTotal() để tính toán tổng số lượng và tổng giá tiền khi tải xong trang
document.addEventListener("DOMContentLoaded", function () {
    calculateTotal();
});

// ---detail-cart
// Hàm xử lý thêm sản phẩm vào giỏ hàng
function addToCart(productId, buttonElement) {
    // Lấy số lượng sản phẩm từ trường input
    let quantity = buttonElement.previousElementSibling.value;

    let xhr = new XMLHttpRequest();

    // Chuẩn bị dữ liệu cần gửi trong yêu cầu
    let data = new FormData();
    data.append("product_id", productId);
    data.append("quantity", quantity);

    // Gửi yêu cầu POST để thêm sản phẩm vào giỏ hàng
    xhr.open("POST", "/user/cart", true);
    xhr.setRequestHeader(
        "X-CSRF-TOKEN",
        document.querySelector('meta[name="csrf-token"]').content
    );
    xhr.send(data);
}