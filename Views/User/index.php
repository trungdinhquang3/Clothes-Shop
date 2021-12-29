<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Clothing Shop</title>
</head>
<body>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="js/show-menu.js"></script>
  <header id="menu-navbar">
  </header>

  <!-- /header -->

  <main>

<!-- first slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider-image3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider-image2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider-image3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="categories" style="margin-top: 10px">
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div class="categories_item">
            <img src="images/category-1.jpg" alt="" class="img-fluid">
            <div class="categories-text">
              <h4>Thời trang phụ nữ</h4>
              <p>Bộ sưu tầm thời trang 2021 mới nhất</p>
              <a href="product.html">Mua ngay</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12 p-0">
              <div class="categories_item">
                <img src="images/category-2.jpg" alt="" class="img-fluid">
                <div class="categories-text">
                  <h4>Thời trang đàn ông</h4>
                  <a href="product.html">Mua ngay</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
              <div class="categories_item">
                <img src="images/category-3.jpg" alt="" class="img-fluid">
                <div class="categories-text">
                  <h4>Thời trang trẻ em</h4>
                  <a href="product.html">Mua ngay</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
              <div class="categories_item">
                <img src="images/category-4.jpg" alt="" class="img-fluid">
                <div class="categories-text">
                  <h4>Mỹ phẩm</h4>
                  <a href="product.html">Mua ngay</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
              <div class="categories_item">
                <img src="images/category-5.jpg" alt="" class="img-fluid">
                <div class="categories-text">
                  <h4>Phụ kiện</h4>
                  <a href="product.html">Mua ngay</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>

  <section class = "product spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <h4>SẢN PHẨM MỚI</h4>
          </div>
        </div> 
      </div>

      <div class="row property_gallery">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-item-pic">
              <img src="images/product_1.jpg" alt="">
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
              <h6><a href="#"> Áo hoodie màu đen</a></h6>
            </div>
            <div class="product-price">
              69.000 Đồng
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-item-pic">
              <img src="images/product_1.jpg" alt="">
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
              <h6><a href="#"> Áo hoodie màu đen</a></h6>
            </div>
            <div class="product-price">
              69.000 Đồng
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-item-pic">
              <img src="images/product_1.jpg" alt="">
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
              <h6><a href="#"> Áo hoodie màu đen</a></h6>
            </div>
            <div class="product-price">
              69.000 Đồng
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-item-pic">
              <img src="images/product_1.jpg" alt="">
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
              <h6><a href="#"> Áo hoodie màu đen</a></h6>
            </div>
            <div class="product-price">
              69.000 Đồng
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-item-pic">
              <img src="images/product_1.jpg" alt="">
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
              <h6><a href="#"> Áo hoodie màu đen</a></h6>
            </div>
            <div class="product-price">
              69.000 Đồng
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-item-pic">
              <img src="images/product_1.jpg" alt="">
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
              <h6><a href="#"> Áo hoodie màu đen</a></h6>
            </div>
            <div class="product-price">
              69.000 Đồng
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-item-pic">
              <img src="images/product_1.jpg" alt="">
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
              <h6><a href="#"> Áo hoodie màu đen</a></h6>
            </div>
            <div class="product-price">
              69.000 Đồng
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product-item">
            <div class="product-item-pic">
              <img src="images/product_1.jpg" alt="">
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
              <h6><a href="#"> Áo hoodie màu đen</a></h6>
            </div>
            <div class="product-price">
              69.000 Đồng
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  </main>
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