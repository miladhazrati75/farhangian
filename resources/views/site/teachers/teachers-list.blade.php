@extends('layout/main')
@section('title')
    لیست اساتید|دانشگاه فرهنگیان
@stop
@section('content')
    <!--start row-->
    @include('partials.success')
    <!-- Title -->
    <div class="row">
        <div class="col-sm-12 mb-20">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">لیست اساتید</h6>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active">لیست اساتید</li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--/ Title -->

    <!--end row-->
    <!-- Row -->
    <div class="row">
        <!-- Bordered Table -->
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                        <div class="btn btn-warning btn-rounded btn-anim mt-5"><i class="fa fa-download"></i><span class="btn-text">دانلود</span>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                        <a href="add-teacher.html"><div class="btn btn-danger btn-rounded btn-anim mt-5"> <i class="fa fa-plus"></i><span class="btn-text">افزودن</span>
                            </div></a>
                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-2 col-xs-4"></div>


                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-8">
                                <div class="input-group mb-0 mt-5">
                                    <input type="text" id="example-input1-group4" name="example-input1-group4" class="form-control" placeholder="جستجو">
                                    <span class="input-group-btn">
										<button type="submit" class="btn" id="span-btn"><i class="fa fa-search"></i></button>
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
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره استادی</th>
                                        <th>شماره ملی</th>
                                        <th>موارد دیگر</th>
                                        <th>تحصیلات</th>
                                        <th class="text-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>امیدرضایی</td>
                                        <td>97645631724</td>
                                        <td>34545631724</td>
                                        <td></td>
                                        <td>کارشناسی ارشد اقتصاد</td>
                                        <td class="text-nowrap"><a href="edit-teacher.html" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10" style="color:#2ecd99;"></i> </a> <a href="#" title="delete" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"> <i class="fa fa-close text-danger"></i> </a> </td>
                                    </tr>
                                    <tr>

                                        <td>2</td>
                                        <td>صادق هدایت</td>
                                        <td>97774562153</td>
                                        <td>56745631724</td>
                                        <td></td>
                                        <td>کارشناسی ارشد تربیت معلم</td>
                                        <td class="text-nowrap"><a href="edit-teacher.html" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10" style="color:#2ecd99;"></i> </a> <a href="#" title="delete" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"> <i class="fa fa-close text-danger"></i> </a> </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>همت افزا</td>
                                        <td>97656960987</td>
                                        <td>98745631724</td>
                                        <td></td>
                                        <td>دکترای روانشناسی</td>
                                        <td class="text-nowrap"><a href="edit-teacher.html" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10" style="color:#2ecd99;"></i> </a> <a href="#" title="delete" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"> <i class="fa fa-close text-danger"></i> </a> </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>صادق بینایی</td>
                                        <td>9743456789</td>
                                        <td>23545631724</td>
                                        <td></td>
                                        <td>کارشناسی علوم فلسفه</td>
                                        <td class="text-nowrap"><a href="edit-teacher.html" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10" style="color:#2ecd99;"></i> </a> <a href="#" title="delete" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"> <i class="fa fa-close text-danger"></i> </a> </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>علی شاهپسندی</td>
                                        <td>9754356789</td>
                                        <td>74695631724</td>
                                        <td></td>
                                        <td>کارشناسی ارشد تربیت معلم</td>
                                        <td class="text-nowrap"><a href="edit-teacher.html" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10" style="color:#2ecd99;"></i> </a> <a href="#" title="delete" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"> <i class="fa fa-close text-danger"></i> </a> </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>سجاد گشتی</td>
                                        <td>9734213457</td>
                                        <td>56455631724</td>
                                        <td></td>
                                        <td>دکترای ریاضی </td>
                                        <td class="text-nowrap"><a href="edit-teacher.html" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10" style="color:#2ecd99;"></i> </a> <a href="#" title="delete" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"> <i class="fa fa-close text-danger"></i> </a> </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--end table list daneshjoyan-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bordered Table -->

    </div>
    <!-- /Row -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="post" action="#">
                        <form id="search_form" role="search" class="top-nav-search pull-left collapse in" aria-expanded="true" style="">
                            <div class="input-group">
                                <label>آیا می خواهید حذف کنید؟</label>
                            </div>
                        </form>


                        <div class="modal-footer">
                            <button type="submit"  class="btn btn-danger btn-anim" data-dismiss="modal"><i class="fa fa-recycle" aria-hidden="true"></i><span class="btn-text">delete</span></button>
                            <button type="button" class="btn btn-primary">close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop
