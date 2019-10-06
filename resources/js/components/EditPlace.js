import React, { Component } from 'react'
import { Helmet } from 'react-helmet'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Login from './Login'
import Dashboard from './Dashboard'
class EditPlace extends React.Component {
  render () {
    return (
        <div>
            <Helmet>
                <title>ویرایش حوزه | دانشگاه فرهنگیان</title>
            </Helmet>
          <div className="row heading-bg" id="head-row">
        <div className="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 className="txt-dark"> ویرایش اطلاعات قبلی </h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol className="breadcrumb">
                <li className="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>

                <li className="breadcrumb-item"><a href="{{route('place-list')}}">لیست حوزه ها</a></li>
                <li className="breadcrumb-item active" aria-current="page">ویرایش</li>
            </ol>
        </nav>
    </div>
    <div className="row">
        <div className="col-sm-12">
            <div className="panel panel-default card-view">
                <div className="panel-wrapper collapse in">
                    <div className="panel-body">
                        <div className="form-wrap">
                            @include('partials.errors')
                            <form action="#" method="post" style={{padding: 22 + 'px' }}>
                                <div className="row">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">نام حوزه</label>
                                            <input type="text" id="nameSchool" name="nameSchool" className="form-control" value={ this.state.PlacesData.name }/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">ادرس حوزه </label>
                                            <input type="text" id="address" name="address" className="form-control" value="{{old('name',isset($place) ? $place->address : '')}}"/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10"> تلفن حوزه</label>
                                            <input type="text" id="phone" name="phone" className="form-control" value="{{old('name',isset($place) ? $place->phone : '')}}"/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10"> نام مدیر</label>
                                            <input type="text" id="managerName" name="managerName" className="form-control" value="{{old('name',isset($place) ? $place->managerName : '')}}"/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">ظرفیت پذیرش</label>
                                            <input type="text" id="capacity" name="capacity" className="form-control" value="{{old('name',isset($place) ? $place->capacity : '')}}"/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>


                                <div className="form-actions mt-20">
                                    <button className="btn btn-success btn-icon left-icon mr-10 pull-left">
                                        <i className="fa fa-check"></i> <span>ثبت</span>
                                    </button>
                                    <a href="{{route('place-list')}}">
                                        <button type="button" className="btn btn-warning pull-left">لغو</button>
                                    </a>
                                        <div className="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>

    )
  }
}

export default EditPlace;
