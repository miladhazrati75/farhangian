@extends('OstadViews.layout.main')
@section('title')
    ثبت کارورزی
@stop
@section('content')
    <!-- Main Content -->
    <!-- Title -->
    <div class="row heading-bg" id="head-row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">ثبت کارورزی</h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
                <li class="breadcrumb-item"><a href="{{route('student-list')}}">ثبت کارورزی</a></li>
                <li class="breadcrumb-item active">افزودن</li>
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
                                <div class="row mb-30">
                                    <div class="col-md-3">
                                        <span>نام و نام خانوادگی : </span><span>محمد شاددل</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span>شماره دانشجویی : </span><span>1258898765</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span>رشته : </span><span>آموزش ابتدایی</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span>ترم : </span><span>6</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">استان</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled="">--انتخاب کنید--</option>
                                                <option selected="" value="shomali">خراسان شمالی</option>
                                                <option value="tehran">تهران</option>
                                                <option value="tabriz">تبریز</option>
                                                <option value="mazandaran">مازندران</option>
                                                <option value="razavi">مشهد</option>
                                                <option value="fars">فارس</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">شهر</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled="">--انتخاب کنید--</option>
                                                <option value="bojnord">بجنورد</option>
                                                <option value="esfarayen">اسفراین</option>
                                                <option selected="" value="shirvan">شیروان</option>
                                                <option value="ashkhane">آشخانه</option>
                                                <option value="manesemelghan">مانه سملقان</option>
                                                <option value="razjarghalan">رازجرگلان</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">نام دبستان</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected="" disabled="">--انتخاب کنید--</option>
                                                <option value="">دبستان امید</option>
                                                <option value="">دبستان پارسا</option>
                                                <option value="">دبستان آرمیتا</option>
                                                <option value="">دبستان شاهد</option>
                                                <option value="">دبستان دانش</option>
                                                <option value="">دبستان تلاش</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">پایه</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected="" disabled="">--انتخاب کنید--</option>
                                                <option value="">اول</option>
                                                <option value="">دوم</option>
                                                <option value="">سوم</option>
                                                <option value="">چهارم</option>
                                                <option value="">پنجم</option>
                                                <option value="">ششم</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">تاریخ</label><br>
                                            <input type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions mt-20">
                                    <button class="btn btn-success btn-icon left-icon mr-10 pull-left"><i class="fa fa-check"></i> <span>ثبت درخواست</span></button>
                                    <a href="{{route('ostad-darkhast-karvarzi-list')}}">
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
    <!--/Main Content-->
@stop
