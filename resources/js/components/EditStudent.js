import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'

class EditStudent extends React.Component {
  render () {
    return (
        <div>
            <div className="row heading-bg" id="head-row">
                <div className="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 className="txt-dark">ویرایش اطلاعات دانشجو</h5>
                </div>
                <nav aria-label="breadcrumb">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
                        <li className="breadcrumb-item"><a href="{{route('student-list')}}">لیست دانشجویان</a></li>
                        <li className="breadcrumb-item active">ویرایش</li>
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
                                    <form action="#" method="post" style={{padding: 22 + 'px'}}>
                                        <div className="row">
                                            <div className="col-md-6">
                                                <div className="form-group">
                                                    <label className="control-label mb-10">نام</label>
                                                    <input type="text" id="name" name="name" className="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->name : '')}}" />
                                                </div>
                                            </div>
                                            <div className="col-md-6">

                                            </div>
                                        </div>
                                        <div className="row mt-10">
                                            <div className="col-md-6">
                                                <div className="form-group">
                                                    <label className="control-label mb-10">نام خانوادگی</label>
                                                    <input type="text" id="family" name="family" className="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->family : '')}}" />
                                                </div>
                                            </div>
                                            <div className="col-md-6">

                                            </div>
                                        </div>
                                        <div className="row mt-10">
                                            <div className="col-md-6">
                                                <div className="form-group">
                                                    <label className="control-label mb-10">شماره دانشجویی</label>
                                                    <input type="text" id="student_code" name="student_code" className="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->student_code : '')}}" />
                                                </div>
                                            </div>
                                            <div className="col-md-6">

                                            </div>
                                        </div>
                                        <div className="row mt-10">
                                            <div className="col-md-6">
                                                <div className="form-group">
                                                    <label className="control-label mb-10">شماره ملی</label>
                                                    <input type="text" id="National_Code" name="National_Code" className="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->National_Code : '')}}" />
                                                </div>
                                            </div>
                                            <div className="col-md-6">

                                            </div>
                                        </div>
                                        <div className="row mt-10">
                                            <div className="col-md-6">
                                                <div className="form-group">
                                                    <label className="control-label mb-10">ترم</label>
                                                    <input type="text" id="term" name="term" className="form-control"
                                                           value="{{old('name',isset($studentItem) ? $studentItem->term : '')}}" />
                                                </div>
                                            </div>
                                            <div className="col-md-6">

                                            </div>
                                        </div>


                                        <div className="form-actions mt-20">
                                            <button className="btn btn-success btn-icon left-icon mr-10 pull-left"><i
                                                        className="fa fa-check"></i> <span>ثبت</span></button>
                                            <button type="button" className="btn btn-warning pull-left">لغو</button>
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

export default EditStudent;
