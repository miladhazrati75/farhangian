@extends('SchoolViews.layout.main')
@section('title')
    سیستم مدیریتی مدرسه
@stop
@section('content')
    <!--start row-->
    @include('partials.success')
    <!-- Title -->
    <div class="row">
        <div class="col-sm-12 mb-20">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">داشبورد</h6>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('masterpage')}}">داشبورد</a></li>
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
                <p class="pb-20">خوش آمدید.</p>
            </div>
        </div>
        <!-- /Bordered Table -->
    </div>
    <!-- /Row -->
@stop
