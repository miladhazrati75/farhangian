@extends('layout.main')
@section('title')
    افزودن استاد جدید
@stop
@section('content')
    <!-- Title -->
    <div class="row heading-bg" id="head-row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">افزودن استاد جدید </h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>

                <li class="breadcrumb-item"><a href="{{route('Professors-list')}}">لیست اساتید</a></li>
                <li class="breadcrumb-item active" aria-current="page">افزودن</li>
            </ol>
        </nav>

    </div>
    <!-- /Title -->
    <!-- Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                            @include('partials.errors')
                            <form action="" method="post" style="padding: 22px">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">نام</label>
                                            <input class="form-control" type="text" name="name" required="" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">نام خانوادگی</label>
                                            <input class="form-control" type="text" name="family" required="" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">کد پرسنلی</label>
                                            <input class="form-control" type="text" required="" name="Professor_Code">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">شماره ملی</label>
                                            <input class="form-control" type="text" name="National_Code" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">تحصیلات</label>
                                            <input class="form-control" type="text" name="education" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                                
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">گرایش</label>
                                            <input class="form-control" type="text" name="gerayesh" required="" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                                    <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">شماره تماس</label>
                                            <input class="form-control" type="text" name="mobileNumber" required="" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    </div>

                                    <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">پسورد</label>
                                            <input class="form-control" type="text" name="password" required="" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    </div>


                                <div class="form-actions mt-20">
                                    <button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>افزودن</span></button>
                                    <a href="{{route('Professors-list')}}">
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
    </div>
    <!-- /Row -->
@stop
