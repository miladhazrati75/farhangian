import React, { Component } from 'react'
import { Helmet } from 'react-helmet'
import ReactDOM from 'react-dom'
import Axios from 'axios'
import { Link } from 'react-router-dom'

class EditProfessor extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            ProfessorsData: {},
            name: '',
            family: '',
            profCode: '',
            nationalCode: '',
            education: '',
        };
        this.sendData = this.sendData.bind(this);
      }
      fetchData() {
        Axios.get("/api/edit/professor/" + this.props.match.params.id)
          .then(res => {
            console.log(res);
            this.setState({ ProfessorsData: res.data });
            this.setState({
                name: res.data.name,
                family: res.data.family,
                profCode: res.data.Professor_Code,
                nationalCode: res.data.National_Code,
                education: res.data.education,
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
              Professor_Code: this.state.profCode,
              National_Code: this.state.nationalCode,
              education: this.state.education,
          } 
          console.log(data)
        Axios.post("/api/edit/professor/" + this.state.ProfessorsData.id, data)
        .then(res => {
          console.log(res);
            this.props.history.push('/Dashboard/ProfessorsList');
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
                <title>ویرایش استاد | دانشگاه فرهنگیان</title>
            </Helmet>
            <div className="row heading-bg" id="head-row">
        <div className="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 className="txt-dark">افزودن استاد جدید </h5>
        </div>
        <nav aria-label="breadcrumb">
            <ol className="breadcrumb">
                <li className="breadcrumb-item"><a href="index.html">صفحه اصلی</a></li>
                <li className="breadcrumb-item"><a href="index.html">لیست اساتید</a></li>
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
                            <div style={{padding: 22 + 'px'}}>
                                <div className="row">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">نام</label>
                                            <input type="text" id="firstName" name="name" className="form-control" defaultValue={ this.state.ProfessorsData.name } onChange={text => { this.setState({ name: text.target.value });}} />
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">نام خانوادگی</label>
                                            <input type="text" id="lastName" name="family" className="form-control" defaultValue={ this.state.ProfessorsData.family } onChange={text => { this.setState({ family: text.target.value });}}/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">شماره استادی</label>
                                            <input type="text" id="Professor_Code" name="Professor_Code" className="form-control" defaultValue={ this.state.ProfessorsData.Professor_Code } onChange={text => { this.setState({ profCode: text.target.value });}}/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">شماره ملی</label>
                                            <input type="text" id="National_Code" name="National_Code" className="form-control" value={ this.state.ProfessorsData.National_Code } onChange={text => { this.setState({ nationalCode: text.target.value });}}/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>
                                <div className="row mt-10">
                                    <div className="col-md-6">
                                        <div className="form-group">
                                            <label className="control-label mb-10">تحصیلات</label>
                                            <input type="text" id="education" name="education" className="form-control" value={ this.state.ProfessorsData.education } onChange={text => { this.setState({ education: text.target.value });}}/>
                                        </div>
                                    </div>
                                    <div className="col-md-6">

                                    </div>
                                </div>


                                <div className="form-actions mt-20">
                                    <button onClick={() => { this.sendData()}} className="btn btn-success btn-icon left-icon mr-10 pull-left">
                                        <i className="fa fa-check"></i> <span>ثبت</span>
                                    </button>
                                    <Link to="/Dashboard/ProfessorsList">
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

export default EditProfessor;
