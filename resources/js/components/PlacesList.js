import React, { Component } from 'react'
import { Helmet } from 'react-helmet'
import ReactDOM from 'react-dom'
import { Link } from 'react-router-dom'
import Axios from 'axios'
class PlacesList extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
          PlacesData: [],
          successMsg: '',
          errorMsg: '',
        };
        //this.login = this.login.bind(this);
      }
      sendData(id) {
        Axios.get("/api/delete/place/" + id)
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
        Axios.get("/api/list-place")
          .then(res => {
            console.log(res);
            this.setState({ PlacesData: res.data });
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
                <title>لیست حوزه ها | دانشگاه فرهنگیان</title>
            </Helmet>
            <div className="row">
        <div className="col-sm-12 mb-20">
            <div className="panel-heading">
                <div className="pull-left">
                    <h6 className="panel-title txt-dark">لیست حوزه ها</h6>
                </div>
                <nav aria-label="breadcrumb">
                    <ol className="breadcrumb">
                        <li className="breadcrumb-item"><Link to="/Dashboard">صفحه اصلی</Link></li>
                        <li className="breadcrumb-item"><Link to="/Dashboard/PlacesList">لیست حوزه ها</Link></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div className="row">
        <div className="col-sm-12">
            <div className="panel panel-default card-view">
                <div className="row">
                    <div className="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0" id="div-btn">
                        <div className="btn btn-warning btn-rounded btn-anim mt-5"><i className="fa fa-download"></i><span className="btn-text">دانلود</span>
                        </div>
                    </div>
                    <div className="col-lg-1 col-md-1 col-sm-2 col-xs-4 mb-0">
                        <Link to="/Dashboard/AddPlace">
                            <div className="btn btn-danger btn-rounded btn-anim mt-5"> <i className="fa fa-plus"></i><span className="btn-text">افزودن</span>
                            </div>
                        </Link>
                    </div>
                    <div className="col-lg-6 col-md-4 col-sm-2 col-xs-4"></div>
                    <div className="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                        <div className="row">
                            <div className="col-xs-2"></div>
                            <div className="col-xs-8">
                                <div className="input-group mb-0 mt-5">
                                    <input type="text" id="example-input1-group4" name="example-input1-group4" className="form-control" placeholder="جستجو"/>
                                    <span className="input-group-btn">
                        <button type="submit" className="btn" id="span-btn"><i className="fa fa-search"></i></button>
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
                                        <th>نام حوزه</th>
                                        <th> ادرس حوزه</th>
                                        <th> تلفن حوزه</th>
                                        <th>نام مدیر</th>
                                        <th>ظرفیت پذیرش</th>
                                        <th className="text-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {this.state.PlacesData.map((item, index) => (
                                        <tr key={index}>
                                            <td>{index}</td>
                                            <td>{item.nameSchool}</td>
                                            <td>{item.address}</td>
                                            <td>{item.phone}</td>
                                            <td>{item.managerName}</td>
                                            <td>{item.capacity}</td>
                                            <td className="text-nowrap">
                                                <Link to={ "/Dashboard/EditPlace/" + item.id } className="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                    <i className="fa fa-pencil text-inverse m-r-10" style={{color: '#2ecd99'}}></i>
                                                </Link>
                                                <a href="#" data-toggle="tooltip" data-original-title="delete">
                                                    <i onClick={() => { this.sendData(item.id)}} className="fa fa-close text-danger"></i>
                                                </a>
                                            </td>
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
    <div className="modal fade" id="exampleModal1" tabIndex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div className="modal-dialog" role="document">
            <div className="modal-content">
                <div className="modal-header">
                    <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div className="modal-body">
                    <div>
                        <form id="search_form" role="search" className="top-nav-search pull-left collapse in" aria-expanded="true" >
                            <div className="input-group">
                                <label>آیا می خواهید حذف کنید؟</label>
                            </div>
                        </form>
                        <div className="modal-footer">
                            <button type="submit"  className="btn btn-danger btn-anim" data-dismiss="modal"><i className="fa fa-recycle" aria-hidden="true"></i><span className="btn-text">delete</span></button>
                            <button type="button" className="btn btn-primary">close</button>
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

export default PlacesList;
