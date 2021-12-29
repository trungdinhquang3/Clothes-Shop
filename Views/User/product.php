<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <style>
      a:hover{
        color: aqua;
      }
      a{color:black}
    </style>
    </head>
    <body>
     <!--header part start-->                
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
     <script type="text/javascript" src="js/show-menu.js"></script>
     <header id="menu-navbar">
     </header>
    <!--header part end-->
    <!-- Product list -->
      <div class="container-fluid content">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="container large-left-sider">
              <div class="row">
                <div class="col-12 px-0 pt-5 pb-4 text-center pl-0">
                  <input class="search-box" type="text" placeholder="Search.." ><span><button class="search-button"><i class="fa fa-search" id="search-icon"></i></button></span>
                </div>
              </div>
              <div class="row pl-3">
                <div class="col-12 pt-3">
                  <p style="font-size:20px;text-transform: uppercase;font-weight: 600;">Danh mục</p>
                  <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-product"> Thời trang phụ nữ</span><br>
                  <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-product"> Thời trang đàn ông</span><br>
                  <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-product"> Thời trang trẻ em</span><br>
                  <span  class="text-bold" name="select-price"><input type="radio"  name="price" class="open-product"> Mỹ phẩm</span><br>
                  <span  class="text-bold" name="select-price"><input type="radio"  name="price" class="open-product"> Đồ hiệu</span><br>
                </div>

                <div class="col-12 pt-3">
                  <p style="font-size:20px;text-transform: uppercase;font-weight: 600;">Giá</p>
                  <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-product"> 50.000-100.000</span><br>
                  <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-product"> 100.000-300.000</span><br>
                  <span  class="text-bold" name="select-price"><input type="radio" name="price" class="open-product"> 300.000-800.000</span><br>
                  <span  class="text-bold" name="select-price"><input type="radio"  name="price" class="open-product">800.000-3.000.000</span><br>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 pl-0" style="border-left:1px solid grey">
            <div class="container large-right-sider">
              <div class="row pt-5 hide-front-page">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                  <div class="product-item">
                    <div class="product-item-pic">
                      <a href="./each-product.html"><img src="images/product-1.jpg" style="height: 360px;" alt=""></a>
                      <div class="label">Hot sale</div>
                      <ul class="product-hover">
                        <li><a href="#"><i class="fa fa-shopping-bag">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-heart">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-arrows-alt">
                        </i></a></li>
                      </ul>
                    </div>
                    <div class="product-item-text">
                      <h6><a href="./each-product.html"> Áo thun không cổ đỏ</a></h6>
                    </div>
                    <div class="product-price">
                      130.000 Đồng
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                  <div class="product-item">
                    <div class="product-item-pic">
                      <a href="./each-product.html"><img src="images/product-2.jpg" style="height: 360px;" alt=""></a>
                      <div class="label">new</div>
                      <ul class="product-hover">
                        <li><a href="#"><i class="fa fa-shopping-bag">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-heart">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-arrows-alt">
                        </i></a></li>
                      </ul>
                    </div>
                    <div class="product-item-text">
                      <h6><a href="./each-product.html"> Giày HRX</a></h6>
                    </div>
                    <div class="product-price">
                      369.000 Đồng
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                  <div class="product-item">
                    <div class="product-item-pic">
                      <a href="./each-product.html"><img src="images/product-3.jpg" style="height: 360px;" alt=""></a>
                      <div class="label">new</div>
                      <ul class="product-hover">
                        <li><a href="#"><i class="fa fa-shopping-bag">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-heart">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-arrows-alt">
                        </i></a></li>
                      </ul>
                    </div>
                    <div class="product-item-text">
                      <h6><a href="./each-product.html">quần jogger</a></h6>
                    </div>
                    <div class="product-price">
                      185.000 Đồng
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                  <div class="product-item">
                    <div class="product-item-pic">
                      <a href="./each-product.html"><img src="images/product-4.jpg" style="height: 360px;" alt=""></a>
                      <div class="label">best sale</div>
                      <ul class="product-hover">
                        <li><a href="#"><i class="fa fa-shopping-bag">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-heart">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-arrows-alt">
                        </i></a></li>
                      </ul>
                    </div>
                    <div class="product-item-text">
                      <h6><a href="./each-product.html"> Áo polo</a></h6>
                    </div>
                    <div class="product-price">
                      169.000 Đồng
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                  <div class="product-item">
                    <div class="product-item-pic">
                      <a href=""><img src="images/product-5.jpg" style="height: 360px;" alt=""></a>
                      <div class="label">best sale</div>
                      <ul class="product-hover">
                        <li><a href="#"><i class="fa fa-shopping-bag">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-heart">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-arrows-alt">
                        </i></a></li>
                      </ul>
                    </div>
                    <div class="product-item-text">
                      <h6><a href="./each-product.html"> Giày Jordan</a></h6>
                    </div>
                    <div class="product-price">
                      569.000 Đồng
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                  <div class="product-item">
                    <div class="product-item-pic">
                      <a href="./each-product.html"><img src="images/product-6.jpg" style="height: 360px;" alt=""></a>
                      <div class="label">best sale</div>
                      <ul class="product-hover">
                        <li><a href="#"><i class="fa fa-shopping-bag">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-heart">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-arrows-alt">
                        </i></a></li>
                      </ul>
                    </div>
                    <div class="product-item-text">
                      <h6><a href="./each-product.html"> Áo Puma</a></h6>
                    </div>
                    <div class="product-price">
                      69.000 Đồng
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                  <div class="product-item">
                    <div class="product-item-pic">
                      <a href="./each-product.html"><img src="images/product-7.jpg" style="height: 360px;" alt=""></a>
                      <div class="label">best sale</div>
                      <ul class="product-hover">
                        <li><a href="#"><i class="fa fa-shopping-bag">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-heart">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-arrows-alt">
                        </i></a></li>
                      </ul>
                    </div>
                    <div class="product-item-text">
                      <h6><a href="./each-product.html"> Tắt HRX</a></h6>
                    </div>
                    <div class="product-price">
                      30.000 Đồng
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6  text-center">
                  <div class="product-item">
                    <div class="product-item-pic">
                      <a href="./each-product.html"><img src="images/product-8.jpg" style="height: 360px;" alt=""></a>
                      <div class="label">new</div>
                      <ul class="product-hover">
                        <li><a href="#"><i class="fa fa-shopping-bag">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-heart">
                        </i></a></li>
                        <li><a href="#"><i class="fa fa-arrows-alt">
                        </i></a></li>
                      </ul>
                    </div>
                    <div class="product-item-text">
                      <h6><a href="./each-product.html">Đồng hồ FOSSIL</a></h6>
                    </div>
                    <div class="product-price">
                      590.000 Đồng
                    </div>
                  </div>
                </div>
              </div>
              <div class="row next-page-header pt-5">
                <div class="col next-page" style="z-index: 0;">
                  <ul class="pagination" style="display: flex;justify-content: center;">
                    <li class="page-item prev"><a class="page-link" href="#/"  style="color:black">Previous</a></li>
                    <li ><a class="page-link" href="#/"  style="color:black">1</a></li>
                    <li><a class="page-link" href="#/"  style="color:black">2</a></li>
                    <li ><a class="page-link" href="#/"  style="color:black">3</a></li>
                    <li ><a class="page-link" href="#/"  style="color:black">4</a></li>
                    <li ><a class="page-link" href="#/"  style="color:black">5</a></li>
                    <li class="page-item next"><a class="page-link" href="#/"  style="color:black">Next</a></li>
                  </ul>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    <!-- End Product -->
     <!--footer-->
     <div class="container-fluid bg-dark text-white">
        <div class="container">
        <div class="row ">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 footer pt-5">
            <p style="font-size:20px;text-transform: uppercase;font-weight: 800;" data-aos="slide-right">Clothing Shop</p>
            <p data-aos="slide-right">Nhãn hiệu
            thời trang hàng đầu Việt Nam</p>
          </div>
          <div class="col-xl-3 pt-5 hide-girl">
            <p style="font-size:20px;font-weight: 800;">Sản phẩm</p>
            <p >Áo quần</p>
            <p >Giày dép</p>
            <p>Giỏ xách</p>
            <p >Đồ hiệu</p>
         </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 footer  pt-5">
            <p style="font-size:20px;font-weight: 800;">Các chi nhánh</p>
            <p>Cloting Shop 1</p>
            <p>Cloting Shop 2</p>
            <p>Cloting Shop 3</p>
            <p>Cloting Shop 5</p>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12 footer pt-5 pb-3">
            <p style="font-size:20px;font-weight: 800;">CONTACT</p>
            <p ><i class="fa fa-home"  style="font-size:20px;"></i>&nbsp; Ho Chi Minh City, 10012,</p>
            <p ><i class="fa fa-envelope" ></i>&nbsp; info@gmail.com</p>
            <p ><i class="fa fa-phone" ></i>&nbsp; + 01 234 567 88</p>
            <p ><i class="fa fa-print" ></i>&nbsp; + 01 234 567 89</p>
          </div>
        </div>
      </div>
      <hr style="color:white;width:100%;border:1px solid">
      <div class="container mt-4 pb-4">
        <div class="row">
          <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
            <p>© 2021 Copyright<span style="font-weight:600"></span></p>
          </div>
        </div>
      </div>
      </div>
      <!--footer--> 
      <script src="js/script.js"></script> 
      <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>