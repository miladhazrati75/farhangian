@extends('layout.main')
@section('title')
    افزودن مدرسه جدید
@stop
@section('content')
    <!-- Title -->
    <div class="row heading-bg" id="head-row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">افزودن مدرسه جدید </h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>

                <li class="breadcrumb-item"><a href="{{route('place-list')}}">لیست حوزه ها</a></li>
                <li class="breadcrumb-item active" aria-current="page">افزودن</li>
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10"> نام حوزه</label>
                                            <input type="text"  class="form-control"  name="name" id="name" required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">ادرس حوزه </label>
                                            <input type="text" class="form-control" name="address" id="address" required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">تلفن حوزه </label>
                                            <input type="text" class="form-control" name="phone" id="phone" required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10"> نام مدیر</label>
                                            <input type="text" class="form-control" name="managerName" id="managerName" required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10"> نام معاون</label>
                                            <input type="text"  name="moaven_name" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">ظرفیت پذیرش</label>
                                            <input type="text"  class="form-control" name="capacity" id="capacity" required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10">تعداد پایه ها</label>
                                            <input type="text"  class="form-control" name="Tcapacity" id="Tcapacity" required="" oninvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>


                                <div class="form-actions mt-20">
                                    <button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>افزودن</span></button>
                                    <a href="{{route('place-list')}}">
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
