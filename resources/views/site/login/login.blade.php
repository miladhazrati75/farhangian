<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-login.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/util-login.css">
    <link rel="stylesheet" type="text/css" href="css/main-login.css">
</head>
<body>

<div class="limiter">
    <div class="logoSite">
        <img src="img/logo.png" width="50px" alt="">
    </div>
    <div class="container-login100">
        <div class="text-center m-t-20">
            <h1 style="font-size: 37px">ورود به سایت</h1>
        </div>
        <div class="text-center m-t-20">
            <h4>سامانه کارورزی دانشگاه فرهنگیان</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 m-t-80">
                <div class="wrap-login100">
                    @if(session('loginError'))
                        <div class="alert alert-danger">
                            <p>
                                {{session('loginError')}}
                            </p>
                        </div>
                    @endif
                        <br>
                    <form class="login100-form validate-form" method="post" action="{{route('post-login')}}">
                        {{csrf_field()}}
                        <div class="wrap-input100 validate-input" >
                            <input class="input100" type="text" name="name">
                            <span class="focus-input100" data-placeholder="نام کاربری"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
										<span class="btn-show-pass">
												<i class="zmdi zmdi-eye"></i>
										</span>
                            <input class="input100" type="password" name="password">
                            <span class="focus-input100" data-placeholder="پسورد"></span>
                        </div>
                        <div class="row">

                            <div class="container-login100-form-btn col-lg-6">
                                <button class="login100-form-btn">
                                    ورود
                                </button>
                            </div>
                            <div class="col-lg-6 p-t-18">
												<span class="txt1">
												فراموش کردید؟
												</span>

                                <a class="txt2" href="#">
                                    کلیک کنید
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 m-t-80">
                <div class="wrap-login100Left">
                    <p>
                        ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="text-center m-b-20">
    <p>
        تمامی حقوق این وبسایت متعلق به دانشگاه فرهنگیان می باشد
    </p>
    <i class="fas fa-copyright"></i>
</footer>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/main-login.js"></script>
</body>
</html>
