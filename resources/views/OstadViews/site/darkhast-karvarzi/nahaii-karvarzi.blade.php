@extends('OstadViews.layout.main')
@section('title')
    ثبت کارورزی
@stop
@section('content')
    <!-- Main Content -->
    <!-- Title -->
<script src="/js/myJq.js"></script>
    <script>
        $(document).ready(function(){
            $("#provinces").change(function (elem) {
                var provinceID = $('#provinces option:selected').val();
                console.log(provinceID);
                $.get('/getCities', {provinceID: provinceID}, function (data) {
                    var cityOptions = '<option value="">--انتخاب کنید--</option>'
                    data.forEach(element => {
                        cityOptions+='<option value="'+element.id+'">'+element.title+'</option>'
                    });
                    $("#cities").html(cityOptions);
                });
            });
            $("#cities").change(function (elem) {
                var cityID = $('#cities option:selected').val();
                console.log(cityID);
                $.get('/getSchools', {cityID: cityID}, function (data) {
                    console.log(data);
                    var schoolOptions = '<option value="">--انتخاب کنید--</option>'
                    data.forEach(element => {
                        schoolOptions+='<option value="'+element.id+'">'+element.school_name+'</option>'
                    });
                    $("#schools").html(schoolOptions);
                });
            });
        });
    </script>

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
                                    <span>نام و نام خانوادگی : </span><span>{{$studentItem->name}}{{" "}}{{$studentItem->family}}</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span>شماره دانشجویی : </span><span>{{$studentItem->student_code}}</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span>رشته : </span><span>{{$studentItem->reshte}}</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span>ترم : </span><span>{{$studentItem->term}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">استان</label>
                                            <select  name="province" id="provinces" class="form-control">
                                                <option value="">--انتخاب کنید--</option>
                                                @foreach ($provinces as $province)
                                                <option value="{{$province->id}}">{{$province->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">شهر</label>
                                            <select name="city" id="cities" class="form-control">
                                                <option value="">--انتخاب کنید--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">نام دبستان</label>
                                            <select name="school" id="schools" class="form-control">
                                                <option value="">--انتخاب کنید--</option>
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
                                            <label class="control-label mb-10">از تاریخ</label><br>
                                            <input name="startDate" class="form-control" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions mt-20">
                                    <button class="btn btn-success btn-icon left-icon mr-10 pull-left">
                                        <i class="fa fa-check"></i>
                                        <span>ثبت درخواست</span>
                                    </button>
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
