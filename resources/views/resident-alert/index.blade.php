@extends('layouts.app')

@section('content')
<section class="wrapper site-min-height">
  <h3><i class="fa fa-angle-right"></i> Barangay Alert</h3>
  <div class="row mt">
    <div class="col-lg-12">
    <p>View and manage Barangay Alert</p>
    </div>
    <div class="col-md-12">
      <div class="showback">
        <h4><i class="fa fa-angle-right"></i> Barangay Alert List</h4>
        <table id="tbl-barangay-alert">
          <thead>
            <th>Reported By</th>
            <!-- <th>Contact Number</th> -->
            <th>Type of Incident</th>
            <th>Status</th>
            <th style="text-align: center;">ACTIONS</th>
          </thead>
        </table>
      </div><!--/showback -->
    </div>
  </div>
  <div id="view-barangay-alert" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alert Information</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label class="text-info">Reported By: </label>
            <label id="reportedByView"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Emergency: </label>
            <label id="emergencyView"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Description: </label>
            <label id="detailsView"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Date of Report: </label>
            <label id="reportedWhenView"></label>
          </div>
          <div class="form-group" id="action_taken_byDiv">
            <label class="text-info">Action Taken By: </label>
            <label id="action_taken_byView"></label>
          </div>
        
      </div>
      <div class="modal-footer">
        <!-- <button type="submit" class="btn btn-info">Save</button> -->
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <div id="is-done-barangay-alert" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alert Information</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label class="text-info">Reported By: </label>
            <label id="reportedByDone"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Emergency: </label>
            <label id="emergencyDone"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Description: </label>
            <label id="detailsDone"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Date of Report: </label>
            <label id="reportedWhenDone"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Attachments: </label>
            <div id="attachmentsImage3" class="form-group"></div>
          </div>
          <div class="form-group">
            <label class="text-info">Action Taken By: </label>
            <label id="action_taken_byDone"></label>
          </div>
          <input type="hidden" id="report_id2">
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="mdalSetAccidentReportDone()">Done</button>
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>

</div><div id="first-todo-barangay-alert" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alert Information</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label class="text-info">Reported By: </label>
            <label id="reportedBy"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Emergency: </label>
            <label id="emergency"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Description: </label>
            <label id="details"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Date of Report: </label>
            <label id="reportedWhen"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Attachments: </label>
            <div class="form-group" style="height: 300px; overflow-y: auto;">
              <div id="attachmentsImage2" >
                
              </div>
            </div>
          </div>
          <form method="POST" action="{{ URL::to('/barangay-alert') }}">
            {{ csrf_field() }}
            <input type="hidden" id="event" name="event" value="first">
            <input type="hidden" id="report_id" name="report_id">
          <div class="form-group">
            <label class="text-info">Action Taken By: </label>
            <select class="form-control" name="action_taken_by">
              @foreach($brgy_mmbr as $v)
                <option value="{{$v->id}}">{{ $v->name }}</option>
              @endforeach
            </select>
          </div>
        
      </div>
      <div class="modal-footer">  
        <button class="btn btn-info" type="submit">Save</button>
        </form>
        <button type="button" class="btn btn-warning" onclick="cancelAccidentReport()">Cancel Accident Report</button>
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>
</section><!--/wrapper -->


@endsection