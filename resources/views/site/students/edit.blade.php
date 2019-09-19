@extends('layout.main')
@section('title')
    ویرایش اطلاعات
@stop
@section('content')
<!-- Main Content -->
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">ویرایش اطلاعات دانشجو</h5>
                </div>

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
                                    <form action="#" method="post" style="padding: 22px">
                                        {{csrf_field()}}

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">نام</label>
                                                    <input type="text" id="name" name="name" class="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->name : '')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                        <div class="row mt-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">نام خانوادگی</label>
                                                    <input type="text" id="family" name="family" class="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->family : '')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                        <div class="row mt-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">شماره دانشجویی</label>
                                                    <input type="text" id="student_code" name="student_code" class="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->student_code : '')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                        <div class="row mt-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">شماره ملی</label>
                                                    <input type="text" id="National_Code" name="National_Code" class="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->National_Code : '')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                        <div class="row mt-10">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">ترم</label>
                                                    <input type="text" id="term" name="term" class="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->term : '')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>


                                        <div class="form-actions mt-20">
                                            <button class="btn btn-success btn-icon left-icon mr-10 pull-left"><i
                                                        class="fa fa-check"></i> <span>ثبت</span></button>
                                            <button type="button" class="btn btn-warning pull-left">لغو</button>
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
