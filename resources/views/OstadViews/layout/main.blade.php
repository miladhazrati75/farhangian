<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>@yield('title')</title>
    <meta name="description" content="dashboard site uni farhangian."/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
@yield('meta')
<!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/jquery.toast.min.css">
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
                           <span class="brand-text">
                              <p class="titr-asli">دانشگاه فرهنگیان</p>
                           </span>
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
                    class="top-nav-icon-badge">{{$count}}</span></a>
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
                                @foreach ($notifications as $notification)
                                @if ($notification->type == "internship")
                                <div class="sl-item">
                                    <a href="#">
                                        <div class="icon bg-green">
                                            <i class="zmdi zmdi-flag"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                {{$notification->body}}
                                            </span>
                                            <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">
                                                مشتری شما برای طرح پایه مشترک شده است. مشتری 25 دلار در
                                                ماه پرداخت خواهد کرد.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                @else
                                <div class="sl-item">
                                    <a href="#">
                                        <div class="icon bg-green">
                                            <i class="zmdi zmdi-flag"></i>
                                        </div>
                                        <div class="sl-content">
                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                {{$notification->body}}
                                            </span>
                                            <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                            <div class="clearfix"></div>
                                            <p class="truncate">
                                                مشتری شما برای طرح پایه مشترک شده است. مشتری 25 دلار در
                                                ماه پرداخت خواهد کرد.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                @endif
                                @endforeach
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
                    <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
                        <img src="/img/ostad-profile.jpg" alt="user_auth" class="user-auth-img img-circle"/>
                        <span class="user-online-status"></span>
                    </a>
                    <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX"
                        data-dropdown-out="flipOutX">
                        <li class="pt-10 pb-10 bg-blue ">
                            <a href="#" style="color:#ffffff"><span>استاد : </span><span>عبدالله الهی</span> </a>
                        </li>
                        <li>
                            <a href="{{route('profile-student')}}"><i class="zmdi zmdi-account"></i><span>ویرایش پروفایل</span></a>
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
                            <a href="{{route('logout')}}"><i class="zmdi zmdi-power"></i><span>خروج</span></a>
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
                <a class="active" href="{{route('ostad-darkhast-karvarzi-list')}}" data-toggle="collapse" data-target="#dashboard_dr">
                    <div class="pull-left"><i class="zmdi zmdi-file-add mr-20"></i><span class="right-nav-text">ثبت کارورزی</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('sabtshode-karvarzi')}}" data-toggle="collapse" data-target="#ecom_dr">
                    <div class="pull-left"><i class="zmdi zmdi-comment-text-alt mr-20"></i><span class="right-nav-text">کارورزی های ثبت شده</span>
                    </div>
                    <div class="pull-right"></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <hr class="light-grey-hr mb-10"/>
            </li>
            <li>
                <a href="{{route('report')}}" data-toggle="collapse" data-target="#ui_dr">
                    <div class="pull-left"><i class="zmdi zmdi-calendar-check mr-20" style="font-size:20px;"></i><span class="right-nav-text">گزارش های کارورزی</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#form_dr">
                    <div class="pull-left"><i class="zmdi zmdi-square-down mr-20"></i><span
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
                    <div class="pull-left"><i class="zmdi zmdi-time-interval mr-20"></i><span class="right-nav-text">سابقه کارورزی </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('gheibatha')}}" data-toggle="collapse" data-target="#table_dr">
                    <div class="pull-left"><i class="zmdi zmdi-border-color mr-20"></i><span class="right-nav-text">گزارش غیبت ها</span>
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
                                                                        since we last met?
                                                                    </p>
                                                                    <div class="msg-per-detail text-right">
                                                                        <span class="msg-time txt-grey">2:30 PM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </li>
                                                        <li class="self mb-10">
                                                            <div class="self-msg-wrap">
                                                                <div class="msg block pull-right">
                                                                    Oh, hi Sarah I'm have
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
                                                                <div class="msg block pull-right">
                                                                    How about you?
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
                                                        از صنعت چاپ و با است.
                                                    </p>
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
                                                        و با ملت  از   گرافیک است.
                                                    </p>
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
                                                        با از گرافیک است.
                                                    </p>
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
                                                        با از گرافیک است.
                                                    </p>
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
                                                        با از گرافیک است.
                                                    </p>
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
                                                        صنعت چاپ و با از گرافیک است.
                                                    </p>
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
                                                        بااز گرافیک است.
                                                    </p>
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

<div class="jq-toast-wrap top-right"><div class="jq-toast-single jq-has-icon jq-icon-success" style="text-align: left; display: none;"><span class="jq-toast-loader jq-toast-loaded" style="-webkit-transition: width 3.1s ease-in;                       -o-transition: width 3.1s ease-in;                       transition: width 3.1s ease-in;                       background-color: #f0c541;"></span><span class="close-jq-toast-single">×</span><h2 class="jq-toast-heading">به Philbert خوش آمدید</h2>ترجمه و راستچینی توسط ملت وب</div></div>
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
<script src="/js/jquery.toast.min.js"></script>
@yield('script')


</body>
</html>
