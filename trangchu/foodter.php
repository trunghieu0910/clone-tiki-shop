</body>

</html>
<script>
  var toggleButton = document.getElementById("toggleButton");
  var content = document.getElementById("content");

  toggleButton.addEventListener("click", function () {
    if (content.style.display === "none") {
      content.style.display = "block"; // Hiển thị nội dung nếu đang ẩn
    } else {
      content.style.display = "none"; // Ẩn nội dung nếu đang hiển thị
    }
  });
</script>