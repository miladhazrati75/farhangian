@extends('StudentViews/layout/main')
@section('title')
    درخواست کارورزی
@stop
@section('content')
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

    <!--start row-->
    <!-- Title -->
    <div class="row">
        <div class="col-sm-12 mb-20">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">درخواست کارورزی</h6>
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
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">استان</label>
                                            <select name="province" id="provinces" class="form-control">
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
                                                <option value="" selected disabled>--انتخاب کنید--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">نام دبستان</label>
                                            <select name="school" id="schools" class="form-control">
                                                <option value="" selected disabled>--انتخاب کنید--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">زمان پیشنهادی</label>
                                            <input type="date" name="startDate" id="startDate" class="form-control">
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
