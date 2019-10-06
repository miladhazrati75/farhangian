import React, { Component } from 'react'
import { Helmet } from 'react-helmet'
import ReactDOM from 'react-dom'
import { Link } from 'react-router-dom'
import Axios from 'axios'
class AddPlace extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            name: '',
            address: '',
            phone: '',
            capacity: '',
            managerName: '',
        };
        this.sendData = this.sendData.bind(this);
      }
      sendData() {
          let data = {
              name: this.state.name,
              address: this.state.address,
              phone: this.state.phone,
              capacity: this.state.capacity,
              managerName: this.state.managerName,
          } 
          console.log(data)
        Axios.post("/api/add/place", data)
        .then(res => {
          console.log(res);
            this.props.history.push('/Dashboard/PlacesList');
        })
        .catch(err => {
          console.log(err);
        });
      }
  render () {
    return (
        <div>
            <Helmet>
                <title>افزودن حوزه | دانشگاه فرهنگیان</title>
            </Helmet>
            <div className="row heading-bg" id="head-row">
                <div className="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 className="txt-dark">افزودن مدرسه جدید </h5>
                </div>
                <nav aria-label="breadcrumb">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/Dashboard">صفحه اصلی</Link></li>
                        <li className="breadcrumb-item"><Link to="/Dashboard/PlacesList">لیست حوزه ها</Link></li>
                        <li className="breadcrumb-item active" aria-current="page">افزودن</li>
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
                            <div style={{padding: 22 + 'px'}}>
                                <div className="row">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10"> نام حوزه</label>
                                            <input type="text"  className="form-control"  name="name" id="name" required="" onInvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" onInput="setCustomValidity('')" onChange={text => { this.setState({ name: text.target.value });}} />
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">ادرس حوزه </label>
                                            <input type="text" className="form-control" name="address" id="address" required="" onInvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" onInput="setCustomValidity('')" onChange={text => { this.setState({ address: text.target.value });}}/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">تلفن حوزه </label>
                                            <input type="text" className="form-control" name="phone" id="phone" required="" onInvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" onInput="setCustomValidity('')" onChange={text => { this.setState({ phone: text.target.value });}}/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10"> نام مدیر</label>
                                            <input type="text" className="form-control" name="managerName" id="managerName" required="" onInvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" onInput="setCustomValidity('')" onChange={text => { this.setState({ managerName: text.target.value });}}/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">ظرفیت پذیرش</label>
                                            <input type="text"  className="form-control" name="capacity" id="capacity" required="" onInvalid="this.setCustomValidity('لطفا این فیلد را پر کنید')" onInput="setCustomValidity('')" onChange={text => { this.setState({ capacity: text.target.value });}}/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>


                                <div className="form-actions mt-20">
                                    <button onClick={() => { this.sendData()}} className="btn btn-success btn-icon left-icon mr-10 pull-left"> <i className="fa fa-check"></i> <span>افزودن</span></button>
                                    <Link to="/Dashboard/PlacesList">
                                        <button type="button" className="btn btn-warning pull-left">لغو</button>
                                    </Link>
                                        <div className="clearfix"></div>
                                </div>
                            </div>
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

export default AddPlace;
