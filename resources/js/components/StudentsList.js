import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import { Helmet } from 'react-helmet'
import Axios from 'axios'
class StudentsList extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            userData: [],
            successMsg: '',
            errorMsg: ''
        };
        //this.login = this.login.bind(this);
      }
      sendData(id) {
        Axios.get("/api/delete/student/" + id)
          .then(res => {
            console.log(res);
            this.setState({ successMsg: res.data });
            this.fetchData();
          })
          .catch(err => {
            this.setState({ errorMsg: err });
            console.log(err);
          });
      }
      fetchData() {
        Axios.get("/api/list-student")
          .then(res => {
            console.log(res);
            this.setState({ userData: res.data });
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
                <title>لیست دانشجویان | دانشگاه فرهنگیان</title>
            </Helmet>
            <div className="row heading-bg" id="head-row">
                <div className="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 className="txt-dark">لیست دانشجویان</h5>
                </div>
                <nav aria-label="breadcrumb">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><a href="{{route('masterpage')}}">صفحه اصلی</a></li>
                        <li className="breadcrumb-item"><a href="{{route('student-list')}}">لیست دانشجویان</a></li>
                    </ol>
                </nav>
            </div>
            <div className="row">
                <div className="col-sm-12">
                    <div className="panel panel-default card-view">
                        <div className="row">
                            <div id="example"></div>
                            <div className="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                                <a href="{{route('download.student.info')}}">
                                    <div className="btn btn-warning btn-rounded btn-anim mt-5">
                                        <i className="fa fa-download"></i><span className="btn-text">دانلود</span>
                                    </div>
                                </a>
                            </div>
                            <div className="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                                <Link to='/Dashboard/AddUser'>
                                    <div className="btn btn-danger btn-rounded btn-anim mt-5">
                                        <i className="fa fa-plus"></i>
                                        <span className="btn-text">افزودن</span>
                                    </div>
                                </Link>
                            </div>

                            <div className="col-lg-6 col-md-4 col-sm-2 col-xs-4"></div>


                            <div className="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                                <div className="row">
                                    <div className="col-xs-2">

                                    </div>

                                    <div className="col-xs-8">
                                        <div className="input-group mb-0 mt-5">
                                            <input type="text" id="example-input1-group4" name="example-input1-group4" className="form-control" placeholder="جستجو" />
                                            <span className="input-group-btn">
                                                <button type="submit" className="btn" id="span-btn">
                                                    <i className="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div className="col-xs-2"></div>
                                </div>

                            </div>
                        </div>
                        <div className="panel-wrapper collapse in">
                            <div className="panel-body">
                                <div className="table-wrap mt-5">
                                    <div className="table-responsive">
                                        <table className="table table-striped mb-0">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>نام و نام خانوادگی</th>
                                                <th>شماره دانشجویی</th>
                                                <th>شماره ملی</th>
                                                <th>موارد دیگر</th>
                                                <th>ترم</th>
                                                <th className="text-nowrap">عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {this.state.userData.map((item, index) => (
                                                    <tr key={index}>
                                                        <td>{index}</td>
                                                        <td>{item.name + ' ' + item.family}</td>
                                                        <td>{item.student_code}</td>
                                                        <td>{item.National_Code}</td>
                                                        <td></td>
                                                        <td>{item.term}</td>
                                                        <td className="text-nowrap">
                                                            <Link to={'/Dashboard/EditStudent/' + item.id }
                                                                    className="mr-25" data-toggle="tooltip"
                                                                    data-original-title="Edit"> <i
                                                                        className="fa fa-pencil text-inverse m-r-10"
                                                                        style={{color: '#2ecd99'}}></i> </Link> <a href="#"
                                                                    data-toggle="tooltip" data-original-title="delete">
                                                                <i onClick={() => { this.sendData(item.id)}} className="fa fa-close text-danger"></i> </a></td>
                                                    </tr>
                                            ))}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div className="modal fade" id="exampleModal1" tabIndex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">

                        <div className="modal-header">
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div className="modal-body">
                            <form method="post" action="#">
                                <form id="search_form" role="search" className="top-nav-search pull-left collapse in"
                                    aria-expanded="true">
                                    <div className="input-group">
                                        <label>آیا می خواهید حذف کنید؟</label>
                                    </div>
                                </form>


                                <div className="modal-footer">
                                    <button type="submit" className="btn btn-danger btn-anim" data-dismiss="modal"><i
                                                className="fa fa-recycle" aria-hidden="true"></i><span className="btn-text">delete</span>
                                    </button>
                                    <button type="button" className="btn btn-primary">close</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    )
  }
}

export default StudentsList;
