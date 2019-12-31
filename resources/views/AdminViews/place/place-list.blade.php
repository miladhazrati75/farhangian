@extends('layout.main')
@section('title')
    لیست  مدارس|دانشگاه فرهنگیان
@stop
@section('content')
    <!-- Main Content -->
    <!--start row-->
    @include('partials.success')
<script src="/js/myJq.js"></script>
    <script>
        $(document).ready(function(){
            $(".details").click(function () {
                var placeId = $(this).attr("id");
                var count = $(this).attr("count");
                $.get('/details/place', {placeId: placeId}, function (data) {

                    //Getting nformations from server
                    var nameSchool = data["nameSchool"];
                    var address = data["address"];
                    var phone = data["phone"];
                    var managerName = data["managerName"];
                    var capacity = data["capacity"];
                    // var assistant = data["assistant"];

                    //set values in modal
                    $("#count").text(count);
                    $("#name").text(nameSchool);
                    $("#adres").text(address);
                    $("#telephone").text(phone);
                    $("#modir").text(managerName);
                    // $("#moaven").text(education);
                    $("#zarfiat").text(capacity);

                });
            });


            $(".searchSubmit").click(function () {

                var searchInput = $(".searchInput").val();
                var count;
                $.get('/search/place', {searchInput: searchInput}, function (data) {
                    console.log(data);

                    var nameSchool = data[0]["nameSchool"];
                    var address = data[0]["address"];
                    var phone = data[0]["phone"];
                    var managerName = data[0]["managerName"];
                    var capacity = data[0]["capacity"];
                    // var assistant = data["assistant"];



                    //set values in modal
                    // $("#table").text(" ");
                    // $("#radifCount").text(count);
                    $("#radifCount").text(count);
                    $("#nameSchool").text(nameSchool);
                    $("#address").text(address);
                    $("#tel").text(phone);
                    $("#manager").text(managerName);
                    // $("#moaven").text(education);
                    $("#capacity").text(capacity);


                });

            });




        });
    </script>


    <!-- Title -->
    <div class="row heading-bg" id="head-row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">لیست مدارس</h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
                <li class="breadcrumb-item"><a href="{{route('place-list')}}">لیست   مدارس</a></li>
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
                    <a href="{{route('download.place.info')}}">
                            <div class="btn btn-warning btn-rounded btn-anim mt-5"><i
                                    class="fa fa-download"></i><span class="btn-text">دانلود</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                        <a href="{{route('add-get-place')}}">
                            <div class="btn btn-danger btn-rounded btn-anim mt-5"><i
                                    class="fa fa-plus"></i><span class="btn-text">افزودن</span>
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
                                        <h5 class="modal-title" id="exampleModalLabel">لیست مدارس</h5>
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
                                                            <td class="header-table">نام مدرسه
                                                            </td>
                                                            <td id="nameSchool"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="header-table">ادرس مدرسه</td>
                                                            <td id="address"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="header-table">تلفن مدرسه</td>
                                                            <td id="tel"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="header-table">نام مدیر</td>
                                                            <td id="manager"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="header-table">نام معاون</td>
                                                            <td id="assistant"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="header-table">ظرفیت پذیرش</td>
                                                            <td id="capacity"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="header-table">پسورد</td>
                                                            <td></td>
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


                                    <!--start modal details-->
                                    <div class="modal fade" id="#exampleModaldetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">مشخصات مدرسه</h5>
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
                                                                                <th>نام مدرسه</th>
                                                                                <th> ادرس مدرسه</th>
                                                                                <th>تلفن مدرسه</th>
                                                                                <th>نام مدیر</th>
                                                                                <th>نام معاون</th>
                                                                                <th>ظرفیت پذیرش</th>
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
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th id="radif">ردیف</th>
                                        <th id="nameSchool">نام مدرسه</th>
                                        <th id="address"> ادرس مدرسه</th>
                                        <th id="tel">تلفن مدرسه</th>
                                        <th id="manager">نام مدیر</th>
                                        <th id="assistant">نام معاون</th>
                                        <th id="capacity">ظرفیت پذیرش</th>
                                        <th class="text-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($places && count($places)>0)
                                        {{$i=1}}
                                        @foreach($places as $place)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$place->nameSchool}}</td>
                                                <td>{{$place->address}}</td>
                                                <td>{{$place->phone}}</td>
                                                <td>{{$place->managerName}} </td>
                                                <td><!--نام معاون--> </td>
                                                <td> {{$place->capacity}}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{route('edit-get-place',[$place->id])}}" class="mr-10" data-toggle="tooltip" data-original-title="ویرایش">
                                                        <i class="fa fa-pencil text-inverse m-r-10" style="color:#2ecd99;"></i>
                                                    </a>
                                                    <a href="{{route('delete.place',[$place->id])}}"class="mr-10" data-toggle="tooltip" data-original-title="حذف">
                                                        <i class="fa fa-close text-danger"></i>
                                                    </a>
                                                    <a id="{{$place->id}}" count="{{$i}}" class="details"
                                                        data-toggle="tooltip"
                                                        data-original-title="جزئیات">
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
                                                <h5 class="modal-title" id="exampleModalLabel">مشخصات مدرسه</h5>
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

                                                <tr>
                                                        <td class="header-table">نام مدرسه</td>
                                                        <td id="name"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="header-table"> ادرس مدرسه</td>
                                                        <td id="adres"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="header-table">تلفن مدرسه</td>
                                                        <td id="telephone"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="header-table">نام مدیر</td>
                                                        <td id="modir"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="header-table">نام معاون</td>
                                                        <td id=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="header-table">ظرفیت پذیرش</td>
                                                        <td id=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="header-table">تعداد پایه ها </td>
                                                        <td id=""></td>
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
                        <form action="{{ route('import.place.info') }}" method="post" enctype="multipart/form-data">
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

    <!-- /Main Content -->
@stop




