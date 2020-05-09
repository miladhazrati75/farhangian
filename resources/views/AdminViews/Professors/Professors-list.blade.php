@extends('layout.main')
@section('title')
لیست اساتید|دانشگاه فرهنگیان
@stop
@section('content')
<!-- Main Content -->
<!--start row-->
@include('partials.success')
<script src="/js/myJq.js"></script>
<script>
    $(document).ready(function () {
        $(".details").click(function () {
            var profId = $(this).attr("id");
            var count = $(this).attr("count");
            $.get('/details/professor', {
                profId: profId
            }, function (data) {

                //Getting nformations from server
                var name = data["name"];
                var family = data["family"];
                var National_Code = data["National_Code"];
                var education = data["education"];
                var professor_code = data["Professor_Code"];
                var gerayesh = data["gerayesh"];
                var mobileNumber = data["mobileNumber"];
                var password = data["password"];

                //set values in modal
                $("#count").text(count);
                $("#name").text(name + " " + family);
                $("#professor_code").text(professor_code);
                $("#national_code").text(National_Code);
                $("#education").text(education);
                $("#gerayesh").text(gerayesh);
                $("#mobileNumber").text(mobileNumber);
                $("#password").text(password);
            });
        });


        $(".searchSubmit").click(function () {

            var searchInput = $(".searchInput").val();
            var count;
            $.get('/search/professor', {
                searchInput: searchInput
            }, function (data) {
                console.log(data);

                var name = data[0]["name"];
                var family = data[0]["family"];
                var National_Code = data[0]["National_Code"];
                var professor_code = data[0]["Professor_Code"];
                var field = data[0]["field"];
                var education = "مهندسی کامپیوتر";



                //set values in modal
                // $("#table").text(" ");
                // $("#radifCount").text(count);
                $("#namvafamily").text(name + " " + family);
                $("#ostad_code").text(professor_code);
                $("#code_melli").text(National_Code);
                $("#reshte").text("مهندسی کامپیوتر");
                $("#profDegree").text(education);


            });

        });




    });

</script>


<!-- Title -->
<div class="row heading-bg" id="head-row">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">لیست اساتید</h5>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
            <li class="breadcrumb-item"><a href="{{route('Professors-list')}}">لیست اساتید</a></li>
        </ol>
    </nav>
</div>
<!-- /Title -->

<!--end row-->
<!-- Row -->
<div class="row">
    <!-- Bordered Table -->
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                    <a href="{{route('download.professor.info')}}">
                        <div class="btn btn-warning btn-rounded btn-anim mt-5 custom-h"><i class="fa fa-download"></i><span
                                class="btn-text">دانلود</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                    <a href="{{route('add-get-professor')}}">
                        <div class="btn btn-danger btn-rounded btn-anim mt-5 custom-h"><i class="fa fa-plus"></i><span
                                class="btn-text">افزودن</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                    <a class="import" data-toggle="tooltip" data-original-title="import">
                        <div class="btn btn-danger btn-rounded btn-anim mt-5 custom-h" data-target="#exampleModalimport"
                            data-toggle="modal"><i class="fa fa-plus"></i><span class="btn-text">اکسل +</span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-5"></div>


                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-xs-2">

                        </div>

                        <div class="col-xs-8">
                            <div class="input-group mb-0 mt-5">
                                <input type="text" id="example-input1-group4" name="example-input1-group4"
                                    class="form-control searchInput" placeholder="جستجو">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn searchSubmit" id="span-btn" data-toggle="modal"
                                        data-target="#exampleModalsearch"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-2"></div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!----------------------------- Modal search ---------------------------->
                    <div class="modal fade bd-example-modal-lg" id="exampleModalsearch" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">لیست اساتید</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body">
                                            <div class="table-wrap mt-5">
                                                <div class="table-responsive">
                                                    <table class="table table-striped mb-0">
                                                            <tr>
                                                                <th>نام و نام خانوادگی</th>
                                                                <td id="namvafamily"></td>
                                                            </tr>

                                                            <tr>
                                                                <th>شناسه استاد</th>
                                                                <td id="ostad_code"></td>
                                                            </tr>

                                                            <tr>
                                                                <th>شماره ملی</th>
                                                                <td id="code_melli"></td>
                                                            </tr>

                                                            <tr>
                                                                <th>تحصیلات</th>
                                                                <td id="profDegree"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>عملیات</th>
                                                                <td>
                                                                <a href=""
                                                                       class="mr-10" data-toggle="tooltip"
                                                                       data-original-title="Edit">
                                                                        <i class="fa fa-pencil text-inverse"
                                                                           style="color:#2ecd99;"></i>
                                                                    </a>
                                                                    <a href=""
                                                                       class="mr-10" data-toggle="tooltip"
                                                                       data-original-title="delete">
                                                                        <i class="fa fa-close text-danger"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <tbody>
                                                            {{--                                                                        {{$i++}}--}}

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------modal search end ---------------------------->
            </div>

            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap mt-5">
                        <div class="table-responsive">
                            <!--start table list daneshjoyan-->
                            <table class="table table-striped mb-0" id="table">
                                <thead>
                                    <tr>
                                        <th>شناسه</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>شناسه استاد</th>
                                        <th>شماره ملی</th>
                                        <th>تحصیلات</th>
                                        <th class="text-nowrap">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($professors && count($professors)>0)
                                    {{$i=1}}
                                    @foreach($professors as $professor)

                                    <tr>
                                        <td id="radif">{{$i}}</td>
                                        <td id="namvafamily">{{$professor->name}}{{' '}}{{$professor->family}}</td>
                                        <td id="ostad_code">{{$professor->Professor_Code}}</td>
                                        <td id="code_melli">{{$professor->National_Code}}</td>
                                        <td id="profDegree">{{$professor->education}}</td>
                                        <td class="text-nowrap">
                                            <a href="{{route('edit-get-professor',[$professor->id])}}" class="mr-10"
                                                data-toggle="tooltip" data-original-title="Edit">
                                                <i class="fa fa-pencil text-inverse" style="color:#2ecd99;"></i>
                                            </a>
                                            <a href="{{route('delete.professor',[$professor->id])}}" class="mr-10"
                                                data-toggle="tooltip" data-original-title="delete">
                                                <i class="fa fa-close text-danger"></i>
                                            </a>
                                            <a id="{{$professor->id}}" count="{{$i}}" class="details"
                                                data-toggle="tooltip" data-original-title="details">
                                                <i class="fa fa-calendar-check-o m-l-10" data-toggle="modal"
                                                    data-target="#exampleModaldetails" style="color: orange;"></i>
                                            </a>
                                        </td>
                                        {{$i++}}
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div>
                                {{$professors->links()}}
                            </div>
                            <!--end table list daneshjoyan-->
                            <!----------------------start modal details--------------------------------->
                            <div class="modal fade" id="exampleModaldetails" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">مشخصات استاد</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body">
                                                    <div class="table-wrap mt-5">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped mb-0">
                                                                <tr>
                                                                    <td class="header-table">نام و نام خانوادگی</td>
                                                                    <td id="name"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="header-table">شناسه استاد</td>
                                                                    <td id="professor_code"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="header-table">شماره ملی</td>
                                                                    <td id="national_code"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="header-table">تحصیلات</td>
                                                                    <td id="education"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="header-table">شماره تماس</td>
                                                                    <td id="mobileNumber"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="header-table">گرایش</td>
                                                                    <td id="gerayesh"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="header-table">پسورد</td>
                                                                    <td id="password"></td>
                                                                </tr>
                                                                


                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
<!--start modal hazf-->
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
<!--end modal hazf-->
<!--start modal import-->
<div class="modal fade" id="exampleModalimport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">آپلود فایل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap mt-5">
                            <div class="table-responsive">
                                <form action="{{ route('import.professor.info') }}" method="post"
                                    enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="control-label mb-10">انتخاب کنید:</label>
                                        <input class="form-control" type="file" name="file" id="file" required="">
                                    </div>
                                    <br>
                                    <button class="btn btn-success btn-icon left-icon mr-10 pull-left"><i
                                            class="fa fa-check"></i> <span>آپلود</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--end modal import-->

<!-- /Main Content -->
@stop
