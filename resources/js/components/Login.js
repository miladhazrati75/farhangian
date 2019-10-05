import React, { Component } from 'react'
import { Helmet } from 'react-helmet'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
class Login extends React.Component {
  render () {
    return (
        <div>
            <Helmet>
                <title>Login V2</title>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1"/>
                <link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
                <link rel="stylesheet" type="text/css" href="css/bootstrap-login.min.css"/>
                <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css"/>
                <link rel="stylesheet" type="text/css" href="css/util-login.css"/>
                <link rel="stylesheet" type="text/css" href="css/main-login.css"/>
            </Helmet>
            <div className="limiter">
                <div className="logoSite">
                    <img src="img/logo.png" width="50px" alt="" />
                </div>
                <div className="container-login100">
                    <div className="text-center m-t-20">
                        <h1 style={{fontSize: 37 + 'px'}}>ورود به سایت</h1>
                    </div>
                    <div className="text-center m-t-20">
                        <h4>سامانه کارورزی دانشگاه فرهنگیان</h4>
                    </div>
                    <div className="row">
                        <div className="col-lg-6 m-t-80">
                            <div className="wrap-login100">
                                <br />
                                <form className="login100-form validate-form" method="post" action="{{route('post-login')}}">
                                    <div className="wrap-input100 validate-input" >
                                        <input className="input100" type="text" name="name" />
                                        <span className="focus-input100" data-placeholder="نام کاربری"></span>
                                    </div>
                                    <div className="wrap-input100 validate-input">
                                        <span className="btn-show-pass">
                                            <i className="zmdi zmdi-eye"></i>
                                        </span>
                                        <input className="input100" type="password" name="password" />
                                        <span className="focus-input100" data-placeholder="پسورد"></span>
                                    </div>
                                    <div className="row">
                                        <div className="container-login100-form-btn col-lg-6">
                                            <button className="login100-form-btn">
                                                ورود
                                            </button>
                                        </div>
                                        <div className="col-lg-6 p-t-18">
                                            <span className="txt1">
                                                فراموش کردید؟
                                            </span>
                                            <a className="txt2" href="#">
                                                کلیک کنید
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div className="col-lg-6 m-t-80">
                            <div className="wrap-login100Left">
                                <p>
                                    ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer className="text-center m-b-20">
                <p>
                تمامی حقوق این وبسایت متعلق به دانشگاه فرهنگیان می باشد
                </p>
                <i className="fas fa-copyright"></i>
            </footer>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery-3.2.1.min.js"></script>
            <script src="../js/main-login.js"></script>
        </div>
    )
  }
}

export default Login;
