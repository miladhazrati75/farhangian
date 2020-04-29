@extends('layout/main')
@section('title')
    ویرایش اطلاعات
@stop
@section('content')
    <!-- Title -->
    <div class="row heading-bg" id="head-row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">ویرایش اطلاعات استاد</h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">صفحه اصلی</a></li>
                <li class="breadcrumb-item"><a href="index.html">لیست اساتید</a></li>
                <li class="breadcrumb-item active" aria-current="page">ویرایش</li>
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
                                            <input type="text" id="firstName" name="name" class="form-control" value="{{old('name',isset($professorItem) ? $professorItem->name : '')}}" pattern="[\u0621-\u06cc]{0,}" title="فارسی تایپ کنید">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">نام خانوادگی</label>
                                            <input type="text" id="lastName" name="family" class="form-control" value="{{old('name',isset($professorItem) ? $professorItem->family : '')}}" pattern="[\u0621-\u06cc]{0,}" title="فارسی تایپ کنید">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">کد پرسنلی</label>
                                            <input type="text" id="Professor_Code" name="Professor_Code" class="form-control" value="{{old('name',isset($professorItem) ? $professorItem->Professor_Code : '')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">شماره ملی</label>
                                            <input type="text" id="National_Code" name="National_Code" class="form-control" value="{{old('name',isset($professorItem) ? $professorItem->National_Code : '')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">تحصیلات</label>
                                            <input type="text" id="education" name="education" class="form-control" value="{{old('name',isset($professorItem) ? $professorItem->education : '')}}" pattern="[\u0621-\u06cc]{0,}" title="فارسی تایپ کنید">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">گرایش</label>
                                            <input type="text" id="National_Code" name="National_Code" class="form-control" value="{{old('name',isset($professorItem) ? $professorItem->National_Code : '')}}" pattern="[\u0621-\u06cc]{0,}" title="فارسی تایپ کنید">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">شماره تماس</label>
                                            <input type="text" id="education" name="mobileNumber" class="form-control" value="{{old('name',isset($professorItem) ? $professorItem->mobileNumber : '')}}" pattern="[\u0621-\u06cc]{0,}" title="فارسی تایپ کنید">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">پسورد</label>
                                            <input type="text" id="education" name="password" class="form-control" value="{{old('name',isset($professorItem) ? $professorItem->password : '')}}" pattern="[\u0621-\u06cc]{0,}" title="فارسی تایپ کنید">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>


                                <div class="form-actions mt-20">
                                    <button class="btn btn-success btn-icon left-icon mr-10 pull-left">
                                        <i class="fa fa-check"></i> <span>ثبت</span>
                                    </button>
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
