<article w-full mt-3 id="btn1" id="content">
    <section>
      <div class="col-trai w-1/5 float-left">
        <div class="col-trai-1 w-3/4 my-3.5">
          <div class="menudoc1 menudoc">
            <ul>
              <li> <h2 style="color: black;font-weight: bold; font-size: 18px;">nổi bật</h2></li>
              <li>
                <img src="img/01.webp" alt="" style="border-radius: 15px;"> <a href="#">Tiki ChatGPT</a>
              </li>
              <li>
                <img src="img/02.webp" alt="" style="border-radius: 15px;"> <a href="#">Astra Reward</a>
              </li>
              <li>
                <img src="img/03.webp" alt="" style="border-radius: 15px;"> <a href="#">Tiki Exchange</a>
              </li>

              <li>
                <img src="img/04.webp" alt="" style="border-radius: 15px;"> <a href="#">Giá Rẻ Mỗi Ngày</a>
              </li>
              <li>
                <img src="img/05.webp" alt="" style="border-radius: 15px;"> <a href="#">Tiki ChatGPT</a>
              </li>
              <li>
                <img src="img/06.webp" alt="" style="border-radius: 15px;"> <a href="#">Astra Reward</a>
              </li>
              <li>
                <img src="img/07.webp" alt="" style="border-radius: 15px;"> <a href="#">Tiki Exchange</a>
              </li>

              <li>
                <img src="img/08.webp" alt="" style="border-radius: 15px;"> <a href="#">Giá Rẻ Mỗi Ngày</a>
              </li>
              <li>
                <img src="img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">Giá Rẻ Mỗi Ngày</a>
              </li>
          </div>
          </div>

        <div class="col-trai-1 w-3/4 my-3.5">
          <div class="menudoc1 menudoc">
            <ul>
              <li> <h2 style="color: black;font-weight: bold; font-size: 18px;">Danh Mục</h2></li>
  
             <?php
foreach ($dsdm as $dm){
  extract($dm);
  $linkdm="index.php?act=sanpham&iddm=".$id;
  echo '<li>
  <a href="'.linkdm.'">'.$name.'</a>
  </li>
  ';
}

             ?> 



</ul>




          </div>
        </div>

    </section>
    <section>
      <div class="col-phai w-4/5 float-right ">
        <div class="col-phai-phai  w-2/3 float-left rounded-md h-64 ">
<div class="slideshow-container">
  <div class="mySlides1">
  <img src="img/banner1.webp" alt="">
  </div>

  <div class="mySlides1">
  <img src="img/banner1.webp" alt="">
  </div>

  <div class="mySlides1">
  <img src="img/baner2.webp" alt="">
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
        </div>

        
        <div class="col-phai-trai float-right w-1/4 mr-16 h-64 rounded-md">
        <img src="img/2.webp" alt="">
        </div>
        <div class="col-phai-1  h-72 rounded-md my-16">
        <h1 style="    font-weight: 900;margin-left: 1%;" >Bộ sưu tập nổi bật</h1>
          <div class="sp0 filtering">
      <div class="sp1 ">1 <img src="img/2.webp" alt=""></div>
      <div class="sp1">2  <img src="img/2.webp" alt=""></div>
      <div class="sp1 ">3  <img src="img/2.webp" alt=""></div>
      <div class="sp1 ">4   <img src="img/2.webp" alt=""></div>
      <div class="sp1 ">5  <img src="img/2.webp" alt=""></div>
      <div class="sp1 ">6  <img src="img/2.webp" alt=""></div>
      <div class="sp1 ">5  <img src="img/2.webp" alt=""></div>
      <div class="sp1 ">6  <img src="img/2.webp" alt=""></div>

      </div>
        </div>




      </div>
    </section>

  </article>