@extends('layout.main')
@section('title')
    لیست دانشجویان|دانشگاه فرهنگیان
@stop
@section('content')
    <!-- Main Content -->
    <!--start row-->
    @include('partials.success')
<script src="/js/myJq.js"></script>
    <script>
        $(document).ready(function(){
            alert(2);
            $(".details").click(function () {
                var userId = $(this).attr("id");
                var count = $(this).attr("count");
                $.get('/details/student', {userId: userId}, function (data) {

                    //Getting nformations from server
                    var name = data["name"];
                    var family = data["family"];
                    var National_Code = data["National_Code"];
                    var term = data["term"];
                    var student_code = data["student_code"];

                    //set values in modal
                    $("#count").text(count);
                    $("#name").text(name + " " + family);
                    $("#student_code").text(student_code);
                    $("#national_code").text(National_Code);
                    $("#phone").text("09921558293");
                    $("#subject").text("مهندسی کامپیوتر");
                    $("#term").text(term);

                });
            });

        });
    </script>


    <!-- Title -->
    <div class="row heading-bg" id="head-row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">لیست دانشجویان</h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
                <li class="breadcrumb-item"><a href="{{route('student-list')}}">لیست دانشجویان</a></li>
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
                        <a href="{{route('download.student.info')}}">
                            <div class="btn btn-warning btn-rounded btn-anim mt-5"><i
                                    class="fa fa-download"></i><span class="btn-text">دانلود</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                        <a href="{{route('add.get.student')}}">
                            <div class="btn btn-danger btn-rounded btn-anim mt-5"><i
                                    class="fa fa-plus"></i><span class="btn-text">افزودن</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                        <a href="">
                            <div class="btn btn-danger btn-rounded btn-anim mt-5"><i
                                    class="fa fa-plus"></i><span class="btn-text">اکسل +</span>
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
										<button type="submit" class="btn searchSubmit" id="span-btn" data-toggle="modal" data-target="#exampleModalsearch"><i
                                                class="fa fa-search"></i></button>
									</span>
                                </div>
                            </div>
                            <div class="col-xs-2"></div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Modal search -->
                        <div class="modal fade" id="exampleModalsearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">لیست دانشجویان</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
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
                                                                <th>شماره دانشجویی</th>
                                                                <th>شماره ملی</th>
                                                                <th>شماره موبایل</th>
                                                                <th>رشته</th>
                                                                <th>ترم</th>
                                                                <th class="text-nowrap">عملیات</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @if($students && count($students)>0)
                                                                {{$i=1}}
                                                                @foreach($students as $student)

                                                                    <tr>
                                                                        <td>{{$i}}</td>
                                                                        <td>{{$student->name}}{{' '}}{{$student->family}}</td>
                                                                        <td>{{$student->student_code}}</td>
                                                                        <td>{{$student->National_Code}}</td>
                                                                        <td>{{$student->mobileNumber}}</td>
                                                                        <td>{{$student->reshte}}</td>
                                                                        <td>{{$student->term}}</td>
                                                                        <td class="text-nowrap">
                                                                            <a href="{{route('edit.get.student',[$student->id])}}" class="mr-10"
                                                                               data-toggle="tooltip" data-original-title="Edit">
                                                                                <i class="fa fa-pencil text-inverse" style="color:#2ecd99;"></i>
                                                                            </a>
                                                                            <a href="{{route('delete.student',[$student->id])}}" class="mr-10"
                                                                               data-toggle="tooltip" data-original-title="delete">
                                                                                <i class="fa fa-close text-danger"></i>
                                                                            </a>
                                                                            <a id="{{$student->id}}" count="{{$i}}" class="details"
                                                                               data-toggle="tooltip"
                                                                               data-original-title="details">
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
                                                        <!--end table list daneshjoyan-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end table list daneshjoyan-->



                                    <!--start modal details-->
                                    <div class="modal fade" id="#exampleModaldetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">مشخصات دانشجو</h5>
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
                                                                        <thead>
                                                                        <tr>
                                                                            <th>ردیف</th>
                                                                            <th>نام و نام خانوادگی</th>
                                                                            <th>شناسه استاد</th>
                                                                            <th>شماره ملی</th>
                                                                            <th>شماره موبایل</th>
                                                                            <th>گرایش</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
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
                            </div>
                        </div>
                    </div>
                    <!--modal search end -->
                </div>

                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap mt-5">
                            <div class="table-responsive">
                                <!--start table list daneshjoyan-->
                                <table class="table table-striped mb-0" id="table">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره دانشجویی</th>
                                        <th>شماره ملی</th>
                                        <th>شماره موبایل</th>
                                        <th>رشته</th>
                                        <th>ترم</th>
                                        <th class="text-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($students && count($students)>0)
                                        {{$i=1}}
                                        @foreach($students as $student)

                                            <tr>
                                                <td id="radif">{{$i}}</td>
                                                <td id="namvafamily">{{$student->name}}{{' '}}{{$student->family}}</td>
                                                <td id="daneshjoo_code">{{$student->student_code}}</td>
                                                <td id="code_melli">{{$student->National_Code}}</td>
                                                <td id="mobile">{{$student->mobileNumber}}</td>
                                                <td id="reshte">{{$student->reshte}}</td>
                                                <td id="student_term">{{$student->term}}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{route('edit.get.student',[$student->id])}}" class="mr-10"
                                                       data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil text-inverse" style="color:#2ecd99;"></i>
                                                    </a>
                                                    <a href="{{route('delete.student',[$student->id])}}" class="mr-10"
                                                       data-toggle="tooltip" data-original-title="delete">
                                                        <i class="fa fa-close text-danger"></i>
                                                    </a>
                                                    <a id="{{$student->id}}" count="{{$i}}" class="details"
                                                       data-toggle="tooltip"
                                                       data-original-title="details">
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
                                <!--end table list daneshjoyan-->
                                <!--start modal details-->
                                <div class="modal fade" id="exampleModaldetails" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">مشخصات دانشجو</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <div class="table-wrap mt-5">
                                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0">
                                                    <thead>

                                                    <tr>
                                                        <th>ردیف</th>
                                                        <th>نام و نام خانوادگی</th>
                                                        <th>شماره دانشجویی</th>
                                                        <th>شماره ملی</th>
                                                        <th>شماره موبایل</th>
                                                        <th>رشته</th>
                                                        <th>ترم</th>

                                                    </tr>


                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th id="count"></th>
                                                        <th id="name"></th>
                                                        <th id="student_code"></th>
                                                        <th id="national_code"></th>
                                                        <th id="phone"></th>
                                                        <th id="subject"></th>
                                                        <th id="term"></th>
                                                    </tr>


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

    <!-- /Main Content -->
@stop




