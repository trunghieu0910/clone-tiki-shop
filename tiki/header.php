<article w-full mt-3 id="btn1" id="content">
  <section>
    <div class="col-trai w-1/5 float-left">
      <div class="col-trai-1 w-3/4 my-3.5">
        <div class="menudoc1 menudoc">
          <ul>
            <li>
              <h2 style="color: black;font-weight: bold; font-size: 18px;">nổi bật</h2>
            </li>
            <li>
              <img src="tiki/img/01.webp" alt="" style="border-radius: 15px;"> <a href="#">Tiki ChatGPT</a>
            </li>
            <li>
              <img src="tiki/img/02.webp" alt="" style="border-radius: 15px;"> <a href="#">Astra Reward</a>
            </li>
            <li>
              <img src="tiki/img/03.webp" alt="" style="border-radius: 15px;"> <a href="#">Tiki Exchange</a>
            </li>

            <li>
              <img src="tiki/img/04.webp" alt="" style="border-radius: 15px;"> <a href="#">Giá Rẻ Mỗi Ngày</a>
            </li>
            <li>
              <img src="tiki/img/05.webp" alt="" style="border-radius: 15px;"> <a href="#">Tiki ChatGPT</a>
            </li>
            <li>
              <img src="tiki/img/06.webp" alt="" style="border-radius: 15px;"> <a href="#">Astra Reward</a>
            </li>
            <li>
              <img src="tiki/img/07.webp" alt="" style="border-radius: 15px;"> <a href="#">Tiki Exchange</a>
            </li>

            <li>
              <img src="tiki/img/08.webp" alt="" style="border-radius: 15px;"> <a href="#">Giá Rẻ Mỗi Ngày</a>
            </li>
            <li>
              <img src="tiki/img/09.webp" alt="" style="border-radius: 15px;"> <a href="#">Giá Rẻ Mỗi Ngày</a>
            </li>
        </div>
      </div>
      <!-- danh mục -->
      <div class="col-trai-1 w-3/4 my-3.5">
        <div class="menudoc1 menudoc">
          <ul>
            <li>
              <h2 style="color: black;font-weight: bold; font-size: 18px;">Danh Mục</h2>
            </li>
            <?php
            foreach ($htdm as $dm) {
              extract($dm);
              $hinh = $img_path . $image_dm;
              echo '
                    <li>
                    <img src="' . $hinh . '" alt="" style="border-radius: 15px;"> <a href="#">' . $Ten_danhmuc . '</a>
                    </li>';
            }
            ?>
          </ul>
        </div>
      </div>
      <!-- khu vục thay đổi banner -->
  </section>
  <section>
    <div class="col-phai w-4/5 float-right ">
      <div class="col-phai-phai  w-2/3 float-left rounded-md h-72 ">
        <div class="slideshow-container">
          <div class="mySlides1">
            <img src="tiki/img/bannner1.webp " style="width:100%;height: 18rem;">
          </div>
          <div class="mySlides1">
            <img src="tiki/img/bn3.webp" style="width:100% ;height: 18rem; ">
          </div>
          <div class="mySlides1">
            <img src="tiki/img/banner1.webp" style="width:100% ;height: 18rem;">
          </div>
          <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
          <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
        </div>
      </div>
      <div class="col-phai-trai float-right w-1/4 mr-16 h-72 rounded-md">
        <img src="tiki/img/2.webp" alt="" style="width:100% ;height: 18rem;">
      </div>
      <!-- khu vực bọ sưu tập nôi bật -->
      <div class="col-phai-1 rounded-md my-4">
        <h1 style=" font-weight: 700;margin-left: 1.2%; margin-top: 1%;">Bộ sưu tập nổi bật</h1>
        <div class="sp0 filtering my-2 ">
          <div class="sp1 "><img src="tiki/img/bst1.png" alt=""></div>
          <div class="sp1"><img src="tiki/img/bst2.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/bst3.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/bst4.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/bst5.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/bst6.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/bst7.png" alt=""></div>
        </div>
      </div>
      <!-- khu vực giá sale -->
      <div class="col-phai-2 rounded-md my-1">
        <h1 style=" font-weight: 700;margin-left: 1.2%; width: 90%; margin-top: 1%; ">Giá Tốt Hôm Nay <p id="countdown"
            style=" position: absolute;margin-left: 10%; margin-top: -1.22%;"></p>
        </h1>
        <h1 style="    font-weight: 600; float: right; margin-top: -1.8%; color: aqua; ">xem thêm ></h1>
        <div class="sp filtering my-2 ">
          <?php
          $i = 0;
          foreach ($spnew as $sp) {
            extract($sp);
            $hinh = $img_path . $image_sp;
            $linksp = "chitietsp1.php?act=sanphamchitiet&id_SP=" . $id_SP;
            echo '

    <div class="sp2 relative group"><a href="' . $linksp . '"><img src="' . $hinh . '" alt="" width="100%" height: "45%";></a>
    <div class="price">' . $don_gia . '.000<span style="color: brown; font-size: 15px;  position: absolute;">đ</span></div>
    <div class="khung">
    <div class="daban"></div>
    <div class="chu">đã bán 2</div>
    <form class="add-to-cart-form" action="giohang.php?act=addcart" method="post">
    <input type="hidden" name="id_SP" value="' . $id_SP . '" >
    <input type="hidden" name="Ten_hanghoa" value="' . $Ten_hanghoa . '" >
    <input type="hidden" name="don_gia" value="' . $don_gia . '" >
    <input type="hidden" name="image_sp" value="' . $image_sp . '" >
    <input type="hidden" name="soluong" value="1" >
    <div><input class="add-to-cart btn btn-primary w-full bg-blue-700 hover-button absolute bottom-14 left-1/2 transform -translate-x-1/2 hidden group-hover:block group-hover:opacity-100 bg-gray-800 text-white py-2 px-4 rounded-lg transition-opacity duration-300 ease-in-out" type="submit" name="addsp" value="Thêm vào giỏ hàng"></div>
    </form>
    </div>
    </div>
    ';
          }
          ?>
        </div>
      </div>


      <!-- khu vực thương hiệu -->
      <div class="col-phai-1 rounded-md my-4 mau  ">
        <h1 style=" font-weight: 700;margin-left: 1.2%; width: 90%; margin-top: 1%; ">Thương Hiệu Chính hảng</h1>
        <h1 style="    font-weight: 600; margin-top: -1.8%; color: aqua; margin-left: 18%; width: 5%; "><img
            src="tiki/img/th.png" alt="">. </h1>
        <div class="sp filtering my-2 ">
          <div class="sp1 "><img src="tiki/img/th1.png" alt=""></div>
          <div class="sp1"><img src="tiki/img/th2.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/th3.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/th4.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/th5.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/th6.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/th7.png" alt=""></div>
        </div>
      </div>
      <!-- khu vực thương  hiệu -->
      <div class="col-phai-1 rounded-md my-1   ">
        <h1 style=" font-weight: 700;margin-left: 1.2%; width: 90%; margin-top: 1%; ">Hàng Hiệu giá tốt</h1>
        <div class="sp filtering my-2 ">
          <div class="sp1 "><img src="tiki/img/hh1.png" alt=""></div>
          <div class="sp1"><img src="tiki/img/hh2.png" alt=""> <img src="tiki/img/hh3.png" alt=""
              style="margin-top: 1%;"></div>
          <div class="sp1 "><img src="tiki/img/hh4.png" alt=""></div>
          <div class="sp1 "><img src="tiki/img/hh5.png" alt=""><img src="tiki/img/hh6.png" alt=""
              style="margin-top: 1%;"></div>
          <div class="sp1 "><img src="tiki/img/hh8.png" alt=""> <img src="tiki/img/hh5.png" alt=""
              style="margin-top: 1%;"></div>
          <div class="sp1 "><img src="tiki/img/hh4.png" alt=""></div>
        </div>
      </div>
      <!-- khu vực danh mục nổi bật  -->
      <div class="col-phai-2 rounded-md my-1 hu">
        <h1 style=" font-weight: 700;margin-left: 1.2%; width: 90%; margin-top: 1%; ">Danh Mục Nổi bật<p id="countdown"
            style=" position: absolute;margin-left: 10%; margin-top: -1.22%;"></p>
        </h1>
        <div class="sp filtering my-2 ">
          <?php
          foreach ($htdm as $dm) {
            extract($dm);
            $hinh = $img_path . $image_dm;
            echo '
                    <li>
                    <img src="' . $hinh . '" alt="" style="border-radius: 15px;"> <a href="tiki/sanpham.php">' . $Ten_danhmuc . '</a>
                    </li>';
          }
          ?>
        </div>
      </div>
      <div class="col-phai-1 rounded-md my-1 h">
        <h1 style=" font-weight: 700;margin-left: 1.2%; width: 90%; margin-top: 1%; ">Gợi Ý Hôm Nay</h1>
        <div class="sp my-2 ">
          <!-- chuyển tap -->
          <div class="tabs">
            <img src="tiki/img/011.webp" alt=""
              style="position: absolute;width: 2.8%; margin-left: 5.0%; margin-top: 0.5%;"><button
              class="tablinks active" data-electronic="allproducts">Dành cho bạn</button>
            <img src="tiki/img/022.webp" alt=""
              style="position: absolute;width: 2.8%; margin-left: 17.5%;margin-top: 0.5%;"><button class="tablinks"
              data-electronic="Microcontrollers">Rẻ Mỗi Ngày </button>
            <img src="tiki/img/033.webp" alt=""
              style="position: absolute;width: 2.8%; margin-left: 30.5%;margin-top: 0.5%;"><button class="tablinks"
              data-electronic="module">Freeship</button>
            <img src="tiki/img/044.webp" alt=""
              style="position: absolute;width: 2.8%; margin-left: 43.2%;margin-top: 0.5%;"><button class="tablinks"
              data-electronic="modulee">Astra plus</button>
            <img src="tiki/img/055.webp" alt=""
              style="position: absolute;width: 2.8%; margin-left: 55.5%;margin-top: 0.5%;"><button class="tablinks"
              data-electronic="modulee3">dịch vụ số</button>
            <img src="tiki/img/066.webp" alt=""
              style="position: absolute;width: 2.8%; margin-left: 68.2%;margin-top: 0.5%;"><button class="tablinks"
              data-electronic="modulee1">Deal Siêu hot</button>
          </div>

          <!-- Tab content -->
          <div class="wrapper_tabcontent flex-wrap">
            <div id="allproducts" class="tabcontent active flex-wrap">
              <div class="h flex-wrap">
                <div class="my-2 flex h9">
                  <a href="" class="w-2/6 bg-white rounded-3xl overflow-hidden flex-wrap mr-3 tab">
                    <div class="h-60 justify-center items-center flex bg-gray-200">
                      <img src="tiki/img/sach-van-hanh.jpg" class="" alt="">
                    </div>

                    <div class="mx-2 flex-wrap">
                      <p class="text-xl mt-2 font-bold">Nhà Sách Phật Giáo</p>

                      <div class="flex mb-2">

                      </div>
                    </div>
                  </a>
                  <?php
                  $i = 0;
                  foreach ($sp1 as $sp) {
                    extract($sp);
                    $hinh = $img_path . $image_sp;
                    echo '

        <a href="" class="w-44 bg-white pl-0.5 mb-1.5 rounded-2xl overflow-hidden mr-2 h-1/4 relative tab k12">
            <div class="justify-center items-center flex">
                <img src="' . $hinh . '" class="h-40" alt="">
            </div>
            <div class="mx-2 tracking-widest  text-sm">
                <p class="my-2 whitespace-nowrap">' . $Ten_hanghoa . '</p>
                <p class="my-2">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
               
                <p class="text-red-500 text-xl font-bold ">' . $don_gia . ' <span
                        class="underline ml-1 mr-1">đ</span><span class=" font-normal">-35%</span> </p>
            </div>
            <div class="absolute bottom-0 w-full">
            </div>
        </a>

   ';
                  }
                  ?>

                </div>
              </div>
            </div>
          </div>
          <div id="modulee" class="tabcontent">
            4
          </div>
          <div id="modulee3" class="tabcontent">

          </div>
          <div id="modulee1" class="tabcontent">
            6
          </div>
        </div>
      </div>
      <div id="Microcontrollers" class="tabcontent ">
        <!-- <div class="l">
      <?php
      $i = 0;
      foreach ($sp1 as $sp) {
        extract($sp);
        $hinh = $img_path . $image_sp;
        echo '
            <div class="sp2 "><img src="' . $hinh . '" alt="" width="82%" height: "45%";>
            <div class="price">' . $don_gia . '.000<span style="color: brown; font-size: 15px;  position: absolute;">đ</span></div>
            <div class="tensp">' . $Ten_hanghoa . '.000<span style="color: brown; font-size: 15px;  position: absolute;"></div>
            <div class="khung1">
            <div class="daban1"></div> 
            <div class="chu">đã bán 2</div>
            </div>
            </div>
            ';
      }
      ?> -->
      </div>
    </div>

    <div id="module" class="tabcontent">
      <div class="my-2 flex">
        <a href="" class="w-2/6 bg-white rounded-3xl overflow-hidden mr-3 tab">
          <div class="h-60 justify-center items-center flex bg-gray-200">
            <source src="tiki/img/91af1b46ca4a525d0eb92f455fd21f6a.mp4" class="" alt="">
          </div>


          <div class="mx-2" style="
    flex-wrap: wrap;
">
            <p class="text-xl mt-2 font-bold">Nhà Sách Phật Giáo</p>
            <p class="my-2">Tài trợ bởi VanHanhBook 5/5<i class="fas fa-star" style="color: #e2b332;"></i></p>
            <div class="flex mb-2">
              <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class=" w-16 h-16" alt="">
              <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class=" w-16 h-16" alt="">
              <img src="tiki/img/sach-muon-kiep-nhan-sinh.webp" class=" w-16 h-16" alt="">
              <button class="btn btn-primary bg-blue-500 ml-auto mt-2 w-24 h-8" type="submit">Xem
                thêm</button>
            </div>
          </div>
        </a>
        <?php
        $i = 0;
        foreach ($spnew as $sp) {
          extract($sp);
          $hinh = $img_path . $image_sp;
          echo '
        <a href="" class="w-1/6 bg-white rounded-2xl overflow-hidden mr-2 relative tab">
            <div class="justify-center items-center flex">
                <img src="' . $hinh . '" class="h-40" alt="">
            </div>
            <div class="mx-2 tracking-widest  text-sm">
                <p class="my-2">' . $Ten_hanghoa . '</p>
                <p class="my-2">4.8<i class="fas fa-star" style="color: #e2b332;"></i> | Đã bán 1000+
                </p>
                <p class="text-red-500 text-xl font-bold mt-8">' . $don_gia . ' <span
                        class="underline ml-1 mr-1">đ</span><span class=" font-normal">-35%</span> </p>
                <p>Hoàn 1 ASA</p>
            </div>
            <div class="absolute bottom-0 w-full">
            </div>
        </a>

   ';
        }
        ?>
      </div>
    </div>
    </div>
    </div>
    <div id="modulee" class="tabcontent">
      4
    </div>
    <div id="modulee3" class="tabcontent">

    </div>
    <div id="modulee1" class="tabcontent">
      6
    </div>
    </div>
    </div>
    <!-- Đây là một chú thích -->














    </div>
  </section>

</article>