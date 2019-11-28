@extends('OstadViews.layout.main')
@section('title')
    ثبت کارورزی
@stop
@section('content')
    <!-- Main Content -->
    <!--start row-->
    @include('partials.success')
    <!-- Title -->
    <div class="row heading-bg" id="head-row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">ثبت کارورزی</h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
                <li class="breadcrumb-item"><a href="{{route('student-list')}}">ثبت کارورزی</a></li>
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
                        <a href="{{route('ostad-darkhast-karvarzi')}}">
                            <div class="btn btn-success btn-rounded btn-anim mt-5"><i
                                    class="fa fa-download"></i><span class="btn-text">افزودن دانشجو</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
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
                        <div class="modal fade bd-example-modal-lg" id="exampleModalsearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">کارورزی های درخواست شده</h5>
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
                                                                <th>رشته</th>
                                                                <th>ترم</th>
                                                                <th>شهر درخواستی</th>

                                                            </tr>
                                                            </thead>

                                                            <tbody>


                                                            <tr>
                                                                <td id="radifCount"></td>
                                                                <td id="namvafamily"></td>
                                                                <td id="daneshjoo_code"></td>
                                                                <td id="code_melli"></td>
                                                                <td id="mobile"></td>
                                                                <td id="reshte"></td>
                                                                <td id="student_term"></td>
                                                                <td></td>
                                                                {{--                                                                        {{$i++}}--}}
                                                            </tr>
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
                                                                            <th>شماره دانشجویی</th>
                                                                            <th>شماره ملی</th>
                                                                            <th>رشته</th>
                                                                            <th>ترم</th>
                                                                            <th>شهر درخواستی</th>
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
                                        <th>رشته</th>
                                        <th>ترم</th>
                                        <th>شهر درخواستی</th>
                                        <th class="text-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if($students && count($students)>0)
                                        {{$i=1}}
                                        @foreach ($students as $student)



                                            <tr>
                                                <td id="radif">1</td>
                                                <td id="namvafamily">{{$student->name}}{{" "}}{{$student->family}}</td>
                                                <td id="daneshjoo_code">{{$student->student_code}}</td>
                                                <td id="code_melli">{{$student->National_Code}}</td>
                                                <td id="reshte">{{$student->reshte}}</td>
                                            <td id="student_term">{{$student->term}}</td>
                                                <td id="mobile">@if (isset($student->school->city))
                                                    {{$student->school->city->title}}
                                                @else
                                                --

                                                @endif</td>
                                                <td class="text-nowrap">
                                                    <a href="{{route('ostad-darkhast-karvarzi-nahaii',[$student->id])}}" class="mr-10"
                                                       data-toggle="tooltip" data-original-title="ثبت">
                                                        <i class="fa fa-check" style="color:#2ecd99;"></i>
                                                    </a>
                                                    <a href="" class="mr-10"
                                                       data-toggle="tooltip" data-original-title="حذف">
                                                        <i class="fa fa-close text-danger"></i>
                                                    </a>
                                                    <a id="" count="" class="details"
                                                       data-toggle="tooltip"
                                                       data-original-title="جزئیات">
                                                        <i class="fa fa-calendar-check-o m-l-10" data-toggle="modal"
                                                           data-target="#exampleModaldetails" style="color: orange;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            {{$i++}}
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
                                                                        <td class="header-table">نام و نام خانوادگی</td>
                                                                        <td id="name"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">شماره دانشجویی</td>
                                                                        <td id="student_code"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">شماره ملی</td>
                                                                        <td id="national_code"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">شماره موبایل</td>
                                                                        <td id="phone"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">رشته</td>
                                                                        <td id="subject"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">ترم</td>
                                                                        <td id="term"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">پسورد</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="header-table">اردس</td>
                                                                        <td></td>
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
                                <!--start modal import-->
                                <div class="modal fade" id="exampleModalimport" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">آپلود فایل</h5>
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
                                                                <form action="{{ route('import.student.info') }}" method="post" enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">انتخاب کنید:</label>
                                                                        <input class="form-control" type="file" name="file" id="file"  required="">
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
