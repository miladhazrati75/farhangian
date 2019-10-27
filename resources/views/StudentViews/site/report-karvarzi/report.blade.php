@extends('StudentViews/layout/main')
@section('title')
    گزارش کارورزی
@stop
@section('content')
    <!--start row-->
    <!-- Title -->
    <div class="row">
        <div class="col-sm-12 mb-20">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">گزارش کارورزی</h6>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('masterpage')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('report')}}">گزارش کارورزی</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--/ Title -->

    <!--end row-->
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <form action="" method="post" style="padding: 22px">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4 mt-10">
                                    <div class="form-group">
                                        <label class="control-label mb-10">تاریخ شروع</label>
                                        <input type="text" id="family" name="datestart" class="form-control"
                                                title="فارسی تایپ کنید">
                                    </div>
                                </div>
                                <div class="col-md-4 mt-10">
                                    <div class="form-group">
                                        <label class="control-label mb-10">تاریخ پایان</label>
                                        <input type="text" id="student_code" name="dateend"
                                               class="form-control"
                                                title="فارسی تایپ کنید">
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10">نام مدرسه</label>
                                        <input class="form-control" type="text" name="name" id="name"  required="" pattern="[\u0621-\u06cc]{0,}" title="فارسی تایپ کنید">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>

                            <div class="row mt-10">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10">ساعات گذرانده</label>
                                        <input type="text" id="National_Code" name="National_Code"
                                               class="form-control"
                                               required="" pattern="[\u06f0-\u06f9]{10}" title="فارسی تایپ کنید">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                            <div class="row mt-10">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label mb-10">ادرس مدرسه</label>
                                        <input type="text"  name="mobileNumber" class="form-control"
                                               value="" pattern="[\u06f0-\u06f9]{11}" title="فارسی تایپ کنید">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>


                            <div class="form-actions mt-20">
                                <button class="btn btn-success btn-icon left-icon mr-10 pull-left"><i
                                        class="fa fa-check"></i> <span>افزودن</span></button>
                                <a href="">
                                    <button type="button" class="btn btn-warning pull-left">لغو</button>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
@stop

