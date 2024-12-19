document.addEventListener("DOMContentLoaded", function () {
  const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");

  addToCartButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const url = this.getAttribute("data-url");

      fetch(url, {
        method: "POST",
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            alert(data.message); // Hiển thị thông báo thành công
          } else {
            alert(data.message); // Hiển thị thông báo lỗi
          }
        })
        .catch((error) => {
          console.error("Lỗi:", error);
          alert("Có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng!");
        });
    });
  });
});
