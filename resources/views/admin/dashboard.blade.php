@extends('admin.main')

@section('title', 'Dashboard')

@section('content')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">place</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Centers</p>
                                    <h3 class="title">{{ $centers_count }}
                                        <!--<small>CENTERS</small>-->
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-success">cloud_circle</i>
                                        Tracked from Database
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">list</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Courses</p>
                                    <h3 class="title">{{ $courses_count }}</h3>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons text-success">cloud_circle</i>
                                      Tracked from Database
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Enrollments</p>
                                    <h3 class="title">{{ $enrollments_count }}</h3>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons text-success">cloud_circle</i>
                                      Tracked from Database
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Admins</p>
                                    <h3 class="title">{{ $admins_count }}</h3>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons text-success">cloud_circle</i>
                                      Tracked from Database
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="green">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Daily Visitors</h4>
                                    <p class="category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today visitors.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> Updates on every refresh
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="orange">
                                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Enrollments Tracking</h4>
                                    <p class="category">Last Month Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> Updates on every refresh
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Website Tasks :</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#optimize" data-toggle="tab">
                                                        <i class="material-icons">gavel</i> Optimize
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#server" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Server
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="optimize">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">delete_sweep</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Clear Website's Visitor Tracking Data</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="It can't be undone" class="btn btn-primary btn-simple btn-xs">
                                                                Clear Now !
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="server">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">cloud_download</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Backup Database</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="For avoiding unstable losses" class="btn btn-primary btn-simple btn-xs">
                                                                Backup Now !
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
