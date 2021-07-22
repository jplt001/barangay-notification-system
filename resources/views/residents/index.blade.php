@extends('layouts.app')

@section('content')
<section class="wrapper site-min-height">
  <h3><i class="fa fa-angle-right"></i> Residents</h3>
  <div class="row mt">
    <div class="col-lg-12">
    <p>View and manage Residents</p>
    </div>
    <div class="col-md-12">
      <div class="showback">
        <h4><i class="fa fa-angle-right"></i> Resident List</h4>
        <div class="form-group" style="text-align: right;">
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-resident">New Resident</button>
        </div>
        <table id="tbl-residents">
          <thead>
            <th>Resident Name</th>
            <th>Contact No.</th>
            <th>Address</th>
            <!-- <th>Barangay</th> -->
            <th>Added When</th>
            <th style="text-align: center;">ACTIONS</th>
          </thead>
        </table>
      </div><!--/showback -->
    </div>
  </div>

</section><!--/wrapper -->

<!-- Add Resident Modal -->
<div id="add-resident" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Resident</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/residents') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="text-info">First Name</label>
            <input type="text" name="first_name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Middle Name</label>
            <input type="text" name="middle_name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Last Name</label>
            <input type="text" name="last_name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Contact No</label>
            <input type="text" name="contact_no" class="form-control" required="">
          </div>
          <!-- <div class="form-group">
            <label class="text-info">Barangay</label>
            <input type="text" name="barangay" class="form-control" required="">
          </div> -->
          <div class="form-group">
            <label class="text-info">Address</label>
            <textarea name="address" class="form-control" style="resize: vertical;" required=""></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Save</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Edit Resident Modal -->
<div id="edit-residentd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Resident</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('resident/putUpdateResident') }}">
          <input type="hidden" name="_token"  id="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label class="text-info">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Middle Name</label>
            <input type="text" name="middle_name" id="middle_name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Contact No</label>
            <input type="text" name="contact_no" id="contact_no" class="form-control" required="">
          </div>
   <!--        <div class="form-group">
            <label class="text-info">Barangay</label>
            <input type="text" name="barangay" id="barangay" class="form-control" required="">
          </div> -->
          <div class="form-group">
            <label class="text-info">Address</label>
            <textarea name="address" id="address" class="form-control" style="resize: vertical;" required=""></textarea>
          </div>
          <input type="hidden" id="resident_id" name="resident_id">
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Save</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- View Resident Modal -->
<div id="view-residentd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Resident</h4>
      </div>
      <div class="modal-body">        
          <div class="form-group">
            <label class="text-info">First Name:</label>
            <label id="vFirstName"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Middle Name:</label>
            <label id="vMiddleName"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Last Name: </label>
            <label id="vLastName"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Contact No: </label>
            <label id="vContactNo"></label>
          </div>
   <!--        <div class="form-group">
            <label class="text-info">Barangay: </label>
            <label id="vBarangay"></label>
          </div> -->
          <div class="form-group">
            <label class="text-info">Address: </label>
            <label id="vAddress"></label>
          </div>
        
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection