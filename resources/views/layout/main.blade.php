<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>@yield('title')</title>
    <meta name="description" content="dashboard site uni farhangian."/>
    <meta name="keywords"
          content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application"/>
    <meta name="author" content="hencework"/>
    @yield('meta')
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    @yield('stylesheet')
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper theme-1-active pimary-color-green">
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="mobile-only-brand pull-left">
            <div class="nav-header pull-left">
                <div class="logo-wrap">
                    <ul class="titr-img">
                        <li>
                            <img class="brand-img" src="/img/logo.png" alt="brand"/>
                        </li>
                        <li>
                            <span class="brand-text"><p class="titr-asli">دانشگاه فرهنگیان</p> </span>

                        </li>
                    </ul>


                </div>
            </div>
            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="#"><i
                    class="zmdi zmdi-menu"></i></a>
            <a id="toggle_mobile_nav" class="mobile-only-view" href="#"><i class="fa fa-ellipsis-v"
                                                                           aria-hidden="true"></i></a>
        </div>
        <div id="mobile_only_nav" class="mobile-only-nav pull-right">
            <ul class="nav navbar-right top-nav pull-right">
                <li class=" mt-4">
                    <a id="open_right_sidebar" href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"
                                                              style="font-size: 17px;margin-top:23px;"></span></a>
                </li>

                <li class="dropdown alert-drp">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="zmdi zmdi-notifications top-nav-icon"></i><span
                            class="top-nav-icon-badge">5</span></a>
                    <ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                        <li>
                            <div class="notification-box-head-wrap">
                                <span class="notification-box-head pull-left inline-block">اعلانات</span>
                                <a class="txt-danger pull-right clear-notifications inline-block" href="#"> حذف همه </a>
                                <div class="clearfix"></div>
                                <hr class="light-grey-hr ma-0"/>
                            </div>
                        </li>
                        <li>
                            <div class="streamline message-nicescroll-bar">
                                <div class="sl-item">
                                    <a href="#">
                                        <div class="icon bg-green">
                                            <i class="zmdi zmdi-flag"></i>
                                        </div>
                                        <div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												اشتراک جدید ایجاد شد</span>
                                            <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">مشتری شما برای طرح پایه مشترک شده است. مشتری 25 دلار در
                                                ماه پرداخت خواهد کرد.</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="#">
                                        <div class="icon bg-yellow">
                                            <i class="zmdi zmdi-trending-down"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">سرور # 2 پاسخ نمی دهد</span>
                                            <span class="inline-block font-11 pull-right notifications-time">1pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">برخی از خطاهای فنی رخ داده باید حل شوند</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="#">
                                        <div class="icon bg-blue">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">2 پیام جدید</span>
                                            <span class="inline-block font-11  pull-right notifications-time">4pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate"> آخرین پرداختی برای اشتراک G Suite Basic شما انجام
                                                نشد</p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="#">
                                        <div class="sl-avatar">
                                            <img class="img-responsive" src="/img/download.jpg" alt="avatar"/>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">متن ساختگی</span>
                                            <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">متن ساختگی با تولید سادگی از صنعت چاپ و با از گرافیک
                                                است. </p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                    <a href="#">
                                        <div class="icon bg-red">
                                            <i class="zmdi zmdi-storage"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99٪ فضای سرور اشغال شده است</span>
                                            <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">متن ساختگی</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="notification-box-bottom-wrap">
                                <hr class="light-grey-hr ma-0"/>
                                <a class="block text-center read-all" href="#"> خواندن همه </a>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown auth-drp">
                    <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="/img/user1.png"
                                                                                         alt="user_auth"
                                                                                         class="user-auth-img img-circle"/><span
                            class="user-online-status"></span></a>
                    <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX"
                        data-dropdown-out="flipOutX">
                        <li>
                            <a href="#"><i class="zmdi zmdi-account"></i><span>پروفایل</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-email"></i><span>صندوق ورودی</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-settings"></i><span>تنظیمات</span></a>
                        </li>
                        <li class="divider"></li>

                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="zmdi zmdi-power"></i><span>خروج</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Top Menu Items -->


    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
        <ul class="nav navbar-nav side-nav nicescroll-bar">
            <li class="navigation-header">
                <span>منوها</span>
                <i class="zmdi zmdi-more"></i>
            </li>
            <li>
                <a class="active" href="#" data-toggle="collapse" data-target="#dashboard_dr">
                    <div class="pull-left"><i class="zmdi zmdi-file-add mr-20"></i><span class="right-nav-text">ثبت کارورزی</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('student-list')}}" data-toggle="collapse" data-target="#ecom_dr">
                    <div class="pull-left"><i class="zmdi zmdi-comment-text-alt mr-20"></i><span class="right-nav-text">لیست دانشجویان</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('Professors-list')}}" data-toggle="collapse" data-target="#ecom_dr">
                    <div class="pull-left"><i class="zmdi zmdi-comment-text-alt mr-20"></i><span class="right-nav-text">لیست اساتید</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('place-list')}}">
                    <div class="pull-left"><i class="zmdi zmdi-gps mr-20"></i><span
                            class="right-nav-text">لیست حوزه ها</span></div>
                    <div class="pull-right"><span class="label label-warning">8</span></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <hr class="light-grey-hr mb-10"/>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#ui_dr">
                    <div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">گزارش های کارورزی</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#form_dr">
                    <div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span
                            class="right-nav-text">فرم ها</span></div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="form_dr" class="collapse collapse-level-1 two-col-list">
                    <li>
                        <a href="#">فرم های پایه</a>
                    </li>
                    <li>
                        <a href="#">فرم پیشرفته</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#chart_dr">
                    <div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">سابقه کارورزی </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#table_dr">
                    <div class="pull-left"><i class="zmdi zmdi-calendar-note mr-20"></i><span class="right-nav-text">گزارش غیبت ها</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#icon_dr">
                    <div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">مورد دیگر</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li>
                <hr class="light-grey-hr mb-10"/>
            </li>


        </ul>
    </div>
    <!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
    <div class="fixed-sidebar-right">
        <ul class="right-sidebar">
            <li>
                <div class="tab-struct custom-tab-1">
                    <ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
                        <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab"
                                                                  id="chat_tab_btn" href="#chat_tab">گفتگو</a></li>
                        <li role="presentation" class=""><a data-toggle="tab" id="messages_tab_btn" role="tab"
                                                            href="#messages_tab" aria-expanded="false">پیامها</a></li>
                    </ul>
                    <div class="tab-content" id="right_sidebar_content">
                        <div id="chat_tab" class="tab-pane fade active in" role="tabpanel">
                            <div class="chat-cmplt-wrap">
                                <div class="chat-box-wrap">
                                    <div class="add-friend">
                                        <a href="#" class="inline-block txt-grey">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <span class="inline-block txt-dark">کاربران</span>
                                        <a href="#" class="inline-block text-right txt-grey"><i
                                                class="zmdi zmdi-plus"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <form role="search" class=" pl-15 pr-15 pb-15">
                                        <div class="input-group">
                                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                   class="form-control" placeholder="جستجو">
                                            <span class="input-group-btn">
												<button type="button" class="btn btn-default rounded-0"><i
                                                        class="zmdi zmdi-search"></i></button>
												</span>
                                        </div>
                                    </form>
                                    <div id="chat_list_scroll">
                                        <div class="nicescroll-bar">
                                            <ul class="chat-list-wrap">
                                                <li class="chat-list">
                                                    <div class="chat-body">
                                                        <a href="#">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle" src="/img/user.png"
                                                                     alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">استاد مصطفوی</span>
                                                                    <span class="time block truncate txt-grey">هیچ کس ما را نجات نمی دهد، بلکه خودمان.</span>
                                                                </div>
                                                                <div class="status away"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle" src="/img/user1.png"
                                                                     alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">استاد همت افزا</span>
                                                                    <span class="time block truncate txt-grey">اتحاد قدرت است</span>
                                                                </div>
                                                                <div class="status offline"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>
                                                        <a href="#">
                                                            <div class="chat-data">
                                                                <img class="user-img img-circle" src="/img/user2.png"
                                                                     alt="user"/>
                                                                <div class="user-data">
                                                                    <span class="name block capitalize-font">استاد اسکندری</span>
                                                                    <span class="time block truncate txt-grey">متن ساختگی با تولید سادگی از صنعت چاپ</span>
                                                                </div>
                                                                <div class="status online"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </a>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-chat-box-wrap">
                                    <div class="recent-chat-wrap">
                                        <div class="panel-heading ma-0">
                                            <div class="goto-back">
                                                <a id="goto_back" href="#" class="inline-block txt-grey">
                                                    <i class="zmdi zmdi-chevron-left"></i>
                                                </a>
                                                <span class="inline-block txt-dark">ryan</span>
                                                <a href="#" class="inline-block text-right txt-grey"><i
                                                        class="zmdi zmdi-more"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body pa-0">
                                                <div class="chat-content">
                                                    <ul class="nicescroll-bar pt-20">
                                                        <li class="friend">
                                                            <div class="friend-msg-wrap">
                                                                <img class="user-img img-circle block pull-left"
                                                                     src="/img/user.png" alt="user"/>
                                                                <div class="msg pull-left">
                                                                    <p>Hello Jason, how are you, it's been a long time
                                                                        since we last met?</p>
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:30 PM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="self mb-10">
                                                            <div class="self-msg-wrap">
                                                                <div class="msg block pull-right"> Oh, hi Sarah I'm have
                                                                    got a new job now and is going great.
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:31 pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="self">
                                                            <div class="self-msg-wrap">
                                                                <div class="msg block pull-right"> How about you?
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:31 pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="friend">
                                                            <div class="friend-msg-wrap">
                                                                <img class="user-img img-circle block pull-left"
                                                                     src="/img/user.png" alt="user"/>
                                                                <div class="msg pull-left">
                                                                    <p>Not too bad.</p>
                                                                    <div class="msg-per-detail  text-right">
                                                                        <span class="msg-time txt-grey">2:35 pm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" id="input_msg_send" name="send-msg"
                                                           class="input-msg-send form-control"
                                                           placeholder="Type something">
                                                    <div class="input-group-btn emojis">
                                                        <div class="dropup">
                                                            <button type="button"
                                                                    class="btn  btn-default  dropdown-toggle"
                                                                    data-toggle="dropdown"><i
                                                                    class="zmdi zmdi-mood"></i></button>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-btn attachment">
                                                        <div class="fileupload btn  btn-default"><i
                                                                class="zmdi zmdi-attachment-alt"></i>
                                                            <input type="file" class="upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="messages_tab" class="tab-pane fade" role="tabpanel">
                            <div class="message-box-wrap">
                                <div class="msg-search">
                                    <a href="#" class="inline-block txt-grey">
                                        <i class="zmdi zmdi-more"></i>
                                    </a>
                                    <span class="inline-block txt-dark">پیامها</span>
                                    <a href="#" class="inline-block text-right txt-grey"><i
                                            class="zmdi zmdi-search"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="set-height-wrap">
                                    <div class="streamline message-box nicescroll-bar">
                                        <a href="#">
                                            <div class="sl-item unread-message">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/img/user.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                    <span class="inline-block font-11  pull-right message-time">12:28 AM</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">پیام Themeworld از طریق مشخصات نمایه انویتو شما ارسال شد</span>
                                                    <p class="txt-grey truncate">ایپسوم متن ساختگی با تولید سادگی
                                                         از صنعت چاپ و با است. </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/img/user1.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                    <span class="inline-block font-11  pull-right message-time">1 Feb</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">پایان پروژه بی نهایت</span>
                                                    <p class="txt-grey truncate"> متن ساختگی با تولید سادگی از صنعت چاپ
                                                        و با ملت  از   گرافیک است. </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/img/user2.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                    <span class="inline-block font-11  pull-right message-time">31 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">تبریک از نامزدهای طراحی</span>
                                                    <p class="txt-grey truncate">متن ساختگی با تولید سادگی از صنعت چاپ و
                                                        با از گرافیک است. </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="sl-item unread-message">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/img/user3.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                    <span class="inline-block font-11  pull-right message-time">29 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">پیام پشتیبانی از موضوع Themeforest</span>
                                                    <p class="txt-grey truncate">متن ساختگی با تولید سادگی از صنعت چاپ و
                                                        با از گرافیک است. </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="sl-item unread-message">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/img/user4.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                    <span class="inline-block font-11  pull-right message-time">27 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">راهنما با فرم تماس</span>
                                                    <p class="txt-grey truncate">متن ساختگی با تولید سادگی از صنعت چاپ و
                                                        با از گرافیک است. </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/img/user.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                    <span class="inline-block font-11  pull-right message-time">19 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject">تم آپلود شده شما انتخاب شده است</span>
                                                    <p class="txt-grey truncate"> متن ساختگی با تولید سادگی  وب از
                                                        صنعت چاپ و با از گرافیک است. </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="sl-item">
                                                <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                    <img class="img-responsive img-circle" src="/img/user1.png"
                                                         alt="avatar"/>
                                                </div>
                                                <div class="sl-content">
                                                    <span class="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                    <span class="inline-block font-11  pull-right message-time">13 Jan</span>
                                                    <div class="clearfix"></div>
                                                    <span class=" truncate message-subject"> امتیاز جدید دریافت شده است</span>
                                                    <p class="txt-grey truncate">متن ساختگی با تولید سادگی از صنعت چاپ و
                                                        بااز گرافیک است. </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- /Right Sidebar Menu -->


    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    <!-- Main Content -->
    <div class="page-wrapper mt-20">
        <div class="container-fluid">
         @yield('content')

         <!-- Footer -->
             <footer class="footer container-fluid pl-30 pr-30">
                 <div class="row">
                     <div class="col-sm-12">
                         <p class="footer-text">کلیه حقوق این سایت متعلق به دانشگاه فرهنگیان است ©</p>
                     </div>
                 </div>
             </footer>
             <!-- /Footer -->
        </div>
    </div>
    <!-- /Main Content -->
</div>
<!-- /#wrapper -->


<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="/js/dropdown-bootstrap-extended.js"></script>

<!-- Init JavaScript -->
<script src="/js/init.js"></script>
<script src="/js/dashboard-data.js"></script>
@yield('script')
</body>
</html>
