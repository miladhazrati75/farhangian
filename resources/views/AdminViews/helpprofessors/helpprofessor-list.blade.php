@extends('layout/main')
@section('title')
    لیست اساتید راهنما|دانشگاه فرهنگیان
@stop
@section('content')
    <!--start row-->
    @include('partials.success')
    <!-- Title -->
    <div class="row">
        <div class="col-sm-12 mb-20">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">لیست اساتید راهنما</h6>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
                        <li class="breadcrumb-item"><a href="{{route('Professors-list')}}">لیست اساتید</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--/ Title -->
    <!--end row-->
    <!-- Row -->
    <div class="row">
        <!-- Bordered Table -->
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                        <a href="{{route('download.helpprofessor.info')}}">
                            <div class="btn btn-warning btn-rounded btn-anim mt-5"><i
                                    class="fa fa-download"></i><span class="btn-text">دانلود</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                        <a href="{{route('add-get-helpprofessor')}}">
                            <div class="btn btn-danger btn-rounded btn-anim mt-5"> <i class="fa fa-plus"></i><span class="btn-text">افزودن</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                        <a class="import"
                            data-toggle="tooltip"
                            data-original-title="import">
                            <div class="btn btn-danger btn-rounded btn-anim mt-5" data-target="#exampleModalimport" data-toggle="modal"><i
                                    class="fa fa-plus"></i><span class="btn-text">اکسل +</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5"></div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-2"></div>
                            <div class="col-xs-8">
                                <div class="input-group mb-0 mt-5">
                                    <input type="text" id="example-input1-group4" name="example-input1-group4" class="form-control" placeholder="جستجو">
                                    <span class="input-group-btn">
                        <button type="submit" class="btn" id="span-btn"><i class="fa fa-search" data-toggle="modal" data-target="#exampleModalsearch"></i></button>
                        </span>
                                </div>
                            </div>
                            <div class="col-xs-2"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalsearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">لیست استاد راهنما</h5>
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
                                                                <th>نام مدرسه</th>
                                                                <th> ادرس مدرسه</th>
                                                                <th> تلفن مدرسه</th>
                                                                <th>نام مدیر</th>
                                                                <th>نام معاون</th>
                                                                <th>ظرفیت پذیرش</th>
                                                                <th class="text-nowrap">عملیات</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="text-nowrap">
                                                                    <a href="" class="mr-10" data-toggle="tooltip" data-original-title="Edit">
                                                                        <i class="fa fa-pencil text-inverse m-r-10" style="color:#2ecd99;"></i>
                                                                    </a>
                                                                    <a href=""class="mr-10" data-toggle="tooltip" data-original-title="delete">
                                                                        <i class="fa fa-close text-danger"></i>
                                                                    </a>
                                                                    <a data-toggle="tooltip" data-original-title="details">
                                                                        <i class="fa fa-calendar-check-o m-l-10" data-toggle="modal" data-target="#exampleModal" style="color: orange;"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--end table list daneshjoyan-->
                                                        <!--start modal details-->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel"> مشخصات استاد راهنما</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <table class="table table-striped mb-0">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>ردیف</th>
                                                                                <th>نام مدرسه</th>
                                                                                <th>نام مدیر</th>
                                                                                <th> نام معاون</th>
                                                                                <th> شماره تماس</th>
                                                                                <th>ظرفیت</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>
                                                                        </table>
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
                            </div>
                        </div>
                        <!--modal search end -->
                    </div>
                </div>
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
                                            <th>شناسه استاد</th>
                                            <th>شماره ملی</th>
                                            <th>گرایش</th>
                                            <th>تحصیلات</th>
                                            <th class="text-nowrap">عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($helpprofessors && count($helpprofessors)>0)
                                        {{$i=1}}
                                        @foreach($helpprofessors as $helpprofessor)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$helpprofessor->name}} {{$helpprofessor->familyname}}</td>
                                            <td>{{$helpprofessor->personalCode}}</td>
                                            <td>{{$helpprofessor->NationalCode}}</td>
                                            <td>{{$helpprofessor->gerayesh}}</td>
                                            <td>{{$helpprofessor->tahsilat}}</td>
                                            <td class="text-nowrap">
                                                <a href="{{ route('edit-get-helpprofessor',[$helpprofessor->id]) }}" class="mr-10"
                                                   data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-pencil text-inverse" style="color:#2ecd99;"></i>
                                                </a>
                                            <a href="{{ route('delete.helpprofessor',[$helpprofessor->id]) }}" class="mr-10"
                                                   data-toggle="tooltip" data-original-title="delete">
                                                    <i class="fa fa-close text-danger"></i>
                                                </a>
                                                <a id="" class="details"
                                                   data-toggle="tooltip"
                                                   data-original-title="details">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Bordered Table -->
    </div>
    <!-- /Row -->
    <!-- start modal delete-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="#">
                        <form id="search_form" role="search" class="top-nav-search pull-left collapse in" aria-expanded="true" style="">
                            <div class="input-group">
                                <label>آیا می خواهید حذف کنید؟</label>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="submit"  class="btn btn-danger btn-anim" data-dismiss="modal"><i class="fa fa-recycle" aria-hidden="true"></i><span class="btn-text">delete</span></button>
                            <button type="button" class="btn btn-primary">close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end modal delete-->
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
                                                            <form action="{{ route('import.helpprofessor.info') }}" method="post" enctype="multipart/form-data">
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

@stop
