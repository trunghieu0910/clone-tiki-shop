<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <style>
    /* CSS cho phần giao diện */
    /* ... */
  </style>
</head>
<body>
  <h1>Gallery</h1>
  <div class="thumbnails">
    <img src="../img/sach-muon-kiep-nhan-sinh-1.webp" alt="Thumbnail 1" onclick="showImage('../img/sach-muon-kiep-nhan-sinh-1.webp')">
    <img src="../img/sach-muon-kiep-nhan-sinh.webp" alt="Thumbnail 2" onclick="showImage('../img/sach-muon-kiep-nhan-sinh.webp')">
    <img src="../img/sach-muon-kiep-nhan-sinh-1.webp" alt="Thumbnail 3" onclick="showImage('../img/sach-muon-kiep-nhan-sinh-1.webp')">
    <img src="../img/sach-muon-kiep-nhan-sinh.webp" alt="Thumbnail 4" onclick="showImage('../img/sach-muon-kiep-nhan-sinh.webp')">
    <img src="../img/sach-muon-kiep-nhan-sinh-1.webp" alt="Thumbnail 5" onclick="showImage('../img/sach-muon-kiep-nhan-sinh-1.webp')">
  </div>
  <div class="full-image">
    <img src="" alt="Full Image" id="fullImage">
  </div>
  <script>
    // JavaScript cho phần xử lý sự kiện
    function showImage(imageUrl) {
      document.getElementById('fullImage').src = imageUrl;
    }
  </script>
</body>
</html>
