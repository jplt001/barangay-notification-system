@extends('layouts.app')

@section('content')
<style type="text/css">
/*.dataTables_wrapper .dataTables_filter input{
        display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  
  }
  .dataTables_filter label{
    visibility: hidden;
  }*/
</style>
<section class="wrapper">

    <div class="row">
        <div class="col-lg-12">
          <h1>Dashboard</h1>
        </div>
        <div class="col-lg-9">
          <h4><i class="fa fa-angle-right"></i> Populations</h4>
          <div class="row mt">
            <div class="col-md-4 col-sm-4 mb">
              <div class="darkblue-panel pn">
                <div class="darkblue-header">
                  <h5>Kids</h5>
                </div>
                <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                <!-- <p>0</p> -->
                <footer>
                  <div class="centered">
                    <h5><i class="fa fa-users"></i> 0</h5>
                  </div>
                </footer>
              </div><!-- /darkblue panel -->
            </div><!-- /col-md-4 -->
            <div class="col-md-4 col-sm-4 mb">
              <div class="darkblue-panel pn">
                <div class="darkblue-header">
                  <h5>Teenagers</h5>
                </div>
                <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                <!-- <p>+ 1,789 NEW VISITS</p> -->
                <footer>
                  <div class="centered">
                    <h5><i class="fa fa-users"></i> 0</h5>
                  </div>
                </footer>
              </div><!-- /darkblue panel -->
            </div><!-- /col-md-4 -->
            <div class="col-md-4 col-sm-4 mb">
              <div class="darkblue-panel pn">
                <div class="darkblue-header">
                  <h5>Adults</h5>
                </div>
                <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                <!-- <p>+ 1,789 NEW VISITS</p> -->
                <footer>
                  <div class="centered">
                    <h5><i class="fa fa-trophy"></i> 0</h5>
                  </div>
                </footer>
              </div><!-- /darkblue panel -->
            </div><!-- /col-md-4 -->
          </div>
          <div class="row mt">
            
              <div class="col-md-6 col-sm-12 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Senior</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                  <!-- <p>0</p> -->
                  <footer>
                    <div class="centered">
                      <h5><i class="fa fa-trophy"></i> 0</h5>
                    </div>
                  </footer>
                </div><!-- /darkblue panel -->
              </div><!-- /col-md-6 -->
            
              <div class="col-md-6 col-sm-12 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>PWD</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                  <!-- <p>+ 1,789 NEW VISITS</p> -->
                  <footer>
                    <div class="centered">
                      <h5><i class="fa fa-trophy"></i> 0</h5>
                    </div>
                  </footer>
                </div><!-- /darkblue panel -->
              </div><!-- /col-md-4 -->
          </div>

          <h4><i class="fa fa-angle-right"></i> Medical Equipments</h4>
          <div class="row mt">
            <div class="col-md-12 col-sm-12">
              <div class="panel panel-danger">
                <div class="panel-body">
                  <table id="tbl-mdcl-equip" class="table">
                    <thead>
                      <th>Srl. #</th>
                      <th>Equipment Name</th>
                      <th>Available Qty</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#0000000</td>
                        <td>TEST</td>
                        <td>0</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <th>Srl. #</th>
                      <th>Equipment Name</th>
                      <th>Available Qty</th>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <h4><i class="fa fa-angle-right"></i> Barangay Budget/ Summary of Expenses</h4>
          <div class="row mt">
            <div class="col-md-12 col-sm-12">
              <div class="panel panel-danger">
                <div class="panel-body">
                  <table id="tbl-summary-expense" class="table table-stripped table-hover">
                    <thead>
                      <th>Rec#</th>
                      <th>Date</th>
                      <th>Description</th>
                      <th>Amount</th>
                      <th>Note</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#0000000</td>
                        <td>2018-01-03</td>
                        <td>Test Description</td>
                        <td>Php 12, 000</td>
                        <td>n/a</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <th>Rec#</th>
                      <th>Date</th>
                      <th>Description</th>
                      <th>Amount</th>
                      <th>Note</th>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <h4><i class="fa fa-angle-right"></i> 4P's Members</h4>
          <div class="row mt">
            <div class="col-md-12 col-sm-12">
              <div class="panel panel-danger">
                <div class="panel-body">
                  <table id="tbl-summary-expense" class="table table-stripped table-hover">
                    <thead>
                      <th>Member Name</th>
                      <th>Member Since</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Malveda, Romel K.</td>
                        <td>{{ date('Y-m-d H:i:s') }}</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <th>Member Name</th>
                      <th>Member Since</th>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /col-lg-9 END SECTION MIDDLE -->
        
        
<!-- **********************************************************************************************************************************************************
RIGHT SIDEBAR CONTENT
*********************************************************************************************************************************************************** -->                  
        
        <div class="col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>NOTIFICATIONS</h3>
                              
            <!-- First Action -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p><muted>2 Minutes Ago</muted><br/>
                   <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                </p>
              </div>
            </div>
            <!-- Second Action -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p><muted>3 Hours Ago</muted><br/>
                   <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>
            <!-- Third Action -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p><muted>7 Hours Ago</muted><br/>
                   <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>
            <!-- Fourth Action -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p><muted>11 Hours Ago</muted><br/>
                   <a href="#">Mark Twain</a> commented your post.<br/>
                </p>
              </div>
            </div>
            <!-- Fifth Action -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p><muted>18 Hours Ago</muted><br/>
                   <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                </p>
              </div>
            </div>
            <!-- CALENDAR-->
            <div id="calendar" class="mb">
                <div class="panel green-panel no-margin">
                    <div class="panel-body">
                        <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                            <div class="arrow"></div>
                            <h3 class="popover-title" style="disadding: none;"></h3>
                            <div id="date-popover-content" class="popover-content"></div>
                        </div>
                        <div id="my-calendar"></div>
                    </div>
                </div>
            </div><!-- / calendar -->
            
        </div><!-- /col-lg-3 -->
    </div><!--/row -->
</section>
@endsection