import React, { Component } from 'react'
import {Helmet} from 'react-helmet';
import { Link, BrowserRouter, Route, Switch } from 'react-router-dom'
import StudentsList from './StudentsList'
import AddUser from './AddUser';
import EditStudent from './EditStudent';
class Dashboard extends React.Component {
  render () {
    return (
        <BrowserRouter>
        <div>
            <Helmet>
                <title>asdfgh</title>
                <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
                <meta charset="UTF-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
                <meta name="description" content="dashboard site uni farhangian."/>
                <meta name="keywords"
                    content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application"/>
                <meta name="author" content="hencework"/>
            </Helmet>
            <div className="wrapper theme-1-active pimary-color-green">
                <nav className="navbar navbar-inverse navbar-fixed-top">
                    <div className="mobile-only-brand pull-left">
                        <div className="nav-header pull-left">
                            <div className="logo-wrap">
                                <ul className="titr-img">
                                    <li>
                                        <img className="brand-img" src="../../img/logo.png" alt="brand"/>
                                    </li>
                                    <li>
                                        <span className="brand-text"><p className="titr-asli">دانشگاه فرهنگیان</p> </span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a id="toggle_nav_btn" className="toggle-left-nav-btn inline-block ml-20 pull-left" href="#">
                            <i className="zmdi zmdi-menu"></i>
                        </a>
                        <a id="toggle_mobile_nav" className="mobile-only-view" href="#">
                            <i className="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div id="mobile_only_nav" className="mobile-only-nav pull-right">
                        <ul className="nav navbar-right top-nav pull-right">
                            <li className=" mt-4">
                                <a id="open_right_sidebar" href="#"><span className="glyphicon glyphicon-envelope" aria-hidden="true" style={{fontSize: 17 + 'px', marginTop: 23 + 'px'}}></span></a>
                            </li>
                            <li className="dropdown alert-drp">
                                <a href="#" className="dropdown-toggle" data-toggle="dropdown">
                                    <i className="zmdi zmdi-notifications top-nav-icon"></i>
                                    <span className="top-nav-icon-badge">5</span>
                                </a>
                                <ul className="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                                    <li>
                                        <div className="notification-box-head-wrap">
                                            <span className="notification-box-head pull-left inline-block">اعلانات</span>
                                            <a className="txt-danger pull-right clear-notifications inline-block" href="#"> حذف همه </a>
                                            <div className="clearfix"></div>
                                            <hr className="light-grey-hr ma-0"/>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="streamline message-nicescroll-bar">
                                            <div className="sl-item">
                                                <a href="#">
                                                    <div className="icon bg-green">
                                                        <i className="zmdi zmdi-flag"></i>
                                                    </div>
                                                    <div className="sl-content">
                                                        <span className="inline-block capitalize-font  pull-left truncate head-notifications">
                                                            اشتراک جدید ایجاد شد
                                                        </span>
                                                        <span className="inline-block font-11  pull-right notifications-time">2pm</span>
                                                        <div className="clearfix"></div>
                                                        <p className="truncate">مشتری شما برای طرح پایه مشترک شده است. مشتری 25 دلار در
                                                        ماه پرداخت خواهد کرد.
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr className="light-grey-hr ma-0"/>
                                            <div className="sl-item">
                                                <a href="#">
                                                    <div className="icon bg-yellow">
                                                        <i className="zmdi zmdi-trending-down"></i>
                                                    </div>
                                                    <div className="sl-content">
                                                        <span className="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">سرور # 2 پاسخ نمی دهد</span>
                                                        <span className="inline-block font-11 pull-right notifications-time">1pm</span>
                                                        <div className="clearfix"></div>
                                                        <p className="truncate">برخی از خطاهای فنی رخ داده باید حل شوند</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr className="light-grey-hr ma-0"/>
                                            <div className="sl-item">
                                                <a href="#">
                                                    <div className="icon bg-blue">
                                                        <i className="zmdi zmdi-email"></i>
                                                    </div>
                                                    <div className="sl-content">
                                                        <span className="inline-block capitalize-font  pull-left truncate head-notifications">2 پیام جدید</span>
                                                        <span className="inline-block font-11  pull-right notifications-time">4pm</span>
                                                        <div className="clearfix"></div>
                                                        <p className="truncate"> آخرین پرداختی برای اشتراک G Suite Basic شما انجام
                                                            نشد</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr className="light-grey-hr ma-0"/>
                                            <div className="sl-item">
                                                <a href="#">
                                                    <div className="sl-avatar">
                                                        <img className="img-responsive" src="../../img/download.jpg" alt="avatar"/>
                                                    </div>
                                                    <div className="sl-content">
                                                        <span className="inline-block capitalize-font  pull-left truncate head-notifications">متن ساختگی</span>
                                                        <span className="inline-block font-11  pull-right notifications-time">1pm</span>
                                                        <div className="clearfix"></div>
                                                        <p className="truncate">متن ساختگی با تولید سادگی از صنعت چاپ و با از گرافیک
                                                            است. </p>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr className="light-grey-hr ma-0"/>
                                            <div className="sl-item">
                                                <a href="#">
                                                    <div className="icon bg-red">
                                                        <i className="zmdi zmdi-storage"></i>
                                                    </div>
                                                    <div className="sl-content">
                                                        <span className="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99٪ فضای سرور اشغال شده است</span>
                                                        <span className="inline-block font-11  pull-right notifications-time">1pm</span>
                                                        <div className="clearfix"></div>
                                                        <p className="truncate">متن ساختگی</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="notification-box-bottom-wrap">
                                            <hr className="light-grey-hr ma-0"/>
                                            <a className="block text-center read-all" href="#"> خواندن همه </a>
                                            <div className="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li className="dropdown auth-drp">
                                <a href="#" className="dropdown-toggle pr-0" data-toggle="dropdown">
                                    <img src="../../img/user1.png" alt="user_auth" className="user-auth-img img-circle"/>
                                    <span className="user-online-status"></span>
                                </a>
                                <ul className="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                    <li>
                                        <a href="#"><i className="zmdi zmdi-account"></i><span>پروفایل</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i className="zmdi zmdi-email"></i><span>صندوق ورودی</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i className="zmdi zmdi-settings"></i><span>تنظیمات</span></a>
                                    </li>
                                    <li className="divider"></li>

                                    <li className="divider"></li>
                                    <li>
                                        <a href="{{route('logout')}}"><i className="zmdi zmdi-power"></i><span>خروج</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div className="fixed-sidebar-left">
                    <ul className="nav navbar-nav side-nav nicescroll-bar">
                        <li className="navigation-header">
                            <span>منوها</span>
                            <i className="zmdi zmdi-more"></i>
                        </li>
                        <li>
                            <a className="active" href="#" data-toggle="collapse" data-target="#dashboard_dr">
                                <div className="pull-left"><i className="zmdi zmdi-file-add mr-20"></i><span className="right-nav-text">ثبت کارورزی</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <Link to="/Dashboard/StudentsList">
                                <div className="pull-left"><i className="zmdi zmdi-comment-text-alt mr-20"></i><span className="right-nav-text">لیست دانشجویان</span>
                                </div>
                                <div className="pull-right"></div>
                                <div className="clearfix"></div>
                            </Link>
                        </li>
                        <li>
                            <a href="{{route('Professors-list')}}" data-toggle="collapse" data-target="#ecom_dr">
                                <div className="pull-left"><i className="zmdi zmdi-collection-text mr-20"></i><span className="right-nav-text">لیست اساتید</span>
                                </div>
                                <div className="pull-right"></div>
                                <div className="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('place-list')}}">
                                <div className="pull-left"><i className="zmdi zmdi-pin-drop mr-20" style={{fontSize: 20 + 'px'}}></i><span
                                        className="right-nav-text">لیست حوزه ها</span></div>

                                <div className="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <hr className="light-grey-hr mb-10"/>
                        </li>

                        <li>
                            <a href="#" data-toggle="collapse" data-target="#ui_dr">
                                <div className="pull-left"><i className="zmdi zmdi-calendar-check mr-20" style={{fontSize: 20 + 'px'}}></i><span className="right-nav-text">گزارش های کارورزی</span>
                                </div>
                                <div className="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#form_dr">
                                <div className="pull-left"><i className="zmdi zmdi-square-down mr-20"></i><span
                                        className="right-nav-text">فرم ها</span></div>
                                <div className="pull-right"><i className="zmdi zmdi-caret-down"></i></div>
                                <div className="clearfix"></div>
                            </a>
                            <ul id="form_dr" className="collapse collapse-level-1 two-col-list">
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
                                <div className="pull-left"><i className="zmdi zmdi-time-interval mr-20"></i><span className="right-nav-text">سابقه کارورزی </span>
                                </div>
                                <div className="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#table_dr">
                                <div className="pull-left"><i className="zmdi zmdi-border-color mr-20"></i><span className="right-nav-text">گزارش غیبت ها</span>
                                </div>
                                <div className="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#icon_dr">
                                <div className="pull-left">
                                    <i className="zmdi zmdi-iridescent mr-20"></i>
                                    <span className="right-nav-text">مورد دیگر</span>
                                </div>
                                <div className="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <hr className="light-grey-hr mb-10"/>
                        </li>
                    </ul>
                </div>
                <div className="fixed-sidebar-right">
                    <ul className="right-sidebar">
                        <li>
                            <div className="tab-struct custom-tab-1">
                                <ul role="tablist" className="nav nav-tabs" id="right_sidebar_tab">
                                    <li className="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab"
                                                                            id="chat_tab_btn" href="#chat_tab">گفتگو</a></li>
                                    <li role="presentation" className=""><a data-toggle="tab" id="messages_tab_btn" role="tab"
                                                                        href="#messages_tab" aria-expanded="false">پیامها</a></li>
                                </ul>
                                <div className="tab-content" id="right_sidebar_content">
                                    <div id="chat_tab" className="tab-pane fade active in" role="tabpanel">
                                        <div className="chat-cmplt-wrap">
                                            <div className="chat-box-wrap">
                                                <div className="add-friend">
                                                    <a href="#" className="inline-block txt-grey">
                                                        <i className="zmdi zmdi-more"></i>
                                                    </a>
                                                    <span className="inline-block txt-dark">کاربران</span>
                                                    <a href="#" className="inline-block text-right txt-grey"><i
                                                            className="zmdi zmdi-plus"></i></a>
                                                    <div className="clearfix"></div>
                                                </div>
                                                <form role="search" className=" pl-15 pr-15 pb-15">
                                                    <div className="input-group">
                                                        <input type="text" id="example-input1-group2" name="example-input1-group2"
                                                            className="form-control" placeholder="جستجو"/>
                                                        <span className="input-group-btn">
                                                            <button type="button" className="btn btn-default rounded-0"><i
                                                                    className="zmdi zmdi-search"></i></button>
                                                            </span>
                                                    </div>
                                                </form>
                                                <div id="chat_list_scroll">
                                                    <div className="nicescroll-bar">
                                                        <ul className="chat-list-wrap">
                                                            <li className="chat-list">
                                                                <div className="chat-body">
                                                                    <a href="#">
                                                                        <div className="chat-data">
                                                                            <img className="user-img img-circle" src="../../img/user.png"
                                                                                alt="user"/>
                                                                            <div className="user-data">
                                                                                <span className="name block capitalize-font">استاد مصطفوی</span>
                                                                                <span className="time block truncate txt-grey">هیچ کس ما را نجات نمی دهد، بلکه خودمان.</span>
                                                                            </div>
                                                                            <div className="status away"></div>
                                                                            <div className="clearfix"></div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#">
                                                                        <div className="chat-data">
                                                                            <img className="user-img img-circle" src="../../img/user1.png"
                                                                                alt="user"/>
                                                                            <div className="user-data">
                                                                                <span className="name block capitalize-font">استاد همت افزا</span>
                                                                                <span className="time block truncate txt-grey">اتحاد قدرت است</span>
                                                                            </div>
                                                                            <div className="status offline"></div>
                                                                            <div className="clearfix"></div>
                                                                        </div>
                                                                    </a>
                                                                    <a href="#">
                                                                        <div className="chat-data">
                                                                            <img className="user-img img-circle" src="../../img/user2.png"
                                                                                alt="user"/>
                                                                            <div className="user-data">
                                                                                <span className="name block capitalize-font">استاد اسکندری</span>
                                                                                <span className="time block truncate txt-grey">متن ساختگی با تولید سادگی از صنعت چاپ</span>
                                                                            </div>
                                                                            <div className="status online"></div>
                                                                            <div className="clearfix"></div>
                                                                        </div>
                                                                    </a>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="recent-chat-box-wrap">
                                                <div className="recent-chat-wrap">
                                                    <div className="panel-heading ma-0">
                                                        <div className="goto-back">
                                                            <a id="goto_back" href="#" className="inline-block txt-grey">
                                                                <i className="zmdi zmdi-chevron-left"></i>
                                                            </a>
                                                            <span className="inline-block txt-dark">ryan</span>
                                                            <a href="#" className="inline-block text-right txt-grey"><i
                                                                    className="zmdi zmdi-more"></i></a>
                                                            <div className="clearfix"></div>
                                                        </div>
                                                    </div>
                                                    <div className="panel-wrapper collapse in">
                                                        <div className="panel-body pa-0">
                                                            <div className="chat-content">
                                                                <ul className="nicescroll-bar pt-20">
                                                                    <li className="friend">
                                                                        <div className="friend-msg-wrap">
                                                                            <img className="user-img img-circle block pull-left"
                                                                                src="../../img/user.png" alt="user"/>
                                                                            <div className="msg pull-left">
                                                                                <p>Hello Jason, how are you, it's been a long time
                                                                                    since we last met?</p>
                                                                                <div className="msg-per-detail text-right">
                                                                                    <span className="msg-time txt-grey">2:30 PM</span>
                                                                                </div>
                                                                            </div>
                                                                            <div className="clearfix"></div>
                                                                        </div>
                                                                    </li>
                                                                    <li className="self mb-10">
                                                                        <div className="self-msg-wrap">
                                                                            <div className="msg block pull-right"> Oh, hi Sarah I'm have
                                                                                got a new job now and is going great.
                                                                                <div className="msg-per-detail text-right">
                                                                                    <span className="msg-time txt-grey">2:31 pm</span>
                                                                                </div>
                                                                            </div>
                                                                            <div className="clearfix"></div>
                                                                        </div>
                                                                    </li>
                                                                    <li className="self">
                                                                        <div className="self-msg-wrap">
                                                                            <div className="msg block pull-right"> How about you?
                                                                                <div className="msg-per-detail text-right">
                                                                                    <span className="msg-time txt-grey">2:31 pm</span>
                                                                                </div>
                                                                            </div>
                                                                            <div className="clearfix"></div>
                                                                        </div>
                                                                    </li>
                                                                    <li className="friend">
                                                                        <div className="friend-msg-wrap">
                                                                            <img className="user-img img-circle block pull-left"
                                                                                src="../../img/user.png" alt="user"/>
                                                                            <div className="msg pull-left">
                                                                                <p>Not too bad.</p>
                                                                                <div className="msg-per-detail  text-right">
                                                                                    <span className="msg-time txt-grey">2:35 pm</span>
                                                                                </div>
                                                                            </div>
                                                                            <div className="clearfix"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div className="input-group">
                                                                <input type="text" id="input_msg_send" name="send-msg"
                                                                    className="input-msg-send form-control"
                                                                    placeholder="Type something"/>
                                                                <div className="input-group-btn emojis">
                                                                    <div className="dropup">
                                                                        <button type="button"
                                                                                className="btn  btn-default  dropdown-toggle"
                                                                                data-toggle="dropdown"><i
                                                                                className="zmdi zmdi-mood"></i></button>
                                                                        <ul className="dropdown-menu dropdown-menu-right">
                                                                            <li><a href="#">Action</a></li>
                                                                            <li><a href="#">Another action</a></li>
                                                                            <li className="divider"></li>
                                                                            <li><a href="#">Separated link</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div className="input-group-btn attachment">
                                                                    <div className="fileupload btn  btn-default"><i
                                                                            className="zmdi zmdi-attachment-alt"></i>
                                                                        <input type="file" className="upload"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="messages_tab" className="tab-pane fade" role="tabpanel">
                                        <div className="message-box-wrap">
                                            <div className="msg-search">
                                                <a href="#" className="inline-block txt-grey">
                                                    <i className="zmdi zmdi-more"></i>
                                                </a>
                                                <span className="inline-block txt-dark">پیامها</span>
                                                <a href="#" className="inline-block text-right txt-grey"><i
                                                        className="zmdi zmdi-search"></i></a>
                                                <div className="clearfix"></div>
                                            </div>
                                            <div className="set-height-wrap">
                                                <div className="streamline message-box nicescroll-bar">
                                                    <a href="#">
                                                        <div className="sl-item unread-message">
                                                            <div className="sl-avatar avatar avatar-sm avatar-circle">
                                                                <img className="img-responsive img-circle" src="../../img/user.png"
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div className="sl-content">
                                                                <span className="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                                <span className="inline-block font-11  pull-right message-time">12:28 AM</span>
                                                                <div className="clearfix"></div>
                                                                <span className=" truncate message-subject">پیام Themeworld از طریق مشخصات نمایه انویتو شما ارسال شد</span>
                                                                <p className="txt-grey truncate">ایپسوم متن ساختگی با تولید سادگی
                                                                    از صنعت چاپ و با است. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div className="sl-item">
                                                            <div className="sl-avatar avatar avatar-sm avatar-circle">
                                                                <img className="img-responsive img-circle" src="../../img/user1.png"
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div className="sl-content">
                                                                <span className="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                                <span className="inline-block font-11  pull-right message-time">1 Feb</span>
                                                                <div className="clearfix"></div>
                                                                <span className=" truncate message-subject">پایان پروژه بی نهایت</span>
                                                                <p className="txt-grey truncate"> متن ساختگی با تولید سادگی از صنعت چاپ
                                                                    و با ملت  از   گرافیک است. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div className="sl-item">
                                                            <div className="sl-avatar avatar avatar-sm avatar-circle">
                                                                <img className="img-responsive img-circle" src="../../img/user2.png"
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div className="sl-content">
                                                                <span className="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                                <span className="inline-block font-11  pull-right message-time">31 Jan</span>
                                                                <div className="clearfix"></div>
                                                                <span className=" truncate message-subject">تبریک از نامزدهای طراحی</span>
                                                                <p className="txt-grey truncate">متن ساختگی با تولید سادگی از صنعت چاپ و
                                                                    با از گرافیک است. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div className="sl-item unread-message">
                                                            <div className="sl-avatar avatar avatar-sm avatar-circle">
                                                                <img className="img-responsive img-circle" src="../../img/user3.png"
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div className="sl-content">
                                                                <span className="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                                <span className="inline-block font-11  pull-right message-time">29 Jan</span>
                                                                <div className="clearfix"></div>
                                                                <span className=" truncate message-subject">پیام پشتیبانی از موضوع Themeforest</span>
                                                                <p className="txt-grey truncate">متن ساختگی با تولید سادگی از صنعت چاپ و
                                                                    با از گرافیک است. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div className="sl-item unread-message">
                                                            <div className="sl-avatar avatar avatar-sm avatar-circle">
                                                                <img className="img-responsive img-circle" src="../../img/user4.png"
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div className="sl-content">
                                                                <span className="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                                <span className="inline-block font-11  pull-right message-time">27 Jan</span>
                                                                <div className="clearfix"></div>
                                                                <span className=" truncate message-subject">راهنما با فرم تماس</span>
                                                                <p className="txt-grey truncate">متن ساختگی با تولید سادگی از صنعت چاپ و
                                                                    با از گرافیک است. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div className="sl-item">
                                                            <div className="sl-avatar avatar avatar-sm avatar-circle">
                                                                <img className="img-responsive img-circle" src="../../img/user.png"
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div className="sl-content">
                                                                <span className="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                                <span className="inline-block font-11  pull-right message-time">19 Jan</span>
                                                                <div className="clearfix"></div>
                                                                <span className=" truncate message-subject">تم آپلود شده شما انتخاب شده است</span>
                                                                <p className="txt-grey truncate"> متن ساختگی با تولید سادگی  وب از
                                                                    صنعت چاپ و با از گرافیک است. </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div className="sl-item">
                                                            <div className="sl-avatar avatar avatar-sm avatar-circle">
                                                                <img className="img-responsive img-circle" src="../../img/user1.png"
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div className="sl-content">
                                                                <span className="inline-block capitalize-font   pull-left message-per">سهیلا</span>
                                                                <span className="inline-block font-11  pull-right message-time">13 Jan</span>
                                                                <div className="clearfix"></div>
                                                                <span className=" truncate message-subject"> امتیاز جدید دریافت شده است</span>
                                                                <p className="txt-grey truncate">متن ساختگی با تولید سادگی از صنعت چاپ و
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
                <div className="right-sidebar-backdrop"></div>
                <div className="page-wrapper mt-20">
                        <div className="container-fluid">
                            <Switch>
                                <Route exact path='/Dashboard/StudentsList' >
                                    <StudentsList />
                                </Route>
                                <Route exact path='/Dashboard/AddUser'>
                                    <AddUser />
                                </Route>
                                <Route exact path='/Dashboard/EditStudent'>
                                    <EditStudent />
                                </Route>
                            </Switch>
                            <footer className="footer container-fluid pl-30 pr-30">
                                <div className="row">
                                    <div className="col-sm-12">
                                        <p className="footer-text">کلیه حقوق این سایت متعلق به دانشگاه فرهنگیان است ©</p>
                                    </div>
                                </div>
                            </footer>
                        </div>
                </div>
            </div>
            <script src="../../js/jquery.min.js"></script>
                <script src="../../js/jquery-ui.min.js"></script>
                <script src="../../js/bootstrap.min.js"></script>
                <script src="../../js/jquery.slimscroll.js"></script>
                <script src="../../js/dropdown-bootstrap-extended.js"></script>
                <script src="../../js/init.js"></script>
                <script src="../../js/dashboard-data.js"></script>

        </div>
</BrowserRouter>
    )
  }
}

export default Dashboard;
