@extends('StudentViews/layout/main')
@section('title')
    کارورزی های ثبت شده
@stop
@section('content')
    <!--start row-->
    <!-- Title -->
    <div class="row">
        <div class="col-sm-12 mb-20">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">کارورزی های ثبت شده</h6>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('masterpage')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('sabtshode-karvarzi')}}">کارورزی های ثبت شده</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--/ Title -->

    <!--end row-->
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <!-- Bordered Table -->
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                        <a href="">
                            <div class="btn btn-warning btn-rounded btn-anim mt-5"><i
                                    class="fa fa-download"></i><span class="btn-text">دانلود</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-2 col-xs-4"></div>


                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                        <div class="row">
                            <div class="col-xs-2">

                            </div>

                            <div class="col-xs-8">
                                <div class="input-group mb-0 mt-5">
                                    <input type="text" id="example-input1-group4" name="example-input1-group4"
                                           class="form-control" placeholder="جستجو">
                                    <span class="input-group-btn">
										<button type="submit" class="btn" id="span-btn"><i
                                                class="fa fa-search"></i></button>
									</span>
                                </div>
                            </div>
                            <div class="col-xs-2"></div>
                        </div>

                    </div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap mt-5">
                            <div class="table-responsive">
                                <!--start table list daneshjoyan-->
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام مدرسه</th>
                                        <th>نام مدیر</th>
                                        <th>پایه</th>
                                        <th>وضعیت درخواست</th>
                                        <th>تاریخ ثبت</th>
                                        <th>ساعات گذرانده</th>
                                        <th class="text-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>شاهد</td>
                                                <td>آقای شاددل</td>
                                                <td>4 پایه</td>
                                                <td>در انتظار تایید</td>
                                                <td>98/08/23</td>
                                                <td>24 ساعت</td>
                                                <td class="text-nowrap">
                                                    <a href="" class="mr-10" data-toggle="tooltip" data-original-title="delete">
                                                        <i class="fa fa-close text-danger"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" data-original-title="details">
                                                        <i class="fa fa-calendar-check-o m-l-10" data-toggle="modal" data-target="#exampleModal" style="color: orange;"></i>
                                                    </a>
                                                </td>

                                            </tr>
                                    </tbody>
                                </table>
                                <!--end table list daneshjoyan-->
                                <!--start modal details-->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">مشخصات دانشجو</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-striped mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>ردیف</th>
                                                        <th>نام و نام خانوادگی</th>
                                                        <th>شماره دانشجویی</th>
                                                        <th>شماره ملی</th>
                                                        <th>شماره موبایل</th>
                                                        <th>رشته</th>
                                                        <th>ترم</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--end modal details-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bordered Table -->

    </div>
    <!-- /Row -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                              aria-expanded="true" style="">
                            <div class="input-group">
                                <label>آیا می خواهید حذف کنید؟</label>
                            </div>
                        </form>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-anim" data-dismiss="modal"><i
                                    class="fa fa-recycle" aria-hidden="true"></i><span class="btn-text">delete</span>
                            </button>
                            <button type="button" class="btn btn-primary">close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /Row -->
@stop
