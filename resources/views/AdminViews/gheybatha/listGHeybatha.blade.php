@extends('layout.main')
@section('title')
گزارش غیبت ها|دانشگاه فرهنگیان
@stop
@section('content')
    <!-- Main Content -->
    <!--start row-->
    @include('partials.success')
    <script src="/js/myJq.js"></script>
    <!-- Title -->
    <div class="row heading-bg" id="head-row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">گزارش غیبت ها</h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
                <li class="breadcrumb-item"><a href="{{route('listGHeybatha')}"> گزارش غیبت ها</a></li>
            </ol>
        </nav>
    </div>
    <!-- /Title -->
    <!--end row-->
    <!-- Row -->
    <div class="row">
        <!-- Bordered Table -->
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                        <a href="">
                            <div class="btn btn-warning btn-rounded btn-anim mt-5 custom-h"><i
                                    class="fa fa-download"></i><span class="btn-text font-13">دانلود</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                        <a href="">
                            <div class="btn btn-danger btn-rounded btn-anim mt-5 custom-h"><i
                                    class="fa fa-plus"></i><span class="btn-text font-13">افزودن</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                        <a class="import"
                           data-toggle="tooltip"
                           data-original-title="import">
                            <div class="btn btn-danger btn-rounded btn-anim mt-5 custom-h" data-target="#exampleModalimport"
                                 data-toggle="modal"><i
                                    class="fa fa-plus"></i><span class="btn-text font-13">اکسل +</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5"></div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-8">
                                <div class="input-group mb-0 mt-5">
                                    <input type="text" id="example-input1-group4" name="example-input1-group4"
                                           class="form-control searchInput" placeholder="جستجو">
                                    <span class="input-group-btn">
                        <button type="submit" class="btn searchSubmit" id="span-btn" data-toggle="modal"
                                data-target="#exampleModalsearch"><i
                                class="fa fa-search"></i></button>
                        </span>
                                </div>
                            </div>
                            <div class="col-xs-2"></div>
                        </div>
                    </div>
                </div>
                <!------------------------------------ Modal search -------------------------------->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="modal fade bd-example-modal-lg" id="exampleModalsearch" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header row no-margin">
                                        <h5 class="modal-title col-md-8" id="exampleModalLabel">مشخصات دانشجو</h5>
                                        <button type="button" class="close my-btn-close col-md-2" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body">
                                                <div class="table-wrap mt-5">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped mb-0">
                                                            <tr>
                                                                <td class="header-table">نام و نام خانوادگی</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="header-table">شماره دانشجویی</td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="header-table">شماره ملی</td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="header-table">تاریخ غیبت</td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="header-table">رشته</td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="header-table">ترم</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="header-table">پسورد</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="header-table">ادرس</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="header-table">عملیات</td>
                                                                <td>
                                                                    <a href=""
                                                                       class="mr-10" data-toggle="tooltip"
                                                                       data-original-title="Edit">
                                                                        <i class="fa fa-pencil text-inverse"
                                                                           style="color:#2ecd99;"></i>
                                                                    </a>
                                                                    <a href=""
                                                                       class="mr-10" data-toggle="tooltip"
                                                                       data-original-title="delete">
                                                                        <i class="fa fa-close text-danger"></i>
                                                                    </a>

                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----------------------end modal search---------------------------->
                <!-----------------------start table list daneshjoyan---------------->
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap mt-5">
                            <div class="table-responsive">

                                <table class="table table-striped mb-0" id="table">
                                    <thead>
                                    <tr>
                                        <th>شناسه</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره دانشجویی</th>
                                        <th>شماره ملی</th>
                                        <th>تاریخ غیبت</th>
                                        <th>رشته</th>
                                        <th>ترم</th>
                                        <th class="text-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td id="radif"></td>
                                                <td id="namvafamily"></td>
                                                <td id="daneshjoo_code"></td>
                                                <td id="code_melli"></td>
                                                <td id="date"></td>
                                                <td id="reshteh"></td>
                                                <td id="student_term"></td>
                                                <td class="text-nowrap">
                                                    <a href="" class="mr-10"
                                                       data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse" style="color:#2ecd99;"></i>
                                                    </a>
                                                    <a href="" class="mr-10"
                                                       data-toggle="tooltip" data-original-title="delete">
                                                        <i class="fa fa-close text-danger"></i>
                                                    </a>
                                                    <a id="" class="details"
                                                       data-toggle="tooltip" data-original-title="details">
                                                        <i class="fa fa-calendar-check-o m-l-10" data-toggle="modal"
                                                           data-target="#exampleModaldetails"
                                                           style="color: orange;"></i>
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                    </tbody>
                                </table>
                                <div>
                                </div>
                                <!--------------------end table list daneshjoyan--------------------->

                                <!-----------------------start modal details------------------------->
                                <div class="modal fade" id="exampleModaldetails" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header row no-margin">
                                                <h5 class="modal-title col-md-8" id="exampleModalLabel">مشخصات
                                                    دانشجو</h5>
                                                <button type="button" class="close my-btn-close col-md-2"
                                                        data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <div class="table-wrap mt-5">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped mb-0">
                                                                    <tr>
                                                                        <td class="header-table">نام و نام خانوادگی</td>
                                                                        <td id="name"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">شماره دانشجویی</td>
                                                                        <td id="student_code"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">شماره ملی</td>
                                                                        <td id="national_code"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">تاریخ غیبت</td>
                                                                        <td id="date"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">شماره موبایل</td>
                                                                        <td id="mobileNumber"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">رشته</td>
                                                                        <td id="reshteh"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">ترم</td>
                                                                        <td id="term"></td>
                                                                    </tr>
                                                                     <tr>
                                                                        <td class="header-table">آدرس</td>
                                                                        <td  id="address"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">جزییات</td>
                                                                        <td  id="details"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">پسورد</td>
                                                                        <td id="password"></td>
                                                                    </tr>
                                                                   
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!----------------------------end modal details------------------------------->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Row -->
        <!-----------------------------start modal hazf--------------------------------->
        <div class="modal fade" id="exampleModal1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <form id="search_form" role="search" class="top-nav-search pull-left collapse in"
                                  aria-expanded="true">
                                <div class="input-group">
                                    <label>آیا می خواهید حذف کنید؟</label>
                                </div>
                            </form>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger btn-anim" data-dismiss="modal"><i
                                        class="fa fa-recycle" aria-hidden="true"></i><span
                                        class="btn-text">delete</span>
                                </button>
                                <button type="button" class="btn btn-primary">close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------------end modal hazf------------------------------------>
        <!-- /Main Content -->
@stop
