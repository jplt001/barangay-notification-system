@extends('layouts.app')

@section('content')
<section class="wrapper site-min-height">
  <h3><i class="fa fa-angle-right"></i> Barangay Members</h3>
  <div class="row mt">
    <div class="col-lg-12">
    <p>View and manage Barangay Members</p>
    </div>

    <div class="col-md-12">
      <div class="showback">
        <h4><i class="fa fa-angle-right"></i> Barangay Members List</h4>
        <div class="form-group" style="text-align: right;">
          <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-barangay-member">Add Barangay Member</button>
        </div>
        
        <table class="table">
          <tbody>
            @foreach($positions as $v)
            <tr>
               <td colspan="3"><i class="fa fa-angle-right"></i> <b>{{$v->position_name}}</b></td>
            </tr>
             
              @foreach($members as $k=> $v1)
                @if($v1->position_id == $v->id)
                <tr>
                  <td></td>
                  <td>{{ $v1->name }}</td>
                  <td><img src="{{ asset('Theme/assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></td>
                </tr>
                @endif
              @endforeach
            @endforeach
          </tbody>
        </table>
      </div><!--/showback -->
    </div>
  </div>

</section><!--/wrapper -->

<!-- Add Barangay Member Modal -->
<div id="add-barangay-member" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Barangay Member</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/members') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="text-info">User Name</label>
            <input type="text" name="user_name" class="form-control" required="">
          </div>
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
            <label class="text-info">Position:</label>
            <select class="form-control" name="position_id" id="position_id">
              @foreach($positions as $v)
              <option value="{{$v->id}}">{{ $v->position_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label class="text-info">Email</label>
            <input type="email" name="email" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Address</label>
            <textarea name="address" class="form-control" style="resize: vertical;" required=""></textarea>
          </div>
          <div class="form-group">
            <label class="text-info">Password</label>
            <input type="password" name="password" id="password" minlength="6" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Re-Type Password</label>
            <input type="password" id="reTypePassword" minlength="6" class="form-control" required="">            
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" id="btnSave" class="btn btn-info" disabled="">Save</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Edit Barangay Member Modal -->
<div id="edit-barangay-member" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Barangay Member</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/members/postMemberUpdate') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="text-info">First Name</label>
            <input type="text" name="first_name"  id="e_first_name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Middle Name</label>
            <input type="text" name="middle_name"  id="e_middle_name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Last Name</label>
            <input type="text" name="last_name"  id="e_last_name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Position:</label>
            <select class="form-control" name="e_position_id" id="e_position_id">
              @foreach($positions as $v)
              <option value="{{$v->id}}">{{ $v->position_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label class="text-info">Email</label>
            <input type="email" name="email"  id="e_email" class="form-control" required="">
          </div>
          <div class="form-group">
            <label class="text-info">Address</label>
            <textarea name="address"  id="e_address" class="form-control" style="resize: vertical;" required=""></textarea>
          </div>

          <input type="hidden" name="member_id" id="member_id" >
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info" >Save</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- View Barangay Member Modal -->
<div id="view-barangay-member" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Barangay Member Details</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label class="text-info">Username: </label>
            <label id="mVUserName"></label>
          </div>
          <div class="form-group">
            <label class="text-info">First Name: </label>
            <label id="mVFirstName"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Middle Name: </label>
            <label id="mVMiddletName"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Last Name: </label>
            <label id="mVLastName"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Position: </label>
            <label id="mVPosition"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Email: </label>
            <label id="mVEmail"></label>
          </div>
          <div class="form-group">
            <label class="text-info">Address: </label>
            <label id="mVAddress"></label>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Save</button>
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection