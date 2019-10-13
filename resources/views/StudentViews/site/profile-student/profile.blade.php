@extends('StudentViews/layout/main')
@section('title')
    پروفایل کاربری
@stop
@section('content')
    <!--start row-->
    <!-- Title -->
    <div class="row">
        <div class="col-sm-12 mb-20">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">پروفایل شما</h6>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('masterpage')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('profile-student')}}">پروفایل</a></li>
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
                                            <label class="control-label mb-10">نام</label>
                                            <input class="form-control" type="text" name="name" id="name" required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">آدرس</label>
                                            <input type="text" id="family" name="family" class="form-control"
                                                    required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">نام خانوادگی</label>
                                            <input type="text" id="family" name="family" class="form-control"
                                                   required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">شهر</label>
                                            <input type="text" id="family" name="family" class="form-control"
                                                   required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">شماره دانشجویی</label>
                                            <input type="text" id="student_code" name="student_code"
                                                   class="form-control"
                                                   required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">استان</label>
                                            <input type="text" id="family" name="family" class="form-control"
                                                   required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">شماره ملی</label>
                                            <input type="text" id="National_Code" name="National_Code"
                                                   class="form-control"
                                                    required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">ایمیل</label>
                                            <input type="text" id="family" name="family" class="form-control"
                                                    required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">ترم</label>
                                            <input type="text" id="term" name="term" class="form-control"
                                                   required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">رشته تحصیلی</label>
                                            <input type="text" id="family" name="family" class="form-control"
                                                   required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">پسورد</label>
                                            <input type="text" id="family" name="family" class="form-control"
                                                   required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions mt-20">
                                    <button class="btn btn-success btn-icon left-icon mr-10 pull-left"><i
                                            class="fa fa-check"></i> <span>ذخیره</span></button>
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
