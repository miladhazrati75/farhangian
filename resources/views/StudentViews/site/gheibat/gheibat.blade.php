@extends('StudentViews/layout/main')
@section('title')
   غیبت های دانشجو
@stop
@section('content')
    <!--start row-->
    <!-- Title -->
    <div class="row">
        <div class="col-sm-12 mb-20">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">غیبت های دانشجو</h6>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('masterpage')}}">داشبورد</a></li>
                        <li class="breadcrumb-item"><a href="{{route('gheibatha')}}">غیبت های دانشجو</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--/ Title -->

    <!--end row-->
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <!-- Bordered Table -->
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="table-wrap mt-5">
                            <div class="table-responsive">
                                <!--start table list gheibatha-->
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>تاریخ غیبت</th>
                                        <th>نام مدرسه</th>
                                        <th>دلیل غیبت</th>
                                        <th>تعداد ساعات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($gheibatha && count($gheibatha)>0)
                                        {{$i=1}}
                                        @foreach($gheibatha as $gheibat)

                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$gheibat->date}}</td>
                                                <td>{{$gheibat->school}}</td>
                                                <td>{{$gheibat->reason}}</td>
                                                <td>{{$gheibat->hours}}</td>
                                                {{$i++}}
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <!--end table list gheibatha-->
                                <!--start modal details-->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">مشخصات دانشجو</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
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
        <!-- /Bordered Table -->

    </div>
    <!-- /Row -->
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
    <!-- /Row -->
@stop
