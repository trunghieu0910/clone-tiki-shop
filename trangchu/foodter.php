</body>
bcd
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
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>