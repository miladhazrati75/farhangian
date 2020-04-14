@extends('layout/main')
@section('title')
لیست معلم راهنما|دانشگاه فرهنگیان
@stop
@section('content')
<!--start row-->
@include('partials.success')
<!-- Title -->
<div class="row">
    <div class="col-sm-12 mb-20">
        <div class="panel-heading">
            <div class="pull-left">
                <h6 class="panel-title txt-dark">لیست معلم راهنما</h6>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
                    <li class="breadcrumb-item"><a href="{{route('Professors-list')}}">لیست معلم راهنما</a></li>
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
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                    <a href="{{route('download.helpprofessor.info')}}">
                        <div class="btn btn-warning btn-rounded btn-anim mt-5"><i class="fa fa-download"></i><span
                                class="btn-text">دانلود</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                    <a href="{{route('add-get-helpprofessor')}}">
                        <div class="btn btn-danger btn-rounded btn-anim mt-5"> <i class="fa fa-plus"></i><span
                                class="btn-text">افزودن</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                    <a class="import" data-toggle="tooltip" data-original-title="import">
                        <div class="btn btn-danger btn-rounded btn-anim mt-5" data-target="#exampleModalimport"
                            data-toggle="modal"><i class="fa fa-plus"></i><span class="btn-text">اکسل +</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5"></div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-8">
                            <div class="input-group mb-0 mt-5">
                                <input type="text" id="example-input1-group4" name="example-input1-group4"
                                    class="form-control" placeholder="جستجو">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn" id="span-btn"><i class="fa fa-search"
                                            data-toggle="modal" data-target="#exampleModalsearch"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-2"></div>
                    </div>
                </div>
            </div>
            <!---------------------------start table list daneshjoyan------------------------------>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap mt-5">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>کد پرسنلی</th>
                                        <th>شماره ملی</th>
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
                                        <td>{{$helpprofessor->tahsilat}}</td>
                                        <td class="text-nowrap">
                                            <a href="{{ route('edit-get-helpprofessor',[$helpprofessor->id]) }}"
                                                class="mr-10" data-toggle="tooltip" data-original-title="Edit">
                                                <i class="fa fa-pencil text-inverse" style="color:#2ecd99;"></i>
                                            </a>
                                            <a href="{{ route('delete.helpprofessor',[$helpprofessor->id]) }}"
                                                class="mr-10" data-toggle="tooltip" data-original-title="delete">
                                                <i class="fa fa-close text-danger"></i>
                                            </a>
                                            <a id="" class="details" data-toggle="tooltip"
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
                            <div>
                                {{$helpprofessors->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------------------end table list daneshjoyan------------------------>

            <!----------------------------------start Modal search---------------------------------->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="modal fade" id="exampleModalsearch" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header row no-margin">
                                    <h5 class="modal-title col-md-8" id="exampleModalLabel">لیست اساتید
                                    </h5>
                                    <button type="button" class="close my-btn-close col-md-2" data-dismiss="modal"
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
                                                        <tr>
                                                            <td class="header-table">نام و نام خانوادگی</td>
                                                            <td id="name"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="header-table">کد پرسنلی</td>
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
                                                            <td class="header-table">عملیات</td>
                                                            <td>
                                                                <a href="" class="mr-10" data-toggle="tooltip"
                                                                    data-original-title="Edit">
                                                                    <i class="fa fa-pencil text-inverse"
                                                                        style="color:#2ecd99;"></i>
                                                                </a>
                                                                <a href="" class="mr-10" data-toggle="tooltip"
                                                                    data-original-title="delete">
                                                                    <i class="fa fa-close text-danger"></i>
                                                                </a>
                                                                <a id="" class="details" data-toggle="tooltip"
                                                                    data-original-title="details">
                                                                    <i class="fa fa-calendar-check-o m-l-10"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModaldetails"
                                                                        style="color: orange;"></i>
                                                                </a>
                                                            </td>
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
                </div>
            </div>

            <!----------------------------end modal search------------------------------>

            <!----------------------------start modal details--------------------------->
            <div class="modal fade" id="exampleModaldetails" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                                <div class="modal-header row no-margin">
                                    <h5 class="modal-title col-md-8" id="exampleModalLabel">لیست اساتید
                                    </h5>
                                    <button type="button" class="close my-btn-close col-md-2" data-dismiss="modal"
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
                                                        <tr>
                                                            <td class="header-table">نام و نام خانوادگی</td>
                                                            <td id="name"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="header-table">کد پرسنلی</td>
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

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            <!------------------------------end modal details---------------------------------->


<!----------------------------------- start modal delete------------------------------------>
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
                                class="fa fa-recycle" aria-hidden="true"></i><span
                                class="btn-text">delete</span></button>
                        <button type="button" class="btn btn-primary">close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--------------------------------end modal delete---------------------------------------->

        </div>
    </div>




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
                                <form action="{{ route('import.helpprofessor.info') }}" method="post"
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

@stop
