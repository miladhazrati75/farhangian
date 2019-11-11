@extends('StudentViews/layout/main')
@section('title')
    ثبت کارورزی
@stop
@section('content')
    <!--start row-->
    <!-- Title -->
    <div class="row">
        <div class="col-sm-12 mb-20">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">ثبت کارورزی</h6>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('masterpage')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('darkhast-karvarzi')}}">درخواست کارورزی</a></li>
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
                        <div class="form-wrap">
                            <form action="" method="post" style="padding: 22px">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">استان</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled>--انتخاب کنید--</option>
                                                <option value="shomali">خراسان شمالی</option>
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
                                                <option value="" selected disabled>--انتخاب کنید--</option>
                                                <option value="bojnord">بجنورد</option>
                                                <option value="esfarayen">اسفراین</option>
                                                <option value="shirvan">شیروان</option>
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
                                                <option value="" selected disabled>--انتخاب کنید--</option>
                                                <option value="">دبستان امید</option>
                                                <option value="">دبستان پارسا</option>
                                                <option value="">دبستان آرمیتا</option>
                                                <option value="">دبستان شاهد</option>
                                                <option value="">دبستان دانش</option>
                                                <option value="">دبستان تلاش</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions mt-20">
                                    <button class="btn btn-success btn-icon left-icon mr-10 pull-left"><i
                                            class="fa fa-check"></i> <span>ثبت درخواست</span></button>
                                    <a href="{{route('student-list')}}">
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
