import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import Axios from 'axios'
import { Link } from 'react-router-dom'
import { Helmet } from 'react-helmet'

class EditStudent extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            userData: {},
            name: '',
            family: '',
            studentCode: '',
            nationalCode: '',
            term: '',
        };
        this.sendData = this.sendData.bind(this);
      }
      fetchData() {
        Axios.get("/api/edit/student/" + this.props.match.params.id)
          .then(res => {
            console.log(res);
            this.setState({ userData: res.data });
            this.setState({
                name: res.data.name,
                family: res.data.family,
                studentCode: res.data.student_code,
                nationalCode: res.data.National_Code,
                term: res.data.term,
            })
            console.log(this.state)
          })
          .catch(err => {
            console.log(err);
          });
      }
      sendData() {
          let data = {
              name: this.state.name,
              family: this.state.family,
              student_code: this.state.studentCode,
              National_Code: this.state.nationalCode,
              term: this.state.term,
          } 
          console.log(data)
        Axios.post("/api/edit/student/" + this.state.userData.id, data)
        .then(res => {
          console.log(res);
            this.props.history.push('/Dashboard/StudentsList');
        })
        .catch(err => {
          console.log(err);
        });
      }
      componentDidMount() {
        this.fetchData();
      }
  render () {
    return (
        <div>
            <Helmet>
                <title>ویرایش دانشجو | دانشگاه فرهنگیان</title>
            </Helmet>
            <div className="row heading-bg" id="head-row">
                <div className="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 className="txt-dark">ویرایش اطلاعات دانشجو</h5>
                </div>
                <nav aria-label="breadcrumb">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/Dashboard">صفحه اصلی</Link></li>
                        <li className="breadcrumb-item"><Link to="/Dashboard/StudentsList">لیست دانشجویان</Link></li>
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
                                    <div style={{padding: 22 + 'px'}}>
                                        <div className="row">
                                            <div className="col-md-6">
                                                <div className="form-group">
                                                    <label className="control-label mb-10">نام</label>
                                                    <input type="text" id="name" className="form-control"
                                                           onChange={text => { this.setState({ name: text.target.value });}} defaultValue={ this.state.userData.name }/>
                                                </div>
                                            </div>
                                            <div className="col-md-6">

                                            </div>
                                        </div>
                                        <div className="row mt-10">
                                            <div className="col-md-6">
                                                <div className="form-group">
                                                    <label className="control-label mb-10">نام خانوادگی</label>
                                                    <input type="text" id="family" className="form-control"
                                                           defaultValue={ this.state.userData.family } onChange={text => { this.setState({ family: text.target.value });}} />
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
                                                           defaultValue={ this.state.userData.student_code } onChange={text => { this.setState({ studentCode: text.target.value });}}/>
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
                                                           defaultValue={ this.state.userData.National_Code } onChange={text => { this.setState({ nationalCode: text.target.value });}}/>
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
                                                           defaultValue={ this.state.userData.term } onChange={text => { this.setState({ term: text.target.value });}} />
                                                </div>
                                            </div>
                                            <div className="col-md-6">

                                            </div>
                                        </div>


                                        <div className="mt-20">
                                            <button onClick={() => { this.sendData()}} className="btn btn-success btn-icon left-icon mr-10 pull-left"><i
                                                        className="fa fa-check"></i> <span>ثبت</span></button>
                                            <button type="button" className="btn btn-warning pull-left">لغو</button>
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

export default EditStudent;
