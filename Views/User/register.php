<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-11/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <!--header part start-->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/show-menu.js"></script>
    <header id="menu-navbar">
    </header>
    <!--header part end-->
    <div class="row justify-content-center mt-5 mb-3">
        <div class="col-md-7 col-lg-6 col-xl-5">
            <div class="login-wrap p-4 p-md-5">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-edit"></span>
                </div>
                <h3 class="text-center mb-2">Create Your Account</h3>
                <form action="#" class="signup-form" method="POST">
                    <div class="form-group mb-3">
                        <label class="label" for="name">User Name</label>
                        <input type="text" class="form-control" id="username" placeholder="User name" name="usernameForm" onfocusout='checkUserName()'>
                        <div id="userName-register-error-container" style="text-align:left"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="label" for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Password" onfocusout='checkPassword()'>
                        <div id="password-register-error-container" style="text-align:left"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="label" for="email">Email Address</label>
                        <input type="text" class="form-control" id="email" placeholder="Email" onfocusout='checkEmail()'>
                        <div id="email-register-error-container" style="text-align:left"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="label" for="email">Phone number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone Number" onfocusout='checkPhoneNumber()'>
                        <div id="phone-register-error-container" style="text-align:left"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="label" for="email">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Address" onfocusout='checkAddress()'>
                        <div id="address-register-error-container" style="text-align:left"></div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="form-control btn rounded submit px-3" onclick='sendRegisterInfo()' >Sign Up</button>
                    </div>
                </form>
                <p>I'm already a member! <a data-toggle="tab" href="login.php">Sign In</a></p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-white">
        <div class="container">
            <div class="row ">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 footer pt-5">
                    <p style="font-size:20px;text-transform: uppercase;font-weight: 800;" data-aos="slide-right">
                        Clothing Shop</p>
                    <p data-aos="slide-right">Nhãn hiệu
                        thời trang hàng đầu Việt Nam</p>
                </div>
                <div class="col-xl-3 pt-5 hide-girl">
                    <p style="font-size:20px;font-weight: 800;">Sản phẩm</p>
                    <p>Áo quần</p>
                    <p>Giày dép</p>
                    <p>Giỏ xách</p>
                    <p>Đồ hiệu</p>
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
                    <p><i class="fa fa-home" style="font-size:20px;"></i>&nbsp; Ho Chi Minh City, 10012,</p>
                    <p><i class="fa fa-envelope"></i>&nbsp; info@gmail.com</p>
                    <p><i class="fa fa-phone"></i>&nbsp; + 01 234 567 88</p>
                    <p><i class="fa fa-print"></i>&nbsp; + 01 234 567 89</p>
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
    
    <script type="text/javascript" src="js/register.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    


</body>

</html>