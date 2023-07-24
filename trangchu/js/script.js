
// Lấy đối tượng input và các nút trừ, số lượng và nút cộng
const quantityInput = document.querySelector(".quantity-input");
const decrementBtn = document.querySelector(".decrement-btn");
const incrementBtn = document.querySelector(".increment-btn");

// Hàm giảm số lượng sản phẩm
function decrement() {
  let value = parseInt(quantityInput.value);
  if (value > 1) {
    value--;
    quantityInput.value = value;
  }
}

// Hàm tăng số lượng sản phẩm
function increment() {
  let value = parseInt(quantityInput.value);
  if (value < 10) {
    value++;
    quantityInput.value = value;
  }
}

// Hàm cập nhật số lượng sản phẩm khi người dùng nhập số mới
function updateQuantity() {
  let value = parseInt(quantityInput.value);
  if (isNaN(value) || value < 1) {
    value = 1;
  } else if (value > 100) {
    value = 100;
  }
  quantityInput.value = value;
}

// JavaScript cho phần xử lý sự kiện
// Đặt đường dẫn ảnh mặc định cho ảnh lớn khi trang được load
document.getElementById('fullImage').src = '../img/sach-muon-kiep-nhan-sinh-1.webp';

function showImage(imageUrl) {
  document.getElementById('fullImage').src = imageUrl;
}

// chuwxc năng trang
$(document).ready(function () {
  // Tổng số mục trên trang của bạn
  var totalItems = 50;

  // Số mục bạn muốn hiển thị trên mỗi trang
  var itemsPerPage = 10;

  // Tính toán số trang
  var totalPages = Math.ceil(totalItems / itemsPerPage);

  // Thêm nút trang vào phần Pagination
  for (var i = 1; i <= totalPages; i++) {
    $(".pagination").append("<li class='page-item'><a class='page-link' href='#'>" + i + "</a></li>");
  }

  // Thêm nút '<' (Previous) vào phần Pagination
  $(".pagination").prepend("<li class='page-item'><a class='page-link' href='#' id='previous'>&lt;</a></li>");

  // Thêm nút '>' (Next) vào phần Pagination
  $(".pagination").append("<li class='page-item'><a class='page-link' href='#' id='next'>&gt;</a></li>");

  // Xử lý sự kiện khi người dùng chọn trang
  $(".pagination").on("click", ".page-link", function (e) {
    e.preventDefault();
    var currentPage = parseInt($(this).text());
    // Gọi hàm để hiển thị dữ liệu cho trang được chọn.
    showData(currentPage);
  });

  // Xử lý sự kiện khi người dùng nhấn nút '<' (Previous)
  $("#previous").on("click", function (e) {
    e.preventDefault();
    var currentPage = parseInt($(".pagination .active a").text());
    if (currentPage > 1) {
      showData(currentPage - 1);
    }
  });

  // Xử lý sự kiện khi người dùng nhấn nút '>' (Next)
  $("#next").on("click", function (e) {
    e.preventDefault();
    var currentPage = parseInt($(".pagination .active a").text());
    if (currentPage < totalPages) {
      showData(currentPage + 1);
    }
  });

  // Hàm hiển thị dữ liệu cho trang đã chọn (ví dụ: hiển thị các mục từ mục đầu tiên đến mục cuối cùng của trang).
  function showData(currentPage) {
    // Xóa lớp active trên các nút trang
    $(".pagination .page-item").removeClass("active");
    // Thêm lớp active cho nút trang hiện tại
    $(".pagination li").eq(currentPage).addClass("active");

    var startItem = (currentPage - 1) * itemsPerPage;
    var endItem = startItem + itemsPerPage;
    // Điều chỉnh hiển thị dữ liệu tương ứng với startItem và endItem.
    // Ví dụ: dùng AJAX để lấy dữ liệu từ máy chủ và hiển thị nội dung tương ứng.
  }

  // Hiển thị dữ liệu cho trang đầu tiên khi trang web được tải.
  showData(1);
});


// Get all tab elements
const tabs = document.querySelectorAll(".tab");

// Add click event listener to each tab
tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    // Remove active class from all tabs
    tabs.forEach((tab) => tab.classList.remove("active"));

    // Add active class to the clicked tab
    tab.classList.add("active");
  });
});



